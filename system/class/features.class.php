<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Features extends Alatis {

    public function __construct($db) {
        parent::__construct($db);
    }

    public function GetOptions($filter = array()) {
        $feature_id_filter = '';
        $page_id_filter = '';

        if(empty($filter['feature_id']) && !isset($filter['module_id']) || empty($filter['page_id']) && !isset($filter['module_id'])) {
            return array();
        }
        if(isset($filter['feature_id'])) {
            $feature_id_filter = "AND o.feature_id in(".$filter['feature_id'].")";
        }
        if(isset($filter['page_id'])){
            $page_id_filter = "AND o.page_id in(".$filter['page_id'].")";
        }

        $SQL = "SELECT o.feature_id as id, o.* FROM ".PREF."options as o
				WHERE o.module_id = '".$filter['module_id']."' {$feature_id_filter}{$page_id_filter}
				GROUP BY o.feature_id, o.page_id, o.value ORDER BY value=0, -value DESC, value";
        $this->db->setFetchMode(ADODB_FETCH_ASSOC);
        return $this->db->getAssoc($SQL);
    }

    public function GetFeatures($filter = array()) {
        $module_id_filter = '';

        if(isset($filter['module_id'])) {
            $module_id_filter = "WHERE module_id = '".$filter['module_id']."'";
        }

        $SQL = "SELECT f.id_item as id, f.* FROM ".PREF."features as f {$module_id_filter} ORDER BY position ASC";
        $this->db->setFetchMode(ADODB_FETCH_ASSOC);
        return $this->db->getAssoc($SQL);
    }

    public function DeleteOption($filter = array()) {
        $feature_id_filter = '';
        $page_id_filter = '';

        if(empty($filter['feature_id']) && !isset($filter['module_id']) || empty($filter['page_id']) && !isset($filter['module_id'])) {
            return array();
        }
        if(isset($filter['feature_id'])) {
            $feature_id_filter = "AND feature_id = ".$filter['feature_id'];
        }
        if(isset($filter['page_id'])){
            $page_id_filter = "AND page_id = ".$filter['page_id'];
        }
        $SQL = "DELETE FROM ".PREF."options WHERE module_id = '".$filter['module_id']."' {$feature_id_filter}{$page_id_filter}";
        $this->db->Execute($SQL);
    }

    public function UpdateOption($page_id, $feature_id, $value, $module_id) {
        if($value != '') {
            $SQL = "REPLACE INTO ".PREF."options SET page_id = ".intval($page_id).", feature_id = ".intval($feature_id).", value = '".$value."', module_id = '".$module_id."'";
        } else {
            $SQL = "DELETE FROM ".PREF."options WHERE page_id = ".intval($page_id)." AND feature_id = ".intval($feature_id)." AND module_id = '".$module_id."'";
        }
        $this->db->Execute($SQL);
    }

    public function GetFeature($filter = array()) {
        $module_id_filter = '';
        if(isset($filter['module_id'])){
            $module_id_filter = " AND module_id = ".$filter['module_id'];
        }

        if(isset($filter['title'])) {
            $where = "title = '".$filter['title']."'";
        } elseif(isset($filter['id_item'])) {
            $where = "id_item = ".$filter['id_item'];
        } else {
            return false;
        }
        $SQL = "SELECT * FROM ".PREF."features WHERE {$where}{$module_id_filter}";
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

    public function DeleteFeatureId($id_item) {
        $SQL = "DELETE FROM ".PREF."features WHERE id_item IN (".$id_item.")";
        $this->db->execute($SQL);
    }

    public function GetAllOptionsInPage($filter = array()) {
        $page_id_filter = '';
        $module_id_filter = '';
        if(isset($filter['page_id'])) {
            $page_id_filter = "o.page_id = ".$filter['page_id'];
        }
        if(isset($filter['module_id'])){
            $module_id_filter = " AND o.module_id = '".$filter['module_id']."'";
        }

        $SQL = "SELECT f.*, o.value FROM ".PREF."options as o
                LEFT JOIN ".PREF."features as f on o.feature_id = f.id_item
                WHERE {$page_id_filter}{$module_id_filter} ORDER BY f.position ASC";

        return $this->db->getAll($SQL);
    }
}

?>
