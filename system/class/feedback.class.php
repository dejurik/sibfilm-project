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

    public function Count() {
        $SQL = "SELECT COUNT(DISTINCT id_item) as count FROM ".PREF."feedback";
        return $this->db->getRow($SQL);
    }

    public function ViewAll($filter) {
        // По умолчанию
        $limit = 10;
        $page = 1;

        if(isset($filter['limit'])) {
            $limit = max(1, intval($filter['limit']));
        }
        if(isset($filter['page'])) {
            $page = max(1, intval($filter['page']));
        }

        $sql_limit = " LIMIT ".($page-1)*$limit.", ".$limit."";

        $SQL = "SELECT * FROM ".PREF."feedback ORDER BY created DESC $sql_limit";
        return $this->db->getAll($SQL);
    }

    public function DeleteFromId($id) {
        $SQL = "DELETE FROM ".PREF."feedback WHERE id_item IN (".$id.")";
        $this->db->execute($SQL);
    }

    public function Add($data) {
        $this->db->AutoExecute(PREF."feedback", $data, 'INSERT');
    }

}