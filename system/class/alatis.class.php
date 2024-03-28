<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

use system\class\ErrorHandler;

class Alatis {

	private $classes = array(
		'config'		=> 'config',
		'validate'		=> 'validate',
		'menu'			=> 'menu',
		'sliders'		=> 'sliders',
		/*'pages'			=> 'pages',
		'images'		=> 'images',
		'users'			=> 'users',
		'admins'		=> 'admins',

		'advertising'	=> 'advertising',
		'categories'	=> 'categories',
		'features'		=> 'features',
		'collections'	=> 'collections',
		'brands'		=> 'brands',
		'products'		=> 'products',
		'variants'		=> 'variants',
		'money'			=> 'money',
		'cart'			=> 'cart',
		'delivery'		=> 'delivery',
		'orders'		=> 'orders',
		'payment'		=> 'payment',
		'feedback'		=> 'feedback',
		'notify'			=> 'notify',*/
		//'phpmailer'     	=> 'phpmailer'
		/*
		'mail'     			=> 'mail',
		'tree' 				=> 'tree',
*/

	);

	// Созданные объекты
	private static $objects = array();
	public $db;
	//protected $db;


	/**
	 * Конструктор оставим пустым, но определим его на случай обращения parent::__construct() в классах API
	 */
	public function __construct($db) {
		$this->db = $db;
		new ErrorHandler();
	}

	/**
	 * Магический метод, создает нужный объект API
	 */
	public function __get($name) {
		// Если такой объект уже существует, возвращаем его
		if(isset(self::$objects[$name])) {
			return(self::$objects[$name]);
		}

		// Если запрошенного API не существует - ошибка
		if(!array_key_exists($name, $this->classes)) {
			return null;
		}

		// Определяем имя нужного класса
		$class = $this->classes[$name];

		// Подключаем его
		if (!file_exists('system/class/'.$class.'.class.php')) {
			throw new \Exception("system/class/".$class.".class.php отсутствует", 404);
		}
		include_once("system/class/".$class.".class.php");

		// Сохраняем для будущих обращений к нему
		self::$objects[$name] = new $class($this->db);

		// Возвращаем созданный объект
		return self::$objects[$name];
	}
}

?>
