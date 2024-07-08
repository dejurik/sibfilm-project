<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Staffs extends Alatis {

    public function __construct($db) {
        parent::__construct($db);
    }

    public function GetStaffs() {
        $SQL = "SELECT * FROM ".PREF."staff ORDER BY position ASC";
        return $this->db->getAll($SQL);
    }

    public function GetStaffId($id) {
        $SQL = "SELECT * FROM ".PREF."staff WHERE id_item = ".$id;
        return $this->db->getRow($SQL);
    }

    public function GetPageStaffs($filter = array()) {
        $page_id_filter = '';
        if(isset($filter['page_id'])) {
            $page_id_filter = "AND page_id = ".$filter['page_id'];
        }
        $SQL = "SELECT * FROM ".PREF."page_staffs WHERE 1 {$page_id_filter}";
        return $this->db->getAll($SQL);
    }

    public function GetAllStaffsInPage($filter = array()) {
        $page_id_filter = '';
        if(isset($filter['page_id'])) {
            $page_id_filter = "ps.module_id = '".$filter['module_id']."' AND ps.page_id = ".$filter['page_id'];
        }

        $SQL = "SELECT s.* FROM ".PREF."page_staffs as ps
                LEFT JOIN ".PREF."staff as s on ps.staff_id = s.id_item
                WHERE $page_id_filter ORDER BY s.position ASC";
        return $this->db->getAll($SQL);
    }

    public function DeleteStaffs($filter = array()) {
        $staff_id_filter = '';
        $page_id_filter = '';

        if(empty($filter['page_id']) && !isset($filter['module_id']) || empty($filter['staff_id']) && !isset($filter['module_id'])) {
            return array();
        }
        if(isset($filter['staff_id'])) {
            $staff_id_filter = "AND staff_id = ".$filter['staff_id'];
        }
        if(isset($filter['page_id'])){
            $page_id_filter = "AND page_id = ".$filter['page_id'];
        }

        $SQL = "DELETE FROM ".PREF."page_staffs WHERE module_id = '".$filter['module_id']."' {$staff_id_filter}{$page_id_filter}";
        $this->db->Execute($SQL);
    }

    public function UpdateStaffs($page_id, $staff_id, $module_id) {
        $SQL = "REPLACE INTO ".PREF."page_staffs SET page_id = ".intval($page_id).", staff_id = ".intval($staff_id).", module_id = '".$module_id."'";
        $this->db->Execute($SQL);
    }

    public function UpdateStaffId($id, $data) {
        $this->db->AutoExecute(PREF."staff", $data, 'UPDATE', 'id_item in ('.$id.')');
    }

    public function InsertStaff($data) {
        $this->db->AutoExecute(PREF."staff", $data, 'INSERT');
        $lastId = $this->db->insert_Id();
        $this->UpdateStaffId($lastId, array('position'=>$lastId));
        return $lastId;
    }

    public function DeleteStaffId($id_item) {
        $SQL = "DELETE FROM ".PREF."staff WHERE id_item IN (".$id_item.")";
        $this->db->execute($SQL);
    }
}

?>
