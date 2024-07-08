<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_PROJECTS'])) {
    $adminview->validate->Locate("/admin/");
    die();
}

if($adminview->validate->method('get')) {
    $id = $adminview->validate->Get('id', 'integer');
}

switch($act) {

    case "view_all":

        if($adminview->validate->method('post')) {
            $id = $adminview->validate->Post('id');
            $action = $adminview->validate->Post('action', 'string');

            if(!empty($id)) {
                if ($action == 'delete') {
                    $content = $adminview->projects->View(array('id_item'=>$id));
                    $adminview->projects->DeleteProjectId($id);
                    $adminview->features->DeleteOption(array('project_id'=>$id,'module_id'=>'projects'));
                    $adminview->staffs->DeleteStaffs(array('page_id'=>$id, 'module_id'=>'projects'));
                    if (!empty($content['picture'])) {
                        unlink(A_PATH.$content['picture']);
                    }
                    echo json_encode(array('success'=>true, 'message'=>'Проект удален!'));
                    exit();
                }

                echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
                exit();
            }

        }

        $aladesign->assign("staff_all", $adminview->staffs->GetStaffs());
        $aladesign->assign("view_all", $adminview->projects->ViewAll());
        $aladesign->assign("page", "templates/admin/projects/view_all.tpl");
        $aladesign->display("templates/admin/main.tpl");
        break;

    case "project":

        if($adminview->validate->method('post')) {

            $data_id = $adminview->validate->Post('id_item', 'integer');

            $data_project['title'] = $adminview->validate->Post('title');
            $data_project['meta_title'] = $adminview->validate->Post('meta_title');
            $data_project['meta_keywords'] = $adminview->validate->Post('meta_keywords');
            $data_project['meta_description'] = $adminview->validate->Post('meta_description');
            $data_project['url'] = $adminview->validate->Post('url');
            $data_project['description'] = $adminview->validate->Post('description');
            $data_project['text'] = $adminview->validate->Post('text');

            $data_project_staffs = $adminview->validate->Post('project_staffs');
            $data_project_options = $adminview->validate->Post('options');
            $data_project_new_options = $adminview->validate->Post('new_options');
            $old_picture = $adminview->validate->Post('old_picture');

            $data_project['visible'] = $adminview->validate->Post('visible') ? 1 : 0;
            $data_project['comments'] = $adminview->validate->Post('comments') ? 1 : 0;

            if($adminview->validate->files('picture')['name'] != '') {
                $uploader = new Uploader\Uploader(A_PATH);
                $uploader->setPrefix(function () {
                    return uniqid();
                })->setDirectory('/uploads/projects');
                $imageUpload = $uploader->with($adminview->validate->files('picture'));
                $imageUpload->save();
                $data_project['picture'] = $imageUpload->getDestination();
                if ($old_picture && !empty($old_picture) && !empty($data_project['picture'])) {
                    unlink(A_PATH.$old_picture);
                }
            }

            if ($data_id) {
                $view = $adminview->projects->View(array('id_item'=>$data_id));
                if ($view['url'] != $data_project['url']) {
                    $data_project['url'] = $adminview->projects->NewUrl($data_project['url']);
                }
                $adminview->projects->UpdateProjectId($data_id, $data_project);
            } else {
                $data_project['url'] = $adminview->projects->NewUrl($data_project['url']);
                $data_id = $adminview->projects->AddProject($data_project);
            }

            if(is_array($data_project_staffs)) {
                $adminview->staffs->DeleteStaffs(array('page_id'=>$data_id, 'module_id'=>'projects'));
                foreach($data_project_staffs as $staff_id) {
                    if ($staff_id == 0)
                        continue;
                    $pos = 1;
                    $adminview->staffs->UpdateStaffs($data_id, $staff_id, 'projects');
                    $pos++;
                }
            }

            if(is_array($data_project_options)) {
                $adminview->features->DeleteOption(array('page_id'=>$data_id, 'module_id'=>'projects'));
                foreach($data_project_options as $feature_id=>$value) {
                    $pos = 1;
                    $adminview->features->UpdateOption($data_id, $feature_id, $value, 'projects');
                    $pos++;
                }
            }

            if(is_array($data_project_new_options)) {
                foreach($data_project_new_options['names'] as $i=>$name) {
                    $value = trim($data_project_new_options['value'][$i]);
                    if(!empty($name) && !empty($value)) {
                        $feature = $adminview->features->GetFeature(array('title'=>trim($name), 'module_id'=>'projects'));
                        if(empty($feature["id_item"])){
                            $feature_id = $adminview->features->AddFeature(array('title'=>trim($name),'module_id'=>'projects'));
                        } else {
                            $feature_id = $feature["id_item"];
                        }
                        $adminview->features->UpdateOption($data_id, $feature_id, $value, 'projects');
                    }
                }
            }

            $adminview->validate->Locate("/admin/?mod=projects&act=project&id=".$data_id);

        }

        if ($id) {
            $aladesign->assign("view", $adminview->projects->View(array('id_item'=>$id)));
            $aladesign->assign("options", $adminview->features->GetOptions(array('page_id'=>$id,'module_id'=>'projects')));
            $aladesign->assign("project_staffs", $adminview->staffs->GetPageStaffs(array('page_id'=>$id,'module_id'=>'projects')));
        }

        $aladesign->assign("staffs", $adminview->staffs->GetStaffs());
        $aladesign->assign("features", $adminview->features->GetFeatures(array('module_id'=>'projects')));
        $aladesign->assign("page", "templates/admin/projects/edit.tpl");
        $aladesign->display("templates/admin/main.tpl");

    break;


}
?>
