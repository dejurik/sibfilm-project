<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Files extends Alatis {

    public function __construct($db) {
        parent::__construct($db);
    }

    public function GetAllFiles($filter = array()) { // для сайта и админки
        $page_id_filter = '';
        if(!empty($filter['page_id'])) {
            $page_id_filter = " page_id in(".$filter['page_id'].") AND module_id = '".$filter['module_id']."'";
        }
        $SQL = "SELECT * FROM ".PREF."files WHERE {$page_id_filter} ORDER BY page_id, position";
        return $this->db->getAll($SQL);
    }

    public function UpdateFile($id, $data) {
        $this->db->AutoExecute(PREF."files", $data, 'UPDATE', 'id_item='.$id);
    }

    public function AddFile($data) { // для сайта и админки
        $this->db->AutoExecute(PREF."files", $data, 'INSERT');
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

        $SQL = "SELECT * FROM ".PREF."files WHERE {$id_filter}{$page_id_filter}";
        $files = $this->db->getAll($SQL);
        if (!empty($files)) {
            foreach ($files as $file) {
                $this->validate->DeleteFile($file['filename']);
            }
        }
        $SQL = "DELETE FROM ".PREF."files WHERE {$id_filter}{$page_id_filter}";
        $this->db->execute($SQL);
    }





}
?>
