<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Projects extends Alatis {

    public function __construct($db) {
        parent::__construct($db);
    }

    public function ViewAll($filter = array()) {
        $status_filter = '';
        if(isset($filter['visible'])) {
            $status_filter = "AND p.visible = '".$filter['visible']."'";
        }
        $SQL = "SELECT p.* FROM ".PREF."projects p WHERE 1 $status_filter ORDER BY p.position DESC";
        return $this->db->getAll($SQL);
    }


    public function View($filter = array()) {
        if (isset($filter['id_item'])) {
            $item = "AND p.id_item=".$filter['id_item'];
        } else if (isset($filter['url'])) {
            $item = "AND p.url='".$filter['url']."'";
        }
        $visible_filter = '';
        if(!empty($filter['visible'])){
            $visible_filter = "AND p.visible=".$filter['visible'];
        }
        $SQL = "SELECT p.* FROM ".PREF."projects p WHERE 1 $visible_filter $item";
        return $this->db->getRow($SQL);
    }

    public function NewUrl($url) {
        $view = $this->View(array('url'=>$url));
        $new_url = $url;
        if (isset($view['url'])) {
            $url = $url.'_new';
            $new_url = $this->NewUrl($url);
        }
        return $new_url;
    }

    public function UpdateProjectId($id, $data) {
        $this->db->AutoExecute(PREF."projects", $data, 'UPDATE', 'id_item='.$id);
    }

    public function AddProject($data) {
        $this->db->AutoExecute(PREF."projects", $data, 'INSERT');
        $lastId = $this->db->insert_Id();
        $this->UpdateProjectId($lastId, array('position'=>$lastId));
        return $lastId;
    }

    public function DeleteProjectId($id_item) {
        $SQL = "DELETE FROM ".PREF."projects WHERE id_item IN (".$id_item.")";
        $this->db->execute($SQL);
    }

}

?>
