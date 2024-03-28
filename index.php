<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

function dd($arr, $die = false){
	echo '<pre>' . print_r($arr, true) . '</pre>';
	if($die) die;
}

function console_log($data){ // сама функция
	if(is_array($data) || is_object($data)){
		echo("{literal}<script>console.log('php_array: ".json_encode($data)."');</script>{/literal}");
	} else {
		echo("{literal}<script>console.log('php_string: ".$data."');</script>{/literal}");
	}
}

session_start();
require_once "vendor/autoload.php";
include 'config.php';


class Index extends Alatis
{
		private static $view_instance;

		public function __construct($db)
		{
			parent::__construct($db);
				global $aladesign;
				global $config;
				$this->aladesign = $aladesign;
				$this->config = $config;

				// Если инстанс класса уже существует - просто используем уже существующие переменные
				if(self::$view_instance)
				{
					$this->template     	= &self::$view_instance->template;
					$this->main_menu   	= &self::$view_instance->main_menu;
					$this->footer_menu   = &self::$view_instance->footer_menu;
					//$this->group       		= &self::$view_instance->group;

				} else {

					self::$view_instance = $this;
					$this->main_menu = $this->menu->ViewGroup(1);
					$this->footer_menu = $this->menu->ViewGroup(2);
					$this->template = $this->config['templates'];
					$this->aladesign->assign("main_menu", $this->main_menu);
					$this->aladesign->assign("footer_menu", $this->footer_menu);
					$this->aladesign->assign("template", $this->template);

					// Настраиваем плагины для смарти
					$this->aladesign->registerPlugin('function', 'api',		array($this, 'api_plugin'));

			}
		}

		public function api_plugin($params, $aladesign) {

			if(!isset($params['module']))
				return false;
			if(!isset($params['method']))
				return false;

			$module = $params['module'];
			$method = $params['method'];
			$var = $params['var'];
			unset($params['module']);
			unset($params['method']);
			unset($params['var']);

			$res = $this->$module->$method($params);

			$aladesign->assign($var, $res);
		}

}

$index = new Index($db);

if(($mod = $index->validate->Get('mod', 'string'))) {
	switch($mod) {
		case $mod: include 'modules/'.$mod.'/view.php';
			break;
	}
} else {
		$aladesign->assign("page", $index->template."/index.tpl");
		$aladesign->display($index->template."/main.tpl");
}

?>
