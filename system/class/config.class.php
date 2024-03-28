<?
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2015 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

class Config extends Alatis {

    public function __construct($db) {
      parent::__construct($db);
   	}

    public function View() {
        $SQL = "SELECT * FROM ".PREF."config LIMIT 1";
        $rs = $this->db->execute($SQL);
        return $rs->fields;
   	}




	


}

?>
