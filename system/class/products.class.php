<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Products extends Alatis {

    public function __construct($db) {
        parent::__construct($db);
    }

    public function CountProducts($filter = array()) {

        // По умолчанию
        $category_id_filter = '';
        $product_id_filter = '';
        $keyword_filter = '';
        $visible_filter = "'0','1'";

        if(!empty($filter['visible'])){
            $visible_filter = $filter['visible'];
        }
        if(!empty($filter['category_id'])) {
            $category_id_filter = " AND category_id in(".$filter['category_id'].")";
        }
        if(!empty($filter['product_id'])) {
            $product_id_filter = " AND id_item in(".$filter['product_id'].")";
        }
        if(!empty($filter['keyword'])){
            $keywords = explode(' ', $filter['keyword']);
            foreach($keywords as $keyword) {
                $keyword_filter .= " AND (title LIKE '%".$this->db->addQ(trim($keyword))."%' OR meta_keywords LIKE '%".$this->db->addQ(trim($keyword))."%')";
            }
        }
        $SQL = "SELECT count(distinct id_item) as count FROM ".PREF."shop_products WHERE visible in ({$visible_filter}){$category_id_filter}{$product_id_filter}{$keyword_filter}";
        return $this->db->getRow($SQL);
    }

    public function GetProducts($filter = array()) {	 // для сайта и админки

        // По умолчанию
        $limit = 100;
        $page = 1;
        $category_id_filter = '';
        $product_id_filter = '';
        $keyword_filter = '';
        $visible_filter = "'0','1'";

        $order = " ORDER BY position DESC";

        if(isset($filter['limit'])) {
            $limit = max(1, intval($filter['limit']));
        }
        if(isset($filter['page'])) {
            $page = max(1, intval($filter['page']));
        }
        $sql_limit = " LIMIT ".($page-1)*$limit.", ".$limit;

        if(!empty($filter['visible'])){
            $visible_filter = $filter['visible'];
        }
        if(!empty($filter['category_id'])) {
            $category_id_filter = " AND category_id in(".$filter['category_id'].")";
        }
        if(!empty($filter['product_id'])) {
            $product_id_filter = " AND id_item in(".$filter['product_id'].")";
        }
        if(!empty($filter['keyword'])){
            $keywords = explode(' ', $filter['keyword']);
            foreach($keywords as $keyword) {
                $keyword_filter .= " AND (title LIKE '%".$this->db->addQ(trim($keyword))."%' OR meta_keywords LIKE '%".$this->db->addQ(trim($keyword))."%')";
            }
        }

        $SQL = "SELECT * FROM ".PREF."shop_products WHERE visible in ({$visible_filter}){$category_id_filter}{$product_id_filter}{$keyword_filter}{$order}{$sql_limit}";
        return $this->db->getAll($SQL);
    }

    public function GetProduct($filter=array()) {

        $id_item_filter = "";

        if(!empty($filter['id_item'])) {
            $id_item_filter = "id_item=".$filter['id_item'];
        }

        //$this->db->Execute("UPDATE ".PREF."".$this->products." p SET p.hits = p.hits + 1 WHERE $item");
        $SQL = "SELECT * FROM ".PREF."shop_products WHERE {$id_item_filter} LIMIT 1";
        return $this->db->getRow($SQL);
    }

    public function UpdateProduct($id, $data) {
        $this->db->AutoExecute(PREF."shop_products", $data, 'UPDATE', 'id_item='.$id);
    }

    public function AddProduct($data) {
        $this->db->AutoExecute(PREF."shop_products", $data, 'INSERT');
        $lastId = $this->db->insert_Id();
        $this->UpdateProduct($lastId, array('position'=>$lastId));
        return $lastId;
    }

    public function DeleteProduct($id) {
        $SQL = "DELETE FROM ".PREF."shop_products WHERE id_item = ".$id." LIMIT 1";
        $this->db->Execute($SQL);
    }


/*
    public function GetNextInsertId($table_name, $bd_name) {

        $SQL = "SELECT AUTO_INCREMENT as next_id FROM information_schema.tables WHERE table_name = '{$table_name}' AND table_schema = '{$bd_name}'";
        return $this->db->getRow($SQL);
    }
*/

}
?>
