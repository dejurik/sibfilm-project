<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

switch($act) {
    case "view":

        $content = $index->projects->View(array('url'=>$index->validate->Get('url'),'visible'=>1));

        if ($content['comments'] == 1)
            $aladesign->assign("comments", $index->feedback->ViewAll(array('module'=>'projects', 'page_id'=>$content['id_item'], 'visible'=>1, 'limit'=>100)));

        $aladesign->assign("content", $content);

        $aladesign->assign("project_staffs", $index->staffs->GetAllStaffsInPage(array('page_id'=>$content['id_item'],'module_id'=>'projects')));
        $aladesign->assign("project_options", $index->features->GetAllOptionsInPage(array('page_id'=>$content['id_item'],'module_id'=>'projects')));
		$aladesign->assign("page", "file:[main]/".$index->template."/projects/view_product.tpl");
		$aladesign->display("file:[main]/".$index->template."/main.tpl");
	break;

    case "view_all":
        $aladesign->assign("content", $index->projects->ViewAll(array('visible'=>1)));
        $aladesign->assign("page", "file:[main]/".$index->template."/projects/view_all.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");
    break;

}

?>