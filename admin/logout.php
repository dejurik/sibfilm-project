<?php
define('SECURITY', true);
session_start();
chdir('..');
include 'config.php';

	if (isset($_COOKIE['email'])){
		unset($_COOKIE['email']);
		unset($_COOKIE['password']);
		setcookie("email", "", time()-1, "/admin/");
		setcookie("password", "", time()-1, "/admin/");
	}

	unset($_SESSION['sid'], $_SESSION['email'], $_SESSION['password'], $_SESSION['id_roles'], $_SESSION['id_admin']);	
	$alatis->admins->Logout();
	$alatis->validate->Locate("/admin/");
	
?>