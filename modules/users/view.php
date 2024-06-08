<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

switch($act) {

    case "login":
        if($index->validate->method('post') && $index->validate->check_session()) {

            $captcha = $index->validate->Post('captcha');

            $data['email'] = $index->validate->Post('email');
            $aladesign->assign("email", $data['email']);

            $data['password'] = $index->validate->Post('password');

            $error = '';
            if (empty($_SESSION['CAPTCHA_CODE']) || $_SESSION['CAPTCHA_CODE'] != $captcha || empty($captcha)) {
                $error .= 'Неверный защитный код';
            }
            if (empty($data['email']))
                $error .= 'Введите email';

            if (empty($data['password']))
                $error .= 'Введите пароль';

            if (!empty($error)) {
                echo json_encode(array('success'=>false, 'message'=>$error));
                exit();
            } else {

                if($data_user = $index->users->Login($data['email'],$data['password'])) {
                    $_SESSION['user_id'] = $data_user['user_id'];
                    $_SESSION['email'] = $data_user['email'];
                    $_SESSION['role_id'] = $data_user['role_id'];
                    $index->users->LogDate($_SESSION['user_id']);
                    $index->users->OpenSession($_SESSION['user_id'],$_SESSION['role_id']);
                    echo json_encode(array('success'=>true, 'message'=>'Перенаправляем...'));
                    exit();
                } else {
                    echo json_encode(array('success'=>false, 'message'=>'Логин или пароль указаны не верно'));
                    exit();
                }
            }

        }
        $aladesign->assign("session_id", session_id());
        $aladesign->assign("page", "file:[main]/".$index->template."/users/login.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");
        break;

    case "view":
        if(!isset($_SESSION['user_id'])) {
            $index->validate->Locate("/users/login/");
            exit();
        }
        $aladesign->assign("view", $index->users->View(array('id_item'=>$_SESSION['user_id'])));
        $aladesign->assign("page", "file:[main]/".$index->template."/users/index.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");
        break;


    case "logout":
        if (isset($_COOKIE['email'])){
            unset($_COOKIE['email']);
            unset($_COOKIE['password']);
            setcookie("email", "", time()-1, "/");
            setcookie("password", "", time()-1, "/");
        }
        unset($_SESSION['sid'], $_SESSION['email'], $_SESSION['password'], $_SESSION['role_id'], $_SESSION['user_id']);
        $index->users->Logout();
        $index->validate->Locate("/");
        break;


    case "register":
        if($index->validate->method('post') && $index->validate->check_session()) {

            $captcha = $index->validate->Post('captcha');
            $confirm_password = $index->validate->Post('confirm_password');

            $data['name'] = $index->validate->Post('name');
            $data['email'] = $index->validate->Post('email');

            $data['password'] = ($index->validate->Post('password') == $confirm_password) ? md5($index->validate->Post('password')) : null;
            $data['enabled'] = 1;
            $data['role_id'] = 3;
            $data['last_ip'] = $index->validate->getUserIp();
            $data['created'] = date('Y.m.d H:i:s');

            $aladesign->assign("name", $data['name']);
            $aladesign->assign("email", $data['email']);

            $check = $index->users->CheckUser($data['email']);

            $error = '';
            if (empty($data['email']))
                $error .= 'Введите email';

            if (empty($data['password']))
                $error .= 'Введите пароль';

            if ($check['count']>=1)
                $error .= 'С таким Email зарегистрирован пользователь';

            if (empty($_SESSION['CAPTCHA_CODE']) || $_SESSION['CAPTCHA_CODE'] != $captcha || empty($captcha)) {
                $error .= 'Неверный защитный код';
            }

            if (!empty($error)) {
                echo json_encode(array('success'=>false, 'message'=>$error));
                exit();
            } else {

                if($user_id = $index->users->AddUser($data)) {
                    $_SESSION['user_id'] = $user_id;
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['role_id'] = $data['role_id'];
                    $index->users->LogDate($_SESSION['user_id']);
                    $index->users->OpenSession($_SESSION['user_id'],$_SESSION['role_id']);
                    echo json_encode(array('success'=>true, 'message'=>'Перенаправляем...'));
                    exit();
                } else {
                    echo json_encode(array('success'=>false, 'message'=>'Логин или пароль указаны не верно'));
                    exit();
                }
            }

        }

        $aladesign->assign("session_id", session_id());
        $aladesign->assign("page", "file:[main]/".$index->template."/users/register.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");
        break;

    case "forgot":

        if($index->validate->method('post') && $index->validate->check_session()) {

            $captcha = $index->validate->Post('captcha');
            $email = $index->validate->Post('email');
            $aladesign->assign("email", $email);

            if (!empty($_SESSION['CAPTCHA_CODE']) && $_SESSION['CAPTCHA_CODE'] == $captcha && !empty($email) ) {
                $user = $index->users->View(array('email'=>$email, 'enabled'=>1));
                if(!empty($user['id_item'])) {
                    $code = md5(uniqid($user['id_item'], true));
                    $_SESSION['password_remind_code'] = $code;
                    $_SESSION['password_remind_user_id'] = $user['id_item'];

                    $aladesign->assign("code", $code);
                    $aladesign->assign("user", $user);
                    $content = $aladesign->fetch("./templates/app/default/users/password_remind_message.tpl");
                    $subject = $aladesign->getTemplateVars('subject');
                    $index->notify->email($config['notify_from_email'], $subject, $content, $email, $config['notify_from_email']);
                    $aladesign->assign("password_send", true);
                } else {
                    $aladesign->assign("error", 'user_not_found');
                }
            } else {
                $aladesign->assign("error", 'captcha');
            }
        } elseif ($index->validate->Get('code')) {
            if(!isset($_SESSION['password_remind_code']) && !isset($_SESSION['password_remind_user_id'])) {
                $aladesign->assign("error", 'Данный код устарел!');
            } elseif($index->validate->Get('code') != $_SESSION['password_remind_code']){
                $aladesign->assign("error", 'Данный код устарел!');
            }

            $user = $index->users->View(array('id_item'=>$_SESSION['password_remind_user_id'], 'enabled'=>1));
            if(!empty($user['id_item'])) {
                $_SESSION['user_id'] = $user['id_item'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role_id'] = $user['role_id'];
                $index->users->LogDate($_SESSION['user_id']);
                $index->users->OpenSession($_SESSION['user_id'],$_SESSION['role_id']);
                unset($_SESSION['password_remind_code']);
                unset($_SESSION['password_remind_user_id']);
                $index->validate->Locate("/users/profile");
            } else {
                $aladesign->assign("error", 'Данный код устарел!');
            }

        }

        $aladesign->assign("session_id", session_id());
        $aladesign->assign("page", "file:[main]/".$index->template."/users/password_remind.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");
        break;

    case "profile":
        if(!isset($_SESSION['user_id'])) {
            $index->validate->Locate("/users/login/");
            exit();
        }
        if($index->validate->method('post') && $index->validate->check_session()) {

            $id = $_SESSION['user_id'];

            $data_user['name'] = $index->validate->Post('name');
            $data_user['email'] = $index->validate->Post('email');
            $data_user['phone'] = $index->validate->Post('phone');
            $data_user['site'] = $index->validate->Post('site');
            $data_user['about'] = $index->validate->Post('about');

            $old_avatar = $index->validate->Post('old_avatar');
            $password = $index->validate->Post('password');
            $confirm_password = $index->validate->Post('confirm_password');

            if(!empty($password)) {
                $data_user['password'] = ($password == $confirm_password) ? md5($password) : false;
                if(!$data_user['password']) {
                    $aladesign->assign("error", 'confirm_password_error');
                }
            }

            $view = $index->users->View(array('email'=>$data_user['email']));
            if (isset($view['id_item']) && $view['id_item'] != $id) {
                $aladesign->assign("error", 'email_error');
            } else {

                if($index->validate->files('avatar')['name'] != '') {
                    $uploader = new Uploader\Uploader(A_PATH);
                    $uploader->setPrefix(function () {
                        return uniqid();
                    })->setDirectory('/uploads/avatars');
                    $imageUpload = $uploader->with($index->validate->files('avatar'));
                    $imageUpload->save();
                    $data_user['avatar'] = $imageUpload->getDestination();
                    if ($old_avatar && !empty($old_avatar) && !empty($data_user['avatar'])) {
                        unlink(A_PATH.$old_avatar);
                    }
                }
                $index->users->UpdateUser($id, $data_user);
                $aladesign->assign("success", 'Данные обновлены');
            }

        }


        $aladesign->assign("session_id", session_id());
        $aladesign->assign("view", $index->users->View(array('id_item'=>$_SESSION['user_id'])));
        $aladesign->assign("page", "file:[main]/".$index->template."/users/profile.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");
        break;
}

?>