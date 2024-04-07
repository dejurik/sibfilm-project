<?
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

switch($act) {
    case "view":
		$aladesign->assign("content", $index->pages->View(array('url'=>$index->validate->Get('url'),'visible'=>1)));
		$aladesign->assign("page", "file:[main]/".$index->template."/pages/view.tpl");
		$aladesign->display("file:[main]/".$index->template."/main.tpl");
	break;
}

?>