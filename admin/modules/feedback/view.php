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

}