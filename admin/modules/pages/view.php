<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_PAGES'])) {
	$adminview->validate->Locate("/admin/");
	die();
}

if($adminview->validate->method('get')) {
	$id = $adminview->validate->Get('id', 'integer');
}

switch($act) {

  case "view_all":

		if($adminview->validate->method('post')) {
			$id = $adminview->validate->Post('id');
			$action = $adminview->validate->Post('action', 'string');
			if(!empty($id)) {
				if ($action == 'delete') {
					$adminview->pages->DeletePagesId($id);
					echo json_encode(array('success'=>true, 'message'=>'Страница удалена!'));
					exit();
				}
				echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
				exit();
			}
		}

		$aladesign->assign("view_all", $adminview->pages->ViewAll());
		$aladesign->assign("page", "templates/admin/pages/view_all.tpl");
		$aladesign->display("templates/admin/main.tpl");
	break;

	case "page":

		if($adminview->validate->method('post')) {

			$data_id = $adminview->validate->Post('id_item', 'integer');

			$data_page['url'] = $adminview->validate->Post('url');
			if ($adminview->validate->Post('visible')) {
				$data_page['visible'] = 1;
			} else {
				$data_page['visible'] = 0;
			}

			$data_page['title'] = $adminview->validate->Post('title');
			$data_page['text'] = $adminview->validate->Post('text');
			$data_page['meta_title'] = $adminview->validate->Post('meta_title');
			$data_page['meta_keywords'] = $adminview->validate->Post('meta_keywords');
			$data_page['meta_description'] = $adminview->validate->Post('meta_description');

			if ($data_id) {
				$view = $adminview->pages->View(array('id_item'=>$data_id));
				if ($view['url'] != $data_page['url']) {
					$data_page['url'] = $adminview->pages->NewUrl($data_page['url']);
				}
				$adminview->pages->UpdatePageId($data_id, $data_page);
			} else {
				$data_page['url'] = $adminview->pages->NewUrl($data_page['url']);
				$data_id = $adminview->pages->AddPage($data_page);
			}
			$adminview->validate->Locate("/admin/?mod=pages&act=page&id=".$data_id);
		}

		if ($id) {
			$aladesign->assign("view", $adminview->pages->View(array('id_item'=>$id)));
		}

		$aladesign->assign("page", "templates/admin/pages/edit.tpl");
		$aladesign->display("templates/admin/main.tpl");

	break;

}
?>
