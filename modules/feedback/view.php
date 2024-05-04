<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

switch($act) {

    case "create_ticket":

        if($index->validate->method('post')) {

            $mail['name'] = $index->validate->Post('name');
            $aladesign->assign("name", $mail['name']);

            $mail['phone'] = $index->validate->Post('phone');
            $aladesign->assign("phone", $mail['phone']);

            $mail['email'] = $index->validate->Post('email');
            $aladesign->assign("email", $mail['email']);

            $mail['message'] = $index->validate->Post('message');
            $aladesign->assign("message", $mail['message']);

            $captcha = $index->validate->Post('captcha');

            $mail['module'] = $index->validate->Post('module') ? $index->validate->Post('module') : null;
            $mail['page_id'] = $index->validate->Post('page_id') ? $index->validate->Post('page_id') : null;

            $error = '';
            if (empty($mail['name']))
                $error .= 'Введите имя';

            if (empty($mail['email']))
                $error .= 'Введите email';

            if (empty($mail['phone']))
                $error .= 'Введите phone';

            if (empty($mail['message']))
                $error .= 'Введите текст сообщения';

            if (empty($_SESSION['CAPTCHA_CODE']) || $_SESSION['CAPTCHA_CODE'] != $captcha || empty($captcha)) {
                $error .= 'Неверный защитный код';
            }

            if (!empty($error)) {
                echo json_encode(array('success'=>false, 'message'=>$error));
                exit();
            } else {

                $aladesign->assign("mail", $mail);
                $content = $aladesign->fetch("./templates/app/default/feedback/send_message.tpl");
                $subject = $aladesign->getTemplateVars('subject');

                $index->notify->email($config['notify_from_email'], $subject, $content, $mail['email'], $config['notify_from_email']);
                $aladesign->clearAssign(array('name', 'phone', 'email', 'message'));

                $mail['last_ip'] = $index->validate->getUserIp();
                $index->feedback->Add($mail);

                echo json_encode(array('success'=>true, 'message'=>'Сообщение отправлено...'));
                exit();
            }

        }
    break;

}




?>