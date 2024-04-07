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
        $r = $this->db->getAll($SQL);

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

		public function GetGroupById($id_item) {
				$SQL = "SELECT * FROM ".PREF."menu_group WHERE id_item = ".$id_item;
				return  $this->db->getRow($SQL);
		}

		public function GetAllGroup() {
				$SQL = "SELECT * FROM ".PREF."menu_group";
				return $this->db->getAll($SQL);
		}

		public function GetAllMenuByGroupId($id_item) {
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
				//console_log($menu);
				return $menu;
		}

		public function GetLabel($row) {
				$edit = '<a rel="modal:open" href="/admin/?mod=menu&act=view_edit_menu&id_menu='.$row['id_item'].'&group_id='.$row['group_id'].'" class="inline-flex items-center p-2 bg-blue-500 hover:bg-blue-600 text-white rounded"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" /></svg></a>';
				$del = '<a href="#" class="delete ml-2 inline-flex items-center p-2 bg-red-600 hover:bg-red-700 text-white rounded-md" data-id="'.$row['id_item'].'" data-url="/admin/?mod=menu&act=view_all" data-action="delete_menu" data-title="'.$row['title'].'"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" /></svg></a>';
				$label =
						'<div class="dd-handle dd3-handle"></div>' .
						'<div class="dd3-content">'.$row['title'].' <span style="font-size:13px;color:#7E7E7E;"> '.$row['url'].'</span>' .
						'<div class="float-right">' .
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
								$child = $this->ul($row['id'],'class="dd-list"');
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

		public function ViewOneMenu($id_item) {
			$SQL = "SELECT * FROM ".PREF."menu WHERE id_item = ".$id_item;
			return  $this->db->getRow($SQL);
		}

		public function UpdateMenu($id, $data) {
			$this->db->AutoExecute(PREF."menu", $data, 'UPDATE', 'id_item='.$id);
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

		public function DeleteMenu($id_item) {
			$SQL = "UPDATE ".PREF."menu SET parent_id = 0 WHERE parent_id = '".$id_item."'";
			$this->db->Execute($SQL);
			$SQL = "DELETE FROM ".PREF."menu WHERE id_item = ".$id_item;
			$this->db->Execute($SQL);
		}

		public function AddMenu($data) {
			$this->db->AutoExecute(PREF."menu", $data, 'INSERT');
			$lastId = $this->db->insert_Id();
			$pos['position'] = $lastId;
			$this->db->AutoExecute(PREF."menu", $pos, 'UPDATE', 'id_item='.$lastId);
			return $lastId;
		}


		public function DeleteGroupMenu($id_item) {
			$SQL = "DELETE FROM ".PREF."menu_group WHERE id_item = '".$id_item."' LIMIT 1";
			$this->db->execute($SQL);
			$SQL = "DELETE FROM ".PREF."menu WHERE group_id IN ('".$id_item."')";
			$this->db->execute($SQL);
		}


		public function EditGroupMenu($id_item, $data) {
			$this->db->AutoExecute(PREF."menu_group", $data, 'UPDATE', 'id_item='.$id_item);
		}


		public function AddGroupMenu($data) {
			$this->db->AutoExecute(PREF."menu_group", $data, 'INSERT');
			return $this->db->insert_Id();
		}

}
?>
