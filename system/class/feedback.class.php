<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Feedback extends Alatis {
	
	public function __construct($db) {
		parent::__construct($db);
	}

    public function Count($filter) {
        $module_filter = '';
        $status_filter = '';
        if(isset($filter['module'])) {
            $module_filter = "AND module = '".$filter['module']."'";
        }
        if(isset($filter['visible'])) {
            $status_filter = "AND visible = '".$filter['visible']."'";
        }
        $SQL = "SELECT COUNT(DISTINCT id_item) as count FROM ".PREF."feedback WHERE 1 $module_filter $status_filter";
        return $this->db->getRow($SQL);
    }

    public function ViewAll($filter) {
        // По умолчанию
        $limit = 10;
        $page = 1;
        $module_filter = '';
        $page_id_filter = '';
        $status_filter = '';
        if(isset($filter['visible'])) {
            $status_filter = "AND visible = '".$filter['visible']."'";
        }
        if(isset($filter['module'])) {
            $module_filter = "AND module = '".$filter['module']."'";
        }
        if(isset($filter['page_id'])) {
            $page_id_filter = "AND page_id = '".$filter['page_id']."'";
        }
        if(isset($filter['limit'])) {
            $limit = max(1, intval($filter['limit']));
        }
        if(isset($filter['page'])) {
            $page = max(1, intval($filter['page']));
        }

        $sql_limit = " LIMIT ".($page-1)*$limit.", ".$limit."";

        $SQL = "SELECT * FROM ".PREF."feedback WHERE 1 $status_filter $module_filter $page_id_filter ORDER BY created DESC $sql_limit";
        return $this->db->getAll($SQL);
    }

    public function DeleteFromId($id) {
        $SQL = "DELETE FROM ".PREF."feedback WHERE id_item IN (".$id.")";
        $this->db->execute($SQL);
    }

    public function Add($data) {
        $this->db->AutoExecute(PREF."feedback", $data, 'INSERT');
        return $this->db->insert_Id();
    }

    public function View($id) {
        $SQL = "SELECT * FROM ".PREF."feedback WHERE id_item = ".$id;
        return $this->db->getRow($SQL);
    }

    public function UpdateCommentId($id, $data) {
        $this->db->AutoExecute(PREF."feedback", $data, 'UPDATE', 'id_item='.$id);
    }




}