<?
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_NAVIGATION'])) {
	$adminview->validate->Locate("/admin/");
	die();
}

if($adminview->validate->method('get')) {
	$id_menu = $adminview->validate->Get('id_menu', 'integer');
	$group_id = $adminview->validate->Get('group_id', 'integer');
}

switch($act) {

  case "view_all":

		if($adminview->validate->method('post')) {

			$action = $adminview->validate->Post('action', 'string');

			if ($action == 'save_positions') {
				$group_id = $adminview->validate->Post('group_id', 'integer');
				$menu = $adminview->validate->Post('v');
				$menu = stripcslashes ($menu);
				$menu = json_decode($menu, true);
				$adminview->menu->update_position(0, $menu);
				//$adminview->validate->Locate("/admin/?mod=menu&act=view&group_id=".$adminview->validate->Post('group_id', 'integer'));
			}

			if($action == 'delete_menu') {
				$id = $adminview->validate->Post('id');
				if(!empty($id)) {
					$adminview->menu->DeleteMenu($id);
					echo json_encode(array('success'=>true, 'message'=>'Пункт меню удален!'));
					exit();
				}
				echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
				exit();
			}

			if ($action == 'edit_menu') {
				$id_item = $adminview->validate->Post('id_item', 'integer');
				$data_menu['title'] = $adminview->validate->Post('title');
				$data_menu['url'] = $adminview->validate->Post('url');
				$data_menu['class'] = $adminview->validate->Post('link_class');
				$data_menu['target'] = $adminview->validate->Post('link_target');
				$adminview->menu->UpdateMenu($id_item, $data_menu);
				$adminview->validate->Locate("/admin/?mod=menu&act=view_all&group_id=".$adminview->validate->Post('group_id', 'integer'));
			}

			if ($action == 'add_menu') {
				$data_new_menu['title'] = $adminview->validate->Post('title');
				$data_new_menu['url'] = $adminview->validate->Post('url');
				$data_new_menu['class'] = $adminview->validate->Post('link_class');
				$data_new_menu['target'] = $adminview->validate->Post('link_target');
				$data_new_menu['group_id'] = $adminview->validate->Post('group_id', 'integer');
				if (!empty($data_new_menu['title'])) {
					$id_item = $adminview->menu->AddMenu($data_new_menu);
					if (!empty($id_item)) {
						$adminview->validate->Locate("/admin/?mod=menu&act=view_all&group_id=".$data_new_menu['group_id']);
					}
				}
			}

			if ($action == 'delete_group') {
				$id = $adminview->validate->Post('id');
				if(!empty($id)) {
					//$adminview->menu->DeleteGroupMenu($group_id);
					echo json_encode(array('success'=>true, 'message'=>'Раздел меню удален!'));
					exit();
				}
				echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
				exit();
			}


			if ($action == 'edit_group_menu') {
				if ($adminview->validate->Post('title')) {
					if ($adminview->validate->Post('group_id')) {
						$group_id = $adminview->validate->Post('group_id', 'integer');
						$data_menu['title'] = $adminview->validate->Post('title', 'string');
						$adminview->menu->EditGroupMenu($group_id, $data_menu);
						//$adminview->validate->Locate("/admin/?mod=menu&act=view&group_id=".$id_item);
					} else {
						$data_menu['title'] = $adminview->validate->Post('title', 'string');
						$group_id = $adminview->menu->AddGroupMenu($data_menu);
						//$adminview->validate->Locate("/admin/?mod=menu&act=view&group_id=".$id_item);
					}
				}
			}

		}

		if (empty($group_id)) {
			$group_id = 1;
		}

		$currentGroup = $adminview->menu->GetGroupById($group_id);
		$allGroup = $adminview->menu->GetAllGroup();
		$menu = $adminview->menu->GenereteHtml($adminview->menu->GetAllMenuByGroupId($group_id));
		$aladesign->assign("currentGroup", $currentGroup);
		$aladesign->assign("allGroup", $allGroup);
		$aladesign->assign("menu", $menu);
		$aladesign->assign("page", "templates/admin/menu/view_all.tpl");
		$aladesign->display("templates/admin/main.tpl");
	break;

	case "view_edit_menu":
		if (isset($id_menu)) {
			$view_m = $adminview->menu->ViewOneMenu($id_menu);
			$aladesign->assign("view_m", $view_m);
			$aladesign->assign("group_id", $group_id);
			$aladesign->display("templates/admin/menu/menu_edit.tpl");
		}
	break;

	case "add_menu":
		if (empty($group_id)) {
			$group_id = 1;
		}
		$aladesign->assign("group_id", $group_id);
		$aladesign->display("templates/admin/menu/menu_edit.tpl");
	break;

	case "view_edit_group":
		if (isset($group_id)) {
			$aladesign->assign("groupId", $adminview->menu->GetGroupById($group_id));
			$aladesign->display("templates/admin/menu/menu_group_edit.tpl");
		}
	break;

	case "add_group":
		$aladesign->display("templates/admin/menu/menu_group_edit.tpl");
	break;

}
?>