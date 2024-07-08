<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_STAFFS'])) {
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
                    $view = $adminview->staffs->GetStaffId($id);
                    $adminview->staffs->DeleteStaffs(array('staff_id'=>$id, 'module_id'=>'projects'));
                    $adminview->staffs->DeleteStaffId($id);
                    if (!empty($view['avatar'])) {
                        unlink(A_PATH.$view['avatar']);
                    }
                    echo json_encode(array('success'=>true, 'message'=>'Участник удален!'));
                    exit();
                }
                echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
                exit();
            }

        }

        $aladesign->assign("view_all", $adminview->staffs->GetStaffs());
        $aladesign->assign("page", "templates/admin/staffs/view_all.tpl");
        $aladesign->display("templates/admin/main.tpl");
        break;

    case "staff":

        if($adminview->validate->method('post')) {

            $data_id = $adminview->validate->Post('id_item', 'integer');

            $data['title'] = $adminview->validate->Post('title', 'string');
            $data['post'] = $adminview->validate->Post('post', 'string');

            $avatar = $adminview->validate->Post('avatar');
            if (!empty($avatar)) {
                $data['avatar'] = $adminview->config->saveBase64ToImage($avatar, '/uploads/staffs/');
            }

            $old_picture = $adminview->validate->Post('old_picture');

            if ($data_id) {
                if (!empty($avatar)) {
                    if (!empty($old_picture)) {
                        unlink(A_PATH.$old_picture);
                    }
                }
                $adminview->staffs->UpdateStaffId($data_id, $data);
                $adminview->validate->Locate("/admin/?mod=staffs&act=staff&id=".$data_id);
            } else {
                $data_id = $adminview->staffs->InsertStaff($data);
            }

            $adminview->validate->Locate("/admin/?mod=staffs&act=staff&id=".$data_id);

        }

        if ($id) {
            $aladesign->assign("view", $adminview->staffs->GetStaffId($id));
        }
        $aladesign->assign("page", "templates/admin/staffs/edit.tpl");
        $aladesign->display("templates/admin/main.tpl");

    break;






}
?>
