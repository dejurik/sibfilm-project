<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

namespace system\class;

class ErrorHandler
{

	public function __construct()
	{
		if(DEBUG){
			error_reporting(-1);
		}else{
			error_reporting(0);
		}
		set_exception_handler([$this, 'exceptionHandler']);
	}

	public function exceptionHandler($e)
	{
		$this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
		$this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
	}

	protected function logErrors($message = '', $file = '', $line = '')
	{
		error_log("[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n=================\n", 3, dirname(dirname(__DIR__)) . '/tmp/errors-'. date('Y-m-d') .'.log');
	}

	protected function displayError($errno, $errstr, $errfile, $errline, $responce = 404)
	{
		http_response_code($responce);
		if($responce == 404 && !DEBUG){
			echo '<pre>';
			print_r($errno);
			echo '</pre>';
			echo '<pre>';
			print_r($errstr);
			echo '</pre>';
			echo '<pre>';
			print_r($errfile);
			echo '</pre>';
			echo '<pre>';
			print_r($errline);
			echo '</pre>';
			echo '<pre>';
			print_r($responce);
			echo '</pre>';
			die;
		}
		if(DEBUG){
			echo '<pre>';
			print_r($errno);
			echo '</pre>';
			echo '<pre>';
			print_r($errstr);
			echo '</pre>';
			echo '<pre>';
			print_r($errfile);
			echo '</pre>';
			echo '<pre>';
			print_r($errline);
			echo '</pre>';
			echo '<pre>';
			print_r($responce);
			echo '</pre>';
			die;
		} else {
			echo '<pre>';
			print_r($errno);
			echo '</pre>';
			echo '<pre>';
			print_r($errstr);
			echo '</pre>';
			echo '<pre>';
			print_r($errfile);
			echo '</pre>';
			echo '<pre>';
			print_r($errline);
			echo '</pre>';
			echo '<pre>';
			print_r($responce);
			echo '</pre>';
			die;
		}
		die;
	}

}