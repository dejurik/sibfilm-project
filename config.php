<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

use Smarty\Smarty;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('default_charset','utf-8');

// Константы
define("DEBUG", 1);
define("A_PATH",dirname(__FILE__)); // Директория
define('PREF', 'ala_'); // Префикс таблиц

// Подключение основных классов
require_once('system/class/errorHandler.class.php');
require_once('system/class/alatis.class.php');

// Конфигурация БД
$dbconn['dbhost'] = "localhost";
$dbconn['dbname'] = "sibfilm";
$dbconn['dbuser'] = "root";
$dbconn['dbpass'] = "";

// Подкючение к базе данных mySQL
$db = ADOnewConnection('mysqli');
$conn = $db->connect($dbconn['dbhost'],$dbconn['dbuser'],$dbconn['dbpass'],$dbconn['dbname']);
if($conn == false) { die("<center>Подключение к серверу базы данных не доступно.<br></center>"); }
//$db->execute("set character_set_results='utf8'");
//$db->execute("set names 'utf8'");
$db->debug = 0; // Отладка запросов 0/1

// Запускаем ядро
$alatis = new Alatis($db);

// Конфиги шаблонизатора
$aladesign = new Smarty();
$aladesign->debugging = false; // Отладка true/false
$aladesign->caching = false; // Кэш true/false
$aladesign->cache_lifetime = 120; // Время кэша в секундах

// Основные характеристики сайта
$config = $alatis->config->View();
$act = $alatis->validate->Get('act', 'string');
$mod = $alatis->validate->Get('mod', 'string');

$upload_image = array("jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "gif", "GIF"); // Допустимые форматы загрузки файлов

$aladesign->assign("act", $act);
$aladesign->assign("mod", $mod);
$aladesign->assign("config", $config);

