<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Images extends Alatis {

    private	$allowed_extentions = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF");

    public function __construct($db) {
        parent::__construct($db);
    }

    public function GetAllImages($filter = array()) { // для сайта и админки

        $page_id_filter = '';
        if(!empty($filter['page_id'])) {
            $page_id_filter = " page_id in(".$filter['page_id'].") AND module_id = '".$filter['module_id']."'";
        }

        $SQL = "SELECT * FROM ".PREF."images WHERE {$page_id_filter} ORDER BY page_id, position";
        return $this->db->getAll($SQL);
    }

    public function UpdateFile($id, $data) {
        $this->db->AutoExecute(PREF."images", $data, 'UPDATE', 'id_item='.$id);
    }

    public function AddFile($data) {
        $this->db->AutoExecute(PREF."images", $data, 'INSERT');
        $Id = $this->db->insert_Id();
        $this->UpdateFile($Id, array('position'=>$Id));
        return $Id;
    }

    public function DeleteFile($filter = array()) {
        $page_id_filter = '';
        $id_filter = '';

        if(isset($filter['page_id']) && !isset($filter['module_id'])) {
            return array();
        }
        if(isset($filter['page_id'])){
            $page_id_filter = "module_id = '".$filter['module_id']."' AND page_id = ".$filter['page_id'];
        }
        if(!empty($filter['id_item'])) {
            $id_filter ="id_item = ".$filter['id_item'];
        }

        $SQL = "SELECT * FROM ".PREF."images WHERE {$id_filter}{$page_id_filter}";
        $images = $this->db->getAll($SQL);
        if (!empty($images)) {
            foreach ($images as $image) {
                $this->validate->DeleteFile($image['filename']);
            }
        }
        $SQL = "DELETE FROM ".PREF."images WHERE {$id_filter}{$page_id_filter}";
        $this->db->execute($SQL);
    }




}
?>
