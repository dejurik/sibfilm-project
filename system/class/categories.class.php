<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Categories extends Alatis {

    public $treeCat;
    private $all_categories;

    public function __construct($db) {
        parent::__construct($db);
    }

    private function init_categories() {
        // Дерево категорий
        $tree = new stdClass();
        $tree->subcategories = array();

        // Указатели на узлы дерева
        $pointers = array();
        $pointers[0] = &$tree;
        $pointers[0]->path = array();
        $pointers[0]->level = 0;

        // Выбираем все категории
        $SQL = "SELECT * FROM ".PREF."shop_categories ORDER BY parent_id, position";
        $categories = json_decode(json_encode($this->db->getAll($SQL)));

        $finish = false;

        while(!empty($categories)  && !$finish) {
            $flag = false;
            // Проходим все выбранные категории
            foreach($categories as $k=>$category) {
                if(isset($pointers[$category->parent_id]))
                {
                    // В дерево категорий (через указатель) добавляем текущую категорию
                    $pointers[$category->id_item] = $pointers[$category->parent_id]->subcategories[] = $category;

                    // Путь к текущей категории
                    $curr = $pointers[$category->id_item];
                    $pointers[$category->id_item]->path = array_merge((array)$pointers[$category->parent_id]->path, array($curr));

                    // Уровень вложенности категории
                    $pointers[$category->id_item]->level = 1+$pointers[$category->parent_id]->level;

                    // Убираем использованную категорию из массива категорий
                    unset($categories[$k]);
                    $flag = true;
                }
            }
            if(!$flag) $finish = true;
        }

        // Для каждой категории id всех ее деток узнаем
        $ids = array_reverse(array_keys($pointers));

        foreach($ids as $id) {
            if($id>0) {
                $pointers[$id]->children[] = $id;
                if(isset($pointers[$pointers[$id]->parent_id]->children)) {
                    $pointers[$pointers[$id]->parent_id]->children = array_merge($pointers[$id]->children, $pointers[$pointers[$id]->parent_id]->children);
                } else {
                    $pointers[$pointers[$id]->parent_id]->children = $pointers[$id]->children;
                }
            }
        }
        unset($pointers[0]);
        unset($ids);
        $this->treeCat = $tree->subcategories;
        $this->all_categories = $pointers;
    }

    public function GetAllCategoriesTree($id = false) {
        if(!isset($this->treeCat))
            $this->init_categories();

        if(is_int($id) && array_key_exists(intval($id), $this->all_categories)) {
            return $category = $this->all_categories[intval($id)];
        } elseif(is_string($id)) {
            foreach ($this->all_categories as $category) {
                if ($category->url == $id) {
                    return $category;
                }
            }
        }

        return $this->treeCat;
    }

    public function GetAllCategory($filter = array()) {
        if(!isset($this->treeCat))
            $this->init_categories();

        return $this->all_categories;
    }

    public function GetCatWithChildren($id_item) {
        if(!isset($this->all_categories)) {
            $this->init_categories();
        }

        if(is_int($id_item) && array_key_exists(intval($id_item), $this->all_categories)) {
            return $category = $this->all_categories[intval($id_item)];
        } elseif(is_string($id_item)) {
            foreach ($this->all_categories as $category) {
                if ($category->url == $id_item) {
                    return $this->GetCatWithChildren((int)$category->id_item);
                }
            }
        }
        return false;
    }

    public function UpdateCategory($id_item, $data) {
        $this->db->AutoExecute(PREF."shop_categories", $data, 'UPDATE', 'id_item='.$id_item);
    }

    public function AddCategory($data) {
        $this->db->AutoExecute(PREF."shop_categories", $data, 'INSERT');
        $id = $this->db->insert_Id();
        $this->UpdateCategory($id, array('position'=>$id));
        return $id;
    }

    public function UpdateCatPosition($parent, $children) {
        $i = 1;
        foreach ($children as $v) {
            $this->UpdateCategory($v['id'], array('parent_id'=>$parent, 'position'=>$i));
            if (isset($v['children'][0])) {
                $this->UpdateCatPosition($v['id'], $v['children']);
            }
            $i++;
        }
    }

    public function GetCatId($id_item) {
        if (is_int($id_item)) {
            $item = "id_item=".$id_item;
        } else if (is_string($id_item)) {
            $item = "url='".$id_item."'";
        }
        $SQL = "SELECT * FROM ".PREF."shop_categories WHERE $item";
        return  $this->db->getRow($SQL);
    }

    public function GetCatUrl($url) {
        $view = $this->GetCatId((string)$url);
        $new_url = $url;
        if (isset($view['url'])) {
            $url = $url.'_new';
            $new_url = $this->GetCatUrl($url);
        }
        return $new_url;
    }

    public function DeleteCategory($id_item) {
        $this->db->AutoExecute(PREF."shop_categories", array('parent_id'=>0), 'UPDATE', 'parent_id='.$id_item);
        $SQL = "DELETE FROM ".PREF."shop_categories WHERE id_item = ".$id_item." LIMIT 1";
        $this->db->execute($SQL);
    }

}
?>
