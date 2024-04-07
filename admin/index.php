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
//session_save_path("admin/cache/");

require_once "vendor/autoload.php";
include 'config.php';

function console_log($data){ // сама функция
	if(is_array($data) || is_object($data)){
		echo("{literal}<script>console.log('php_array: ".json_encode($data)."');</script>{/literal}");
	} else {
		echo("{literal}<script>console.log('php_string: ".$data."');</script>{/literal}");
	}
}

function dd($arr, $die = false){
	echo '<pre>' . print_r($arr, true) . '</pre>';
	if($die) die;
}


class AdminIndex extends Alatis {

	public $user_id;
	private static $adminview_instance;

    public function __construct($db) {
		parent::__construct($db);
		global $aladesign;
		$this->aladesign = $aladesign;

		// Если инстанс класса уже существует - просто используем уже существующие переменные
		if(self::$adminview_instance) {
			$this->user_id = &self::$adminview_instance->user_id;
		} else {
			self::$adminview_instance = $this;
			$this->aladesign->assign("user_id", $this->user_id);
		}
	}

}

	$adminview = new AdminIndex($db);
	$adminview->users->ClearSessions();
	$user_id = $adminview->users->Get();

	// Админ, если залогинен
	if ($user_id == null) {
		unset($_SESSION['sid'], $_SESSION['email'], $_SESSION['password'], $_SESSION['role_id'], $_SESSION['user_id']);
		$adminview->validate->Locate("/admin/login/");
	}

	$access = $adminview->users->Can();
	$aladesign->assign("access", $access);

	if(!isset($access['VIEW_ADMIN'])) {
		die();
	}

	$aladesign->assign("user_id", $user_id->fields);

	if(isset($_GET['mod'])) {
		switch($mod) {
        	case $mod: 
						$aladesign->assign("mod", $mod);
						include 'admin/modules/'.$mod.'/view.php';
        	break;
		}
	} else {

		function formatDataSize ( $bytes ) {
			$units = array ( 'bytes' , 'KB' , 'MB' , 'GB' , 'TB' );
			foreach ( $units as $unit ) {
				if ( $bytes < 1024 ) break;
					$bytes = round ( $bytes / 1024 , 1 );
			}
			return $bytes . ' ' . $unit ;
		}

		$view['host'] = $_SERVER['SERVER_NAME'];
		$view['os'] = PHP_OS;
		$view['servPO'] = $_SERVER["SERVER_SOFTWARE"];
		$view['phpversion'] = phpversion();
		$view['server_info'] = $db->serverInfo();
		$view['server_ip'] = $_SERVER['SERVER_ADDR'];
		$view['upload_max_filesize'] = ini_get('upload_max_filesize');
		$view['post_max_size'] = (ini_get('file_uploads')==0) ? $lang['sys_offswitched'] : @ini_get('post_max_size');
		$view['max_execution_time'] = ini_get('max_execution_time');
		$view['user_ip'] = $_SERVER['REMOTE_ADDR'];
		$view['dfs_string'] = formatDataSize(disk_free_space("/"));
		$view['dts_string'] = formatDataSize(disk_total_space("/"));

		$aladesign->assign("view", $view);
		$aladesign->assign("page", "templates/admin/pages/view_all.tpl");
		$aladesign->display('templates/admin/main.tpl');

	}

?>
