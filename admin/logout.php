<?php
define('SECURITY', true);
session_start();
chdir('..');
require_once "vendor/autoload.php";
include 'config.php';

	if (isset($_COOKIE['email'])){
		unset($_COOKIE['email']);
		unset($_COOKIE['password']);
		setcookie("email", "", time()-1, "/admin/");
		setcookie("password", "", time()-1, "/admin/");
	}

	unset($_SESSION['sid'], $_SESSION['email'], $_SESSION['password'], $_SESSION['role_id'], $_SESSION['user_id']);
	$alatis->users->Logout();
	$alatis->validate->Locate("/admin/");
	
?>