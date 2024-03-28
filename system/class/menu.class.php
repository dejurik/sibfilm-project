<?
/*============================================
 Pr&Web Studio Content Management System
--------------------------------------------
 Copyright (c) 2015 Korshunov Aleksey
--------------------------------------------
 http://www.priweb.ru
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Menu extends Alatis {

    public $treeMenu;

	public function __construct($db) {
		parent::__construct($db);
	}

    public function ViewGroup($id) {

        if (is_array($id)) {
          $id = implode(",", $id);
        }

        $SQL = "SELECT * FROM ".PREF."menu WHERE group_id = ".$id." ORDER BY parent_id, position";
        $r = $this->db->getAssoc($SQL);

        if (!empty($r)) {
            $rs = $this->getMenus($r);
            return $rs;
        } else {
            return false;
        }
    }

    public function getMenus($r) {
        $levels = array();
        $tree = array();
       // $cur = array();

        foreach ($r as $v) {
            $cur = &$levels[$v['id_item']];
            $cur['id_item'] = $v['id_item'];
            $cur['parent_id'] = $v['parent_id'];
            $cur['url'] = $v['url'];
            $cur['class'] = $v['class'];
            $cur['target'] = $v['target'];
            $cur['group_id'] = $v['group_id'];
            $cur['title'] = $v['title'];
            if($v['parent_id'] == 0){
              $tree[$v['id_item']] = &$cur;
            }else{
              $levels[$v['parent_id']]['children'][$v['id_item']] = &$cur;
            }
        }
        return $tree;

    }






    /*
     * Методы для админки
     */

    public function ViewTitleMenu($id_item) {
        $SQL = "SELECT * FROM ".PREF."menu_group WHERE id_item = ".$id_item;
        return  $this->db->getRow($SQL);

    }

    public function ViewMenuGroup() {
        $SQL = "SELECT * FROM ".PREF."menu_group";
        return $this->db->getAll($SQL);
    }

    public function ViewMenu($id_item) {
        $SQL = "SELECT * FROM ".PREF."menu WHERE group_id = ".$id_item." ORDER BY parent_id, position";
        return $this->db->getAll($SQL);
    }

    public function GenereteHtml($data) {

        $menu['menu_ul'] = '<ol class="dd-list"></ol>';
        if ($data) {
            foreach ($data as $item) {
                $this->treeMenu[$item['parent_id']][] = array('id' => $item['id_item'], 'li_attr' =>  ' class="dd-item dd3-item" data-id="'.$item['id_item'].'"', 'label' => $this->GetLabel($item));
            }
            $menu['menu_ul'] =  $this->ul(0, 'class="dd-list"');
        }
        return $menu;
    }

    public function GetLabel($row) {
        $edit = '<a data-toggle="modal" href="/admin/?mod=menu&act=view_edit_menu&id_menu='.$row['id_item'].'" data-target="#EditMenu"><i class="fa fa-edit fa-fw "></i></a>';
        $del = '<a onClick="conf(\'/admin/?mod=menu&act=delete_menu&id_menu='.$row['id_item'].'\')" href="#"><i class="fa fa-times fa-fw "></i></a>';
        $label =
          '<div class="dd-handle dd3-handle">&nbsp;</div>' .
          '<div class="dd3-content">'.$row['title'].' <span style="font-size:13px;color:#7E7E7E;"> '.$row['url'].'</span>' .
          '<div class="pull-right">' .
          $edit.
          $del.
          '</div>' .
          '</div>';
        return $label;
    }

    public function ul($parent = 0, $attr = '') {
        static $i = 1;
        $indent = str_repeat("\t\t", $i);
        if (isset($this->treeMenu[$parent])) {
            if ($attr) {
                $attr = ' ' . $attr;
            }
            $html = "\n$indent";
            $html .= "<ol$attr>";
            $i++;
            foreach ($this->treeMenu[$parent] as $row) {
                $child = $this->ul($row['id']);
                $html .= "\n\t$indent";
                $html .= '<li'. $row['li_attr'] . '>';
                $html .= $row['label'];
                if ($child) {
                    $i--;
                    $html .= $child;
                    $html .= "\n\t$indent";
                }
                $html .= '</li>';
            }
            $html .= "\n$indent</ol>";
            return $html;
        } else {
            return false;
        }
    }

    public function EditGroupMenu($id_item, $data) {
        $this->db->AutoExecute(PREF."menu_group", $data, 'UPDATE', 'id_item='.$id_item);
    }

    public function AddGroupMenu($data) {
        $this->db->AutoExecute(PREF."menu_group", $data, 'INSERT');
        return $this->db->insert_Id();
    }

    public function DeleteGroupMenu($id_item) {
        $SQL = "DELETE FROM ".PREF."menu_group WHERE id_item = '".$id_item."' LIMIT 1";
        $this->db->execute($SQL);
        $SQL = "DELETE FROM ".PREF."menu WHERE group_id IN ('".$id_item."')";
        $this->db->execute($SQL);
    }

    public function ViewOneMenu($id_item) {
        $SQL = "SELECT * FROM ".PREF."menu WHERE id_item = '".$id_item."'";
        return  $this->db->getRow($SQL);
    }

    public function UpdateMenu($id, $data) {
        $this->db->AutoExecute(PREF."menu", $data, 'UPDATE', 'id_item='.$id);
    }

    public function AddMenu($data) {
        $this->db->AutoExecute(PREF."menu", $data, 'INSERT');
        $lastId = $this->db->insert_Id();
        $pos['position'] = $lastId;
        $this->db->AutoExecute(PREF."menu", $pos, 'UPDATE', 'id_item='.$lastId);
        return $lastId;
    }

    public function DeleteMenu($id_item) {
        $SQL = "UPDATE ".PREF."menu SET parent_id = 0 WHERE parent_id = '".$id_item."'";
        $this->db->Execute($SQL);
        $SQL = "DELETE FROM ".PREF."menu WHERE id_item IN (".$id_item.")";
        $this->db->Execute($SQL);
    }

    public function update_position($parent, $children) {
        $i = 1;
        foreach ($children as $k => $v) {
            $id_item = (int)$children[$k]['id'];
            $data['id_item'] = (int)$children[$k]['id'];
            $data['parent_id'] = $parent;
            $data['position'] = $i;
            $this->UpdateMenu($id_item, $data);
            if (isset($children[$k]['children'][0])) {
                $this->update_position($id_item, $children[$k]['children']);
            }
            $i++;
        }
    }


}
?>
