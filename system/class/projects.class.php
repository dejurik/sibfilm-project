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
        $pos['position'] = $lastId;
        $this->db->AutoExecute(PREF."projects", $pos, 'UPDATE', 'id_item='.$lastId);
        return $lastId;
    }


    public function DeleteProjectId($id_item) {
        $SQL = "DELETE FROM ".PREF."projects WHERE id_item IN (".$id_item.")";
        $this->db->execute($SQL);
    }

    public function GetOptions($filter = array()) {
        $feature_id_filter = '';
        $project_id_filter = '';

        //$features_filter = '';

        if(empty($filter['feature_id']) && empty($filter['project_id'])) {
            return array();
        }
        if(isset($filter['feature_id'])) {
            $feature_id_filter = "AND o.feature_id in(".$filter['feature_id'].")";
        }
        if(isset($filter['project_id'])){
            $project_id_filter = "AND o.project_id in(".$filter['project_id'].")";
        }

        $SQL = "SELECT o.feature_id as id, o.* FROM ".PREF."options as o
				WHERE 1 $feature_id_filter $project_id_filter 
				GROUP BY o.feature_id, o.value ORDER BY value=0, -value DESC, value";
        $this->db->setFetchMode(ADODB_FETCH_ASSOC);
        return $this->db->getAssoc($SQL);
    }

    public function GetAllOptionsInProject($filter = array()) {
        $project_id_filter = '';
        if(isset($filter['project_id'])) {
            $project_id_filter = "AND o.project_id = ".$filter['project_id'];
        }
        $SQL = "SELECT f.*, o.value FROM ".PREF."options as o
                LEFT JOIN ".PREF."features as f on o.feature_id = f.id_item
                WHERE 1 $project_id_filter ORDER BY o.position ASC";
        return $this->db->getAll($SQL);
    }

    public function UpdateOption($Id, $options_id, $value, $pos) {
        if($value != '') {
            $SQL = "REPLACE INTO ".PREF."options SET project_id = '".intval($Id)."', feature_id = '".intval($options_id)."', value = '".$value."', position = ".intval($pos);
        } else {
            $SQL = "DELETE FROM ".PREF."options WHERE project_id = ".intval($Id)." AND feature_id = ".intval($options_id);
        }
        $this->db->Execute($SQL);
    }

    public function DeleteOption($filter = array()) {
        $feature_id_filter = '';
        $project_id_filter = '';

        if(empty($filter['feature_id']) && empty($filter['project_id'])) {
            return array();
        }
        if(isset($filter['feature_id'])) {
            $feature_id_filter = "feature_id = ".$filter['feature_id'];
        }
        if(isset($filter['project_id'])){
            $project_id_filter = "project_id = ".$filter['project_id'];
        }
        $SQL = "DELETE FROM ".PREF."options WHERE $feature_id_filter $project_id_filter";
        $this->db->Execute($SQL);
    }

    public function SelectFeature($name) {
        $SQL = "SELECT * FROM ".PREF."features WHERE title = '".$name."'";
        return $this->db->getRow($SQL);
    }

    public function AddFeature($data) {
        $this->db->AutoExecute(PREF."features", $data, 'INSERT');
        $id = $this->db->insert_Id();
        $this->UpdateFeature($id, array('position'=>$id));
        return $id;
    }

    public function UpdateFeature($id, $data) {
        $this->db->AutoExecute(PREF."features", $data, 'UPDATE', 'id_item in ('.$id.')');
    }

    public function GetFeatures($filter = array()) {
        $SQL = "SELECT f.id_item as id, f.* FROM ".PREF."features as f ORDER BY position ASC";
        $this->db->setFetchMode(ADODB_FETCH_ASSOC);
        return $this->db->getAssoc($SQL);
    }

    public function GetStaffs() {
        $SQL = "SELECT * FROM ".PREF."staff ORDER BY position ASC";
        return $this->db->getAll($SQL);
    }

    public function GetStaffId($id) {
        $SQL = "SELECT * FROM ".PREF."staff WHERE id_item = ".$id;
        return $this->db->getRow($SQL);
    }

    public function GetProjectStaffs($filter = array()) {
        $project_id_filter = '';
        if(isset($filter['project_id'])) {
            $project_id_filter = "AND project_id = ".$filter['project_id'];
        }
        $SQL = "SELECT * FROM ".PREF."project_staffs WHERE 1 $project_id_filter ORDER BY position ASC";
        return $this->db->getAll($SQL);
    }

    public function GetAllStaffInProject($filter = array()) {
        $project_id_filter = '';
        if(isset($filter['project_id'])) {
            $project_id_filter = "AND ps.project_id = ".$filter['project_id'];
        }
        $SQL = "SELECT s.* FROM ".PREF."project_staffs as ps
                LEFT JOIN ".PREF."staff as s on ps.staff_id = s.id_item
                WHERE 1 $project_id_filter ORDER BY ps.position ASC";
        return $this->db->getAll($SQL);
    }

    public function DeleteStaffs($filter = array()) {
        $staff_id_filter = '';
        $project_id_filter = '';

        if(empty($filter['project_id']) && empty($filter['staff_id'])) {
            return array();
        }
        if(isset($filter['staff_id'])) {
            $staff_id_filter = "staff_id = ".$filter['staff_id'];
        }
        if(isset($filter['project_id'])){
            $project_id_filter = "project_id = ".$filter['project_id'];
        }

        $SQL = "DELETE FROM ".PREF."project_staffs WHERE $staff_id_filter $project_id_filter";
        $this->db->Execute($SQL);
    }

    public function UpdateStaffs($Id, $staff_id, $pos) {
        $SQL = "REPLACE INTO ".PREF."project_staffs SET project_id = '".intval($Id)."', staff_id = '".intval($staff_id)."', position = ".intval($pos);
        $this->db->Execute($SQL);
    }

    public function UpdateStaffId($id, $data) {
        $this->db->AutoExecute(PREF."staff", $data, 'UPDATE', 'id_item in ('.$id.')');
    }

    public function InsertStaff($data) {
        $this->db->AutoExecute(PREF."staff", $data, 'INSERT');
        return $this->db->insert_Id();
    }

    public function DeleteStaffId($id_item) {
        $SQL = "DELETE FROM ".PREF."staff WHERE id_item IN (".$id_item.")";
        $this->db->execute($SQL);
    }

    public function saveBase64ToImage($base64DataString, $path) {
        list($dataType, $imageData) = explode(';', $base64DataString);
        $imageExtension = explode('/', $dataType)[1];
        list(, $encodedImageData) = explode(',', $imageData);
        $decodedImageData = base64_decode($encodedImageData);
        $filename = uniqid();
        file_put_contents(A_PATH.$path.$filename.".{$imageExtension}", $decodedImageData);
        return $path.$filename.".{$imageExtension}";
    }



}

?>
