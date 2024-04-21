<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Validate {

	public function __construct() {
		$_POST = $this->stripslashes_recursive($_POST);
		$_GET = $this->stripslashes_recursive($_GET);
	}

	public function method($method = null) {
    	if(!empty($method))
    		return strtolower($_SERVER['REQUEST_METHOD']) == strtolower($method);
	    return $_SERVER['REQUEST_METHOD'];
    }


	/**
	 * Рекурсивная чистка магических слешей
	 */
	private function stripslashes_recursive($var) {
		return $var;
		
		if(get_magic_quotes_gpc()) {
			$res = null;
			if(is_array($var)) {
				foreach($var as $k=>$v) {
					$res[stripcslashes($k)] = $this->stripslashes_recursive($v);
				}
			} else {
				$res = stripcslashes($var);
			}
		} else {
			$res = $var;
		}
		return $res;
	}

    public function Locate($path, $alert = 0, $text = 0) {
    	if($alert != 0) { echo ("<script language='Javascript'>alert(\"$text\");</script>"); }
        die ("<script language='Javascript'>function reload() {location = \"$path\"}; setTimeout('reload()', 0);</script>");
    }


    public function Get($name, $type = null) {
		$val = null;
    	if(isset($_GET[$name]))
    		$val = $_GET[$name];

    	if(!empty($type) && is_array($val))
    		$val = reset($val);

    	if($type == 'string')
    		return strval(preg_replace('/[^\p{L}\p{Nd}\d\s_\-\.\%\s]/ui', '', strval($val)));

    	if($type == 'integer')
    		return intval($val);

    	if($type == 'boolean')
    		return !empty($val);

    	return $val;
    }

	/**
	* Возвращает переменную _POST, отфильтрованную по заданному типу, если во втором параметре указан тип фильтра
	* Второй параметр $type может иметь такие значения: integer, string, boolean
	* Если $type не задан, возвращает переменную в чистом виде
	*/
    public function Post($name = null, $type = null) {
    	$val = null;
    	if(!empty($name) && isset($_POST[$name])) {
    		$val = $_POST[$name];
    	} elseif(empty($name)) {
    		$val = file_get_contents('php://input');
    	}
    	if($type == 'string') {
    		return strval(preg_replace('/[^\p{L}\p{Nd}\d\s_\-\.\%\s]/ui', '', $val));
    	}
    	if($type == 'integer') {
    		return intval($val);
		}
    	if($type == 'boolean') {
    		return !empty($val);
		}
    	return $val;
    }


	/**
	* Возвращает переменную _FILES
	* Обычно переменные _FILES являются двухмерными массивами, поэтому можно указать второй параметр,
	* например, чтобы получить имя загруженного файла: $filename = $simpla->request->files('myfile', 'name');
	*/
    public function Files($name, $name2 = null) {
		if(!empty($name2) && !empty($_FILES[$name][$name2]))
    		return $_FILES[$name][$name2];
    	elseif(empty($name2) && !empty($_FILES[$name]))
    		return $_FILES[$name];
    	else
    		return null;
    }
	/**
	* URL
	*/
    public function url($params = array()) {
		$url = parse_url($_SERVER["REQUEST_URI"]);
		parse_str($url['query'], $query);

		if(get_magic_quotes_gpc())
			foreach($query as &$v)
			{
				if(!is_array($v))
					$v = stripslashes(urldecode($v));
			}

		foreach($params as $name=>$value)
			$query[$name] = $value;

		$query_is_empty = true;
		foreach($query as $name=>$value)
			if($value!='' && $value!=null)
				$query_is_empty = false;

		if(!$query_is_empty)
			$url['query'] = http_build_query($query);
		else
			$url['query'] = null;

		$result = http_build_url(null, $url);
		return $result;
    }

	/**
	* Проверка сессии
	*/
    public function check_session() {
		if(!empty($_POST)) {
			if(empty($_POST['session_id']) || $_POST['session_id'] != session_id()) {
				unset($_POST);
				return false;
			}
		}
		return true;
    }


	public function checkout_form($params) {
		$module_name = preg_replace("/[^A-Za-z0-9]+/", "", $params['module']);
		$form = '';
		if(!empty($module_name) && is_file("system/payment/$module_name/$module_name.php")) {
			include_once("system/payment/$module_name/$module_name.php");
			$Module = new $module_name();
			$form = $Module->checkout_form($params['order_id'], $params['button_text']);
		}
		return $form;
	}

	public function getUserIp() {

		if (!isset($_SERVER['REMOTE_ADDR'])) {
			return NULL;
		}

		// Header that is used by the trusted proxy to refer to
		// the original IP
		$proxy_header = "HTTP_X_FORWARDED_FOR";

		// List of all the proxies that are known to handle 'proxy_header'
		// in known, safe manner
		$trusted_proxies = array("2001:db8::1", "192.168.50.1");

		if (in_array($_SERVER['REMOTE_ADDR'], $trusted_proxies)) {

			// Get IP of the client behind trusted proxy
			if (array_key_exists($proxy_header, $_SERVER)) {

				// Header can contain multiple IP-s of proxies that are passed through.
				// Only the IP added by the last proxy (last IP in the list) can be trusted.
				$client_ip = trim(end(explode(",", $_SERVER[$proxy_header])));

				// Validate just in case
				if (filter_var($client_ip, FILTER_VALIDATE_IP)) {
					return $client_ip;
				} else {
					// Validation failed - beat the guy who configured the proxy or
					// the guy who created the trusted proxy list?
					// TODO: some error handling to notify about the need of punishment
				}
			}
		}

		// In all other cases, REMOTE_ADDR is the ONLY IP we can trust.
		return $_SERVER['REMOTE_ADDR'];

	}
	
}





?>
