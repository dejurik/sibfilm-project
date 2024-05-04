<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_FEEDBACK'])) {
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
                    $adminview->feedback->DeleteFromId($id);
                    echo json_encode(array('success'=>true, 'message'=>'Страница удалена!'));
                    exit();
                }
                echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
                exit();
            }
        }

		$filter = array();
		$filter['page'] = max(1, $adminview->validate->Get('page', 'integer'));
        $filter['limit'] = 10;

		$count = $adminview->feedback->Count($filter);

		// Показать все страницы сразу
		if ($adminview->validate->Get('page') == 'all') {
			$filter['limit'] = $count['count'];	
		}

		$aladesign->assign("view_all", $adminview->feedback->ViewAll($filter));
		$aladesign->assign('pages_count', ceil($count['count']/$filter['limit']));
		$aladesign->assign('current_page', $filter['page']);
		$aladesign->assign('orders_count', $count['count']);

        $aladesign->assign("page", "templates/admin/feedback/view_all.tpl");
        $aladesign->display("templates/admin/main.tpl");
	break;

    case "comment":

        if($adminview->validate->method('post')) {

            $data_id = $adminview->validate->Post('id_item', 'integer');

            $data_comment['name'] = $adminview->validate->Post('name');
            $data_comment['email'] = $adminview->validate->Post('email');
            $data_comment['phone'] = $adminview->validate->Post('phone');
            $data_comment['message'] = $adminview->validate->Post('message');
            $data_comment['module'] = $adminview->validate->Post('module');
            $data_comment['page_id'] = $adminview->validate->Post('page_id');
            $data_comment['visible'] = $adminview->validate->Post('visible') ? 1 : 0;

            if ($data_id) {
                $adminview->feedback->UpdateCommentId($data_id, $data_comment);
            } else {
                $data_id = $adminview->feedback->Add($data_comment);
            }
            $adminview->validate->Locate("/admin/?mod=feedback&act=comment&id=".$data_id);
        }

        $aladesign->assign("view", $adminview->feedback->View($id));
        $aladesign->assign("page", "templates/admin/feedback/edit.tpl");
        $aladesign->display("templates/admin/main.tpl");
    break;

}