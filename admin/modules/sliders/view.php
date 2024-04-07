<?
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_SLIDERS'])) {
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
					$adminview->sliders->DeleteSlideId($id);
					echo json_encode(array('success'=>true, 'message'=>'Слайд удален!'));
					exit();
				}
				echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
				exit();
			}
		}
		
		$aladesign->assign("view_all", $adminview->sliders->ViewAll());
		$aladesign->assign("page", "templates/admin/sliders/view_all.tpl");
		$aladesign->display("templates/admin/main.tpl");

	break;

	case "slide":

		if($adminview->validate->method('post')) {
			$data_id = $adminview->validate->Post('id_item', 'integer');

			$data['title'] = $adminview->validate->Post('title', 'string');
			$data['url'] = $adminview->validate->Post('url');

			$old_videofile = $adminview->validate->Post('old_videofile');
			$old_img = $adminview->validate->Post('old_img');
			
			if ($adminview->validate->Post('visible')) {
				$data['visible'] = 1;
			} else {
				$data['visible'] = 0;
			}

			if($adminview->validate->files('image')['name'] != '') {
				$uploader = new Uploader\Uploader(A_PATH);
				$uploader->setPrefix(function () {
					return uniqid();
				})->setDirectory('/uploads/sliders/img');
				$imageUpload = $uploader->with($adminview->validate->files('image'));
				$imageUpload->save();
				$data['image'] = $imageUpload->getDestination();
				if ($old_img && !empty($data['image'])) {
					unlink(A_PATH.$old_img);
				}
			}

			if($adminview->validate->files('videofile')['name'] != '') {
				$uploader = new Uploader\Uploader(A_PATH);
				$uploader->setPrefix(function () {
					return uniqid();
				})->setDirectory('/uploads/sliders/video');
				$imageUpload = $uploader->with($adminview->validate->files('videofile'));
				$imageUpload->save();
				$data['videofile'] = $imageUpload->getDestination();
				if ($old_videofile && !empty($data['videofile'])) {
					unlink(A_PATH.$old_videofile);
				}
			}

			if ($data_id) {
				$adminview->sliders->UpdateSlideId($data_id, $data);
			} else {
				$data_id = $adminview->sliders->AddSlide($data);
			}
			$adminview->validate->Locate("/admin/?mod=sliders&act=slide&id=".$data_id);

		}

		if ($id) {
			$aladesign->assign("view", $adminview->sliders->View($id));
		}

		$aladesign->assign("page", "templates/admin/sliders/edit.tpl");
		$aladesign->display("templates/admin/main.tpl");
	break;

}
?>