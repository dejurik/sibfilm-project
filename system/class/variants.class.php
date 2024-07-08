<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Variants extends Alatis {

    public function __construct($db) {
        parent::__construct($db);
    }

    public function GetAllVariants($filter = array()) { // для сайта и админки

        $product_id_filter = '';
        $variant_id_filter = '';
        if(isset($filter['product_id'])){
            $product_id_filter = "AND product_id in(".$filter['product_id'].")";
        }
        if(!empty($filter['id_item'])) {
            $variant_id_filter ="AND id_item in(".$filter['id_item'].")";
        }

        $SQL = "SELECT * FROM ".PREF."shop_variants WHERE 1 {$product_id_filter} {$variant_id_filter} ORDER BY position";
        return $this->db->getAll($SQL);
    }

    public function DeleteVariant($filter = array()) {
        $product_id_filter = '';
        $variant_id_filter = '';

        if(isset($filter['product_id'])){
            $product_id_filter = "product_id = ".$filter['product_id'];
        }
        if(!empty($filter['id_item'])) {
            $variant_id_filter ="id_item = ".$filter['id_item'];
        }

        $SQL = "DELETE FROM ".PREF."shop_variants WHERE {$variant_id_filter}{$product_id_filter}";
        $this->db->Execute($SQL);
    }

    public function UpdateVariant($id, $data) {
        $this->db->AutoExecute(PREF."shop_variants", $data, 'UPDATE', 'id_item='.$id);
    }

    public function AddVariant($data) {
        $this->db->AutoExecute(PREF."shop_variants", $data, 'INSERT');
        $lastId = $this->db->insert_Id();
        $this->UpdateVariant($lastId, array('position'=>$lastId));
        return $lastId;
    }

}
?>
