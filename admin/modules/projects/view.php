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

            $data['title'] = $adminview->validate->Post('title', 'string');
            $data['post'] = $adminview->validate->Post('post', 'string');

            $avatar = $adminview->validate->Post('avatar');

            $old_picture = $adminview->validate->Post('old_picture');

            if (!empty($avatar)) {
                $data['avatar'] = $adminview->projects->saveBase64ToImage($avatar, '/uploads/staffs/');
            }

            if(!empty($id)) {
                if ($action == 'edit_staff') {
                    if (!empty($new_picture)) {
                        /*if(copy(A_PATH.'/uploads/staffs/t/'.$new_picture, A_PATH.'/uploads/staffs/'.$new_picture)){
                            $data['avatar'] = '/uploads/staffs/'.$new_picture;
                            unlink(A_PATH.'/uploads/staffs/t/'.$new_picture);
                        }*/
                        if (!empty($old_picture)) {
                            unlink(A_PATH.$old_picture);
                        }
                    }
                    $adminview->projects->UpdateStaffId($id, $data);
                    $adminview->validate->Locate("/admin/?mod=projects&act=view_all");
                }
                if ($action == 'delete') {
                    $content = $adminview->projects->View(array('id_item'=>$id));
                    $adminview->projects->DeleteProjectId($id);
                    $adminview->projects->DeleteOption(array('project_id'=>$id));
                    $adminview->projects->DeleteStaffs(array('project_id'=>$id));
                    if (!empty($content['picture'])) {
                        unlink(A_PATH.$content['picture']);
                    }
                    echo json_encode(array('success'=>true, 'message'=>'Проект удален!'));
                    exit();
                }
                if ($action == 'delete_staff') {
                    $content = $adminview->projects->GetStaffId($id);
                    $adminview->projects->DeleteStaffId($id);
                    $adminview->projects->DeleteStaffs(array('staff_id'=>$id));
                    if (!empty($content['avatar'])) {
                        unlink(A_PATH.$content['avatar']);
                    }
                    echo json_encode(array('success'=>true, 'message'=>$content['title'].' удален!'));
                    exit();
                }

                echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
                exit();
            }

            if ($action == 'add_staff') {
                $adminview->projects->InsertStaff($data);
            }

        }

        $aladesign->assign("staff_all", $adminview->projects->GetStaffs());
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
                $adminview->projects->DeleteStaffs(array('project_id'=>$data_id));
                foreach($data_project_staffs as $staff_id) {
                    if ($staff_id == 0)
                        continue;
                    $pos = 1;
                    $adminview->projects->UpdateStaffs($data_id, $staff_id, $pos);
                    $pos++;
                }
            }

            if(is_array($data_project_options)) {
                $adminview->projects->DeleteOption(array('project_id'=>$data_id));
                foreach($data_project_options as $feature_id=>$value) {
                    $pos = 1;
                    $adminview->projects->UpdateOption($data_id, $feature_id, $value, $pos);
                    $pos++;
                }
            }

            if(is_array($data_project_new_options)) {
                foreach($data_project_new_options['names'] as $i=>$name) {
                    $value = trim($data_project_new_options['value'][$i]);
                    if(!empty($name) && !empty($value)) {
                        $feature = $adminview->projects->SelectFeature($name);
                        if(empty($feature["id_item"])){
                            $feature_id = $adminview->projects->AddFeature(array('title'=>trim($name)));
                        } else {
                            $feature_id = $feature["id_item"];
                        }
                        $adminview->projects->UpdateOption($data_id, $feature_id, $value, 1);
                    }
                }
            }

            $adminview->validate->Locate("/admin/?mod=projects&act=project&id=".$data_id);

        }

        if ($id) {
            $aladesign->assign("view", $adminview->projects->View(array('id_item'=>$id)));
            $aladesign->assign("options", $adminview->projects->GetOptions(array('project_id'=>$id)));
            $aladesign->assign("project_staffs", $adminview->projects->GetProjectStaffs(array('project_id'=>$id)));
        }

        $aladesign->assign("staffs", $adminview->projects->GetStaffs());
        $aladesign->assign("features", $adminview->projects->GetFeatures());
        $aladesign->assign("page", "templates/admin/projects/edit.tpl");
        $aladesign->display("templates/admin/main.tpl");

    break;

    case "staff":
        if (isset($id)) {
            $aladesign->assign("staff", $adminview->projects->GetStaffId($id));
        }
        $aladesign->display("templates/admin/projects/edit_staff.tpl");
    break;

    case "crop":
        $path = '/uploads/staffs/t/';
        $file = $_FILES['staff_avatar']['tmp_name'];
        $new_image_name = date('Ymd').uniqid().'.jpg';

        if(move_uploaded_file($file, A_PATH.$path.$new_image_name)){
            echo json_encode(['status'=>1, 'msg'=>'success11', 'name'=>$new_image_name]);
        }else{
            echo json_encode(['status'=>0, 'msg'=>'failed']);
        }
        exit();
/*
        if($adminview->validate->files('staff_avatar')['name'] != '') {
            $uploader = new Uploader\Uploader(A_PATH);
            $upload = $uploader
                ->with($adminview->validate->files('staff_avatar'))
                ->setFilename('UIMG'.date('Ymd').uniqid().'.jpg')
                ->setOverwrite(true)
                ->setCreateDir(true)
                ->setDirectory('/uploads/staffs/t');
            try {
                $upload->save();
                echo json_encode(['status'=>1, 'msg'=>'success', 'name'=>$upload->getDestination()]);
            } catch (Exception $e) {
                echo json_encode(['status'=>0, 'msg'=>'failed']);
            }
        }
*/


    break;



}
?>
