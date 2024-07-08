<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_FEATURES'])) {
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
                    $adminview->features->DeleteOption(array('feature_id'=>$id, 'module_id'=>'projects'));
                    $adminview->features->DeleteFeatureId($id);
                    echo json_encode(array('success'=>true, 'message'=>'Участник удален!'));
                    exit();
                }
                echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
                exit();
            }

        }

        $aladesign->assign("view_all", $adminview->features->GetFeatures());
        $aladesign->assign("page", "templates/admin/features/view_all.tpl");
        $aladesign->display("templates/admin/main.tpl");
        break;

    case "option":

        if($adminview->validate->method('post')) {

            $data_id = $adminview->validate->Post('id_item', 'integer');

            $data['title'] = $adminview->validate->Post('title', 'string');
            $data['module_id'] = $adminview->validate->Post('module_id', 'string');

            if ($data_id) {
                $adminview->features->UpdateFeature($data_id, $data);
                $adminview->validate->Locate("/admin/?mod=features&act=option&id=".$data_id);
            } else {
                $data_id = $adminview->features->AddFeature($data);
            }

            $adminview->validate->Locate("/admin/?mod=features&act=option&id=".$data_id);

        }

        if ($id) {
            $aladesign->assign("view", $adminview->features->GetFeature(array('id_item'=>$id)));
        }
        $aladesign->assign("page", "templates/admin/features/edit.tpl");
        $aladesign->display("templates/admin/main.tpl");

    break;

}
?>
