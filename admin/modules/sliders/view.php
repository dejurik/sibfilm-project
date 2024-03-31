<?
/*============================================
 Pr&Web Studio Content Management System 
--------------------------------------------
 Copyright (c) 2015 Korshunov Aleksey
--------------------------------------------
 http://www.priweb.ru
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/


if(!isset($access['on']['VIEW_SLIDERS'])) {
	$Validate->Locate("/admin/");
	die();
}

if($adminview->validate->method('get')) {
	$id = $adminview->validate->to_substr($adminview->validate->Get('id', 'integer'), 5);
}

switch($act) {

	case "view_all":
		
		if($adminview->validate->method('post')) {
			$action = $adminview->validate->Post('action');
			
			if ($action == 'add_cat') {
				$data['title'] = $adminview->validate->Post('title');
				$id_item = $adminview->sliders->AddCatSliders($data);
				$adminview->validate->Locate("/admin/?mod=sliders&act=view_all");
			}
			if ($action == 'edit_cat') {
				$id_item = $adminview->validate->Post('id_item', 'integer');
				$data['title'] = $adminview->validate->Post('title');
				$id_item = $adminview->sliders->UpdateCatSliders($id_item, $data);
				$adminview->validate->Locate("/admin/?mod=sliders&act=view_all");
			}
		}

		$categories = $adminview->sliders->ViewAllCat();

		$allcategories = array();
		if(!empty($categories)) {
			foreach($categories as $n) {
				$allcategories[$n['id_item']] = $n;
			}
		}		


		if(!empty($allcategories)) {
			$allcategories_ids = array_keys($allcategories);
			$allcategories_ids = implode(', ', $allcategories_ids);
			foreach($allcategories as &$photos) {
				$photos['images'] = array();
			}
			$images = $adminview->sliders->ViewPhotoCatImages($allcategories_ids);
			if(!empty($images)) {
				foreach($images as $image) {
					$allcategories[$image['cat_id']]['images'][$image['id_item']] = $image;
				}
			}
		}

		$aladesign->assign("categories", $allcategories);
		$aladesign->assign("page", "admin/templates/default/sliders/view_all.tpl");
		$aladesign->display("admin/templates/default/main.tpl");
		
	break;

	case "editcat":
		if(isset($id)) {
			$view = $adminview->sliders->ViewCat($id);
			
			//dd($view, true);
			$aladesign->assign("view", $view);				
			$aladesign->display("admin/templates/default/sliders/edit_cat.tpl");	
		}
	break;	
	
	case "addcat":
		$aladesign->display("admin/templates/default/sliders/add_cat.tpl");
	break;		
	
    case "delcat":	
		if(isset($id)) {
			$images = $adminview->sliders->ViewPhotoCatImages($id);
			if (!empty($images)) {
				foreach($images as $image) {
					$adminview->sliders->DeletePhoto($image['id_item']);
				}			
			}
			$adminview->sliders->DeleteCat($id);
			$adminview->validate->Locate("/admin/?mod=sliders&act=view_all");
		}
    break;	
	
	case "view_cat":
		if(isset($id)) {
			$view = $adminview->sliders->ViewCat($id);
			$view_all_images = $adminview->sliders->ViewPhotoCatImages($id);
			$aladesign->assign("view", $view);
			$aladesign->assign("view_all_images", $view_all_images);
			$aladesign->assign("cat_id", $id);
			$aladesign->assign("page", "admin/templates/default/sliders/view_cat_one.tpl");
			$aladesign->display("admin/templates/default/main.tpl");
		}
	break;
	
	case "addphoto":
	
		if($adminview->validate->method('post')) {
			if($adminview->validate->Post('title')) {	
				
				$data['title'] = $adminview->validate->Post('title', 'string');
				$data['cat_id'] = $adminview->validate->Post('category', 'integer');
				$data['text'] = $adminview->validate->Post('text');
				$data['url'] = $adminview->validate->Post('url');
				$data['image'] = $adminview->validate->Post('upload_img');
				if ($adminview->validate->Post('visible')) {
					$data['visible'] = 1;
				} else {
					$data['visible'] = 0;
				}

				$adminview->sliders->AddPhoto($data);
				$adminview->validate->Locate("/admin/?mod=sliders&act=view_cat&id=".$data['cat_id']);
			}
		}
		
		if(isset($id)) {
			$view_cat = $adminview->sliders->ViewAllCat();
			$aladesign->assign("view_cat", $view_cat);
			$aladesign->assign("cat_id", $id);
			$aladesign->assign("page", "admin/templates/default/sliders/add_photo.tpl");
			$aladesign->display("admin/templates/default/main.tpl");			
		}

	break;	

	case "editphoto":	
		
		if($adminview->validate->method('post')) {

			if($adminview->validate->Post('title')) {	

				$id_item = $adminview->validate->Post('id_item', 'integer');
				$data['title'] = $adminview->validate->Post('title');
				$data['cat_id'] = $adminview->validate->Post('category', 'integer');
				$data['text'] = $adminview->validate->Post('text');
				$data['url'] = $adminview->validate->Post('url');
				if($adminview->validate->Post('upload_img')){
					$data['image'] = $adminview->validate->Post('upload_img');
				}
				$data['position'] = $adminview->validate->Post('position');
				if ($adminview->validate->Post('visible')) {
					$data['visible'] = 1;
				} else {
					$data['visible'] = 0;
				}			
			
				$adminview->sliders->EditPhoto($id_item, $data);
				$adminview->validate->Locate("/admin/?mod=sliders&act=view_cat&id=".$data['cat_id']);
			}
		}		
		
		if(isset($id)) {
			$view = $adminview->sliders->ViewOnePhoto($id);
			$view_cat = $adminview->sliders->ViewAllCat();
			$aladesign->assign("view_cat", $view_cat);
			$aladesign->assign("view", $view);			
			$aladesign->assign("page", "admin/templates/default/sliders/edit_photo.tpl");
			$aladesign->display("admin/templates/default/main.tpl");
		}	
	break;	
	
	
	
	case "uploadfiles":	
		
		if ($adminview->validate->Post('action')) {
			$actions = $adminview->validate->Post('action');

			switch($actions) {
				case "upload":
					if($adminview->validate->files('file')) {
						$images = $adminview->validate->files('file');
						$files = $images['tmp_name'];
						$filename = $images['name'];
						$size = $images['size'];
						$type = strtolower(substr($filename, 1 + strrpos($filename, ".")));
						if(in_array($type, $upload_image)) {
							$img = 'prs_'.time().'.'.$type;
							move_uploaded_file($files, "uploads/sliders/t/".$img);
							list($img_width, $img_height) = getimagesize('uploads/sliders/t/'.$img);
							$file['name'] = $img;
							$file['size'] = $size;
							$file['type'] = $type;
							$file['url'] = $config['site_url'].'/uploads/sliders/t/'.$img;
							$file['width'] = $img_width;
							$file['height'] = $img_height;
							$data = array();
							$success = true;
							echo json_encode(array('success' => $success, 'data' => $file));
						}
					}
				break;
				case "crop":
					if($adminview->validate->Post('image')) {
						$file['urlf'] = basename($adminview->validate->Post('image'));	
						if ($adminview->validate->Post('coords')) {
							list($crop['src_x'], $crop['src_y'], $x2, $y2, $crop['src_w'], $crop['src_h']) = array_values($adminview->validate->Post('coords'));
							$adminview->images->Crop('uploads/sliders/t/'.$file['urlf'], 'uploads/sliders/'.$file['urlf'], array($crop['src_x'], $crop['src_y'], $x2, $y2));
							$adminview->images->DelAll('uploads/sliders/t/');
							$file['url'] = $config['site_url'].'/uploads/sliders/'.$file['urlf'];
							$data = array();
							$success = true;
							echo json_encode(array('success' => $success, 'data' => $file));
						}	
					}
				break;
			}
		}

	break;	
	
	case "delphoto":
		if(isset($id)) {

			$adminview->sliders->DeletePhoto($id);
			$adminview->validate->Locate("/admin/?mod=sliders&act=view_all");
		}
	break;
	
	case "update_positions":
		
		$ids = $adminview->validate->Post('list');
		if (!empty($ids)) {
			$i = 1;
			foreach($ids as $id) {
				$data['position'] = $i;
				$adminview->sliders->EditPhoto($id, $data);
				$i++;
			}			
		}
	break;
}
?>