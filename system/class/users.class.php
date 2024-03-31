<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Users extends Alatis {

	public $sid;				// идентификатор текущей сессии
	public $uid;				// идентификатор текущего пользователя
	public $onlineMap;			// карта пользователей online

	public function __construct($db) {
		parent::__construct($db);
		$this->sid = null;
		$this->uid = null;
		$this->onlineMap = null;
	}

	public function ClearSessions() {
		$min = date('Y-m-d H:i:s', time() - 2880 * 30);
		$SQL = "DELETE FROM ".PREF." sessions WHERE time_last < '".$min."'";
		$this->db->Execute($SQL);
	}

	public function Get($user_id = null) {
		// Если id_user не указан, берем его по текущей сессии.
		if ($user_id == null) {
			$user_id = $this->GetUid();
		}
		if ($user_id == null) {
			//echo $user_id.'нету';
			return null;
		}
		// А теперь просто возвращаем пользователя по id_user.
		$SQL = "SELECT u.*, r.name as role_name, r.description FROM ".PREF."users u LEFT JOIN ".PREF."roles r ON u.role_id = r.id_item WHERE u.id_item = ".$user_id;
		$rs = $this->db->Execute($SQL);
		if (empty($_SESSION['user_id'])) {$_SESSION['user_id'] = $user_id;}
		return $rs;
	}

	public function GetUid() {

		// Проверка кеша.
		if ($this->uid != null) {
			return $this->uid;
		}
		// Берем по текущей сессии.
		$sid = $this->GetSid();

		if ($sid == null) {
			return null;
		}
		$SQL = "SELECT user_id FROM ".PREF."sessions WHERE sesid = '".$sid."'";
		$rs = $this->db->Execute($SQL);

		// Если сессию не нашли - значит пользователь не авторизован.
		if ($rs->recordCount() == 0) {
			return null;
		}
		// Если нашли - запоминм ее.
		$this->uid = $rs->fields["user_id"];
		return $this->uid;
	}


	public function GetSid() {

		$sid = null;

		// Проверка кеша.
		if ($this->sid != null) {
			return $this->sid;
		}

		// Ищем SID в сессии.
		if (isset($_SESSION['sid'])) {
			$sid = $_SESSION['sid'];
		}

		// Если нашли, попробуем обновить time_last в базе.
		// Заодно и проверим, есть ли сессия там.
		if ($sid != null){
			$session = array();
			$session['time_last'] = date('Y-m-d H:i:s');
			$SQL = "UPDATE ".PREF."sessions SET 
      				time_last = '".$session['time_last']."' 
      			WHERE sesid = '".$sid."' LIMIT 1";
			$rs = $this->db->Execute($SQL);

			if ($rs === false) {
				$SQL = "SELECT count(*) FROM ".PREF."sessions WHERE sesid = '".$sid."'";
				$rs = $this->db->Execute($SQL);
				if ($rs == 0) {
					$sid = null;
				}
			}
		}

		// Нет сессии? Ищем логин и md5(пароль) в куках.
		// Т.е. пробуем переподключиться.
		if ($sid == null && isset($_COOKIE['email'])) {
			$user = $this->GetByLogin($_COOKIE['email']);
			if ($user->fields['id_item'] != null && $user->fields['password'] == $_COOKIE['password']) {
				$sid = $this->OpenSession($user->fields['id_item']);
			}
		}
		// Запоминаем в кеш.
		if ($sid != null) {
			$this->sid = $sid;
		}

		// Возвращаем, наконец, SID.
		return $sid;
	}

	public function GetByLogin($email){
		$SQL = "SELECT * FROM ".PREF."users WHERE email = '".$email."'";
		return $this->db->Execute($SQL);
	}

	public function OpenSession($user_id)	{

		function GenerateStr($length = 10) {
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
			$code = "";
			$clen = strlen($chars) - 1;
			while (strlen($code) < $length)
				$code .= $chars[mt_rand(0, $clen)];
			return $code;
		}

		$sid = GenerateStr(10);

		$now = date('Y-m-d H:i:s');
		$SQL = "INSERT ".PREF."sessions SET
			user_id = '".$user_id."',
			sesid = '".$sid."',
			time_start = '".$now."',
			time_last = '".$now."'
		";
		$rs = $this->db->Execute($SQL);
		// регистрируем сессию в PHP сессии
		$_SESSION['sid'] = $sid;
		return $sid;
	}

	public function Login($email, $password) {
		$SQL = "SELECT id_item as user_id, name, email, password, role_id FROM ".PREF."users WHERE email = '".$email."' AND password = '".md5($password)."' AND enabled = 1";
		$rs = $this->db->Execute($SQL);
		return $rs->fields;
	}

	public function LogDate($user_id) {
		$SQL = "UPDATE ".PREF."users SET logdate = '".date("Y-m-d H:i:s")."' 
      			WHERE id_item = '".$user_id."' LIMIT 1";
		$this->db->Execute($SQL);
	}

	public function Can($user_id = null)
	{
		if ($user_id == null) {
			$user_id = $this->GetUid();
		}
		if ($user_id == null) {
			return false;
		}
		$SQL = "SELECT p.name FROM ".PREF."privs2rol p2r
					LEFT JOIN ".PREF."users u ON u.role_id = p2r.id_role
					LEFT JOIN ".PREF."privilegies p ON p.id_item = p2r.id_priv 
				WHERE u.id_item = ".$user_id;

		$rs = $this->db->Execute($SQL);
		while(!$rs->EOF) {
			$access[$rs->fields["name"]] = $rs->fields["name"];
			$rs->MoveNext();
		}
		return $access;
	}

















	/*
	$_SESSION['id_admin'] = $rs['id_admin'];
   	$_SESSION['email'] = $rs['email'];
 	$_SESSION['password'] = $rs['password'];
 	$_SESSION['id_roles'] = $rs['id_roles'];

	*/












	public function CanTo($priv, $id_admin = null)
	{
		if ($id_admin == null) {
			$id_admin = $this->GetUid();
		}
		if ($id_admin == null) {
			return false;
		}
		$SQL = "SELECT count(*) as cnt FROM ".PREF."".$this->privs2rol." p2r
				LEFT JOIN ".PREF."".$this->table." u ON u.id_roles = p2r.id_role
				LEFT JOIN ".PREF."".$this->privilegies." p ON p.id_item = p2r.id_priv 
				WHERE u.id_admin = '".$id_admin."' AND p.name = '".$priv."'";

		$rs = $this->db->Execute($SQL);
		return ($rs->fields['cnt'] > 0);
	}

	public function IsOnline($id_admin) {
		if ($this->onlineMap == null) {
		    $SQL = "SELECT DISTINCT id_admin FROM ".PREF."".$this->table_ses."";
		    $rs = $this->db->Execute($SQL);

		    foreach ($rs as $item) {
		    	$this->onlineMap[$item['id_admin']] = true;
			}
		}
		return ($this->onlineMap[$id_admin] != null);
	}


	public function Logout() {
		$this->sid = null;
		$this->uid = null;
	}



























    public function View() {
		$SQL = "SELECT 
					id_admin,
					login,
					name,
					email,
					id_roles,
					is_pub,
					regdate,
					logdate
				FROM ".PREF."".$this->table."";
		$rs = $this->db->Execute($SQL);
		return $rs;
    }

  	public function Add() {
      	$SQL = "INSERT ".PREF."".$this->table." SET 
      				login = '".$this->login."', 
      				".$this->password."
      				name = '".$this->name."', 
      				email = '".$this->email."', 
      				chmod = '".$this->chmod."', 
      				is_pub = '".$this->is_pub."', 
      				regdate = '".$this->regdate."'";
		$rs = $this->db->Execute($SQL);
   	}

   	public function EditView($id_admin) {
		$SQL = "SELECT 
					login, 
					name,
					email,
					chmod, 
					is_pub
				FROM ".PREF."".$this->table." WHERE id_admin = ".$id_admin;
		$rs = $this->db->Execute($SQL);
		return $rs;
   	}

   	public function Edit($id_admin) {
      	$SQL = "UPDATE ".PREF."".$this->table." SET 
      				login = '".$this->login."', 
      				".$this->password."
      				name = '".$this->name."', 
      				email = '".$this->email."', 
      				chmod = '".$this->chmod."', 
      				is_pub = '".$this->is_pub."' 
      			WHERE id_admin = ".$id_admin;
		$rs = $this->db->Execute($SQL);
   	}

   	public function Delete($id_admin) {
      	$SQL = "DELETE FROM ".PREF."".$this->table." WHERE id_admin = ".$id_admin." LIMIT 1";
		$rs = $this->db->Execute($SQL);
   	}

   	public function DeleteAll($delete_all) {
      	$SQL = "DELETE FROM ".PREF."".$this->table." WHERE id_admin IN(".$delete_all.")";
		$rs = $this->db->Execute($SQL);
   	}

}

?>
