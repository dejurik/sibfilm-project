<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_СONFIG'])) {
    $adminview->validate->Locate("/admin/");
    die();
}

if($adminview->validate->method('get')) {
    $id = $adminview->validate->Get('id', 'integer');
}

switch($act) {

	case "view_all":

        if($adminview->validate->method('post')) {
            $id = 1;
            $data['email'] = $adminview->validate->Post('email');
            $data['template'] = $adminview->validate->Post('template');
            $data['copyright'] = $adminview->validate->Post('copyright');
            $data['site_url'] = $adminview->validate->Post('site_url');
            $data['meta_title'] = $adminview->validate->Post('meta_title');
            $data['meta_keywords'] = $adminview->validate->Post('meta_keywords');
            $data['meta_description'] = $adminview->validate->Post('meta_description');
            $data['company_name'] = $adminview->validate->Post('company_name');
            $data['notify_from_email'] = $adminview->validate->Post('notify_from_email');
            $data['contacts'] = $adminview->validate->Post('contacts');
            $data['facebook'] = $adminview->validate->Post('facebook');
            $data['vk'] = $adminview->validate->Post('vk');
            $data['youtube'] = $adminview->validate->Post('youtube');
            $data['instagram'] = $adminview->validate->Post('instagram');

            $adminview->config->Update($id, $data);
        }


        $aladesign->assign("view", $adminview->config->View());
        $aladesign->assign("view_templates", $adminview->config->viewDir("/templates/app/"));
        $aladesign->assign("page", "templates/admin/config/view_all.tpl");
        $aladesign->display("templates/admin/main.tpl");
	break;

    case "users":

        $filter = array();
        $filter['page'] = max(1, $adminview->validate->Get('page', 'integer'));
        $filter['limit'] = 10;

        // Поиск
        $keyword = $adminview->validate->Get('keyword');
        if(!empty($keyword)) {
            $filter['keyword'] = $keyword;
            $aladesign->assign("keyword", $keyword);
        }

        // id роли
        $role_id = $adminview->validate->Get('role_id', 'integer');
        if ($role_id || $role_id != 0) {
            $filter['role_id'] = $role_id;
            $aladesign->assign("role_id", $role_id);
        }

        $users_count = $adminview->users->CountAllUsers($filter);

        if ($adminview->validate->Get('page') == 'all') {
            $filter['limit'] = $users_count['count'];
        }

        $aladesign->assign("users", $adminview->users->ViewAll($filter));
        $aladesign->assign("user_roles", $adminview->users->ViewAllRoles());

        $aladesign->assign('pages_count', ceil($users_count['count']/$filter['limit']));
        $aladesign->assign('current_page', $filter['page']);

        $aladesign->assign("page", "templates/admin/config/users.tpl");
        $aladesign->display("templates/admin/main.tpl");
    break;

    case "user":
        if($adminview->validate->method('post')) {

            $id = $adminview->validate->Post('id_item', 'integer');

            $data_user['name'] = $adminview->validate->Post('name');
            $data_user['email'] = $adminview->validate->Post('email');
            $data_user['phone'] = $adminview->validate->Post('phone');
            $data_user['site'] = $adminview->validate->Post('site');
            $data_user['about'] = $adminview->validate->Post('about');
            $data_user['role_id'] = $adminview->validate->Post('role_id', 'integer');
            $data_user['enabled'] = $adminview->validate->Post('enabled') ? 1 : 0;

            if (!empty($adminview->validate->Post('password'))) {
                $data_user['password'] = md5($adminview->validate->Post('password'));
            }

            $avatar = $adminview->validate->Post('avatar');
            $old_avatar = $adminview->validate->Post('old_avatar');
            if (!empty($avatar)) {
                $data_user['avatar'] = $adminview->config->saveBase64ToImage($avatar, '/uploads/avatars/');
            }

            if ($id) {
                $view = $adminview->users->View(array('email'=>$data_user['email']));
                if (isset($view['id_item']) && $view['id_item'] != $id) {
                    $aladesign->assign("error_email", 'error_email');
                } else {
                    $adminview->users->UpdateUser($id, $data_user);

                    if (!empty($avatar)) {
                        if (!empty($old_avatar)) {
                            unlink(A_PATH.$old_avatar);
                        }
                    }

                    $adminview->validate->Locate("/admin/?mod=config&act=user&id=".$id);
                }
            } else {
                $check = $adminview->users->CheckUser($data_user['email']);
                if ($check['count']>=1) {
                    $aladesign->assign("error_email", 'error_email');
                } else {
                    $id = $adminview->users->AddUser($data_user);
                    $adminview->validate->Locate("/admin/?mod=config&act=user&id=".$id);
                }
            }


        }

        if ($id) {
            $aladesign->assign("view", $adminview->users->View(array('id_item'=>$id)));
        }

        $aladesign->assign("user_roles", $adminview->users->ViewAllRoles());
        $aladesign->assign("page", "templates/admin/config/edit_user.tpl");
        $aladesign->display("templates/admin/main.tpl");

        break;

    case "rename_file":
        if($adminview->validate->method('post')) {
            $id = $adminview->validate->Post('id');
            $description = $adminview->validate->Post('description', 'string');
            $adminview->files->UpdateFile($id, array('description'=>$description));
            echo json_encode(array('success'=>true, 'message'=>'Файл переименован!', 'description'=>$description));
        } else {
            echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
        }
        break;
}