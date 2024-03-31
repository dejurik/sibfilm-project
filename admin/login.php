<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/
session_start();
chdir('..');
require_once "vendor/autoload.php";
include 'config.php';

if(isset($_SESSION['user_id'])) {
	$alatis->validate->Locate("/admin/", 0, 0);
	exit();
}
if ($alatis->validate->method('post')) {
	$email = $alatis->validate->Post('email');
	$password = $alatis->validate->Post('password');
	$remember = $alatis->validate->Post('remember');
	$rs = $alatis->users->Login($email, $password);
}
if(isset($rs['user_id'])) {
	$_SESSION['user_id'] = $rs['user_id'];
	$_SESSION['email'] = $rs['email'];
 	$_SESSION['password'] = $rs['password'];
 	$_SESSION['role_id'] = $rs['role_id'];
	if (!empty($remember)) {
		@ini_set('session.gc_maxlifetime', 86400); // 86400 = 24 часа
		@ini_set('session.cookie_lifetime', 0); // 0 - пока браузер не закрыт
		$expire = time() + 3600 * 24 * 100;
		setcookie('email', $email, $expire, "/admin/");
		setcookie('password', md5($password), $expire, "/admin/");
	}
	$alatis->users->LogDate($_SESSION['user_id']);
	$alatis->users->OpenSession($_SESSION['user_id']);
	echo json_encode(array('success'=>true, 'message'=>'Перенаправляем...'));
	exit();
	//$alatis->validate->Locate("/admin/", 0, 0);
} else {
	if (isset($_POST['email'])) {
		echo json_encode(array('success'=>false, 'message'=>'Введены неверные данные, администратор уведомлен'));
		exit();
	}
}
$aladesign->display("admin/templates/default/login.tpl");
?>
