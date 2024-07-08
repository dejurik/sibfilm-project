<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

if(!isset($access['VIEW_SHOP'])) {
    $adminview->validate->Locate("/admin/");
    die();
}

if($adminview->validate->method('get')) {
    $id = $adminview->validate->Get('id', 'integer');
    $category_id = $adminview->validate->Get('category_id', 'integer');
}

switch($act) {

    case "categories":

        if($adminview->validate->method('post')) {
            $id = $adminview->validate->Post('id');
            $action = $adminview->validate->Post('action', 'string');

            if ($action == 'save_positions') {
                $positions = json_decode($adminview->validate->Post('v'), true);
                $adminview->categories->UpdateCatPosition(0, json_decode($adminview->validate->Post('v'), true));
                $aladesign->assign("success", 'Данные обновлены');
            } elseif($action == 'delete') {
                if(!empty($id)) {
                    $adminview->categories->DeleteCategory($id);
                    echo json_encode(array('success'=>true, 'message'=>'Категория удалена!'));
                    exit();
                }
                echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
                exit();
            }

        }

        $aladesign->assign("categories", $adminview->categories->GetAllCategoriesTree());
        $aladesign->assign("page", "templates/admin/shop/categories.tpl");
        $aladesign->display("templates/admin/main.tpl");
        break;

    case "category":

        if($adminview->validate->method('post')) {

            $data_id = $adminview->validate->Post('id_item', 'integer');
            $data['title'] = $adminview->validate->Post('title');
            $data['meta_title'] = $adminview->validate->Post('meta_title');
            $data['meta_keywords'] = $adminview->validate->Post('meta_keywords');
            $data['meta_description'] = $adminview->validate->Post('meta_description');
            $data['parent_id'] = $adminview->validate->Post('parent_id');
            $data['url'] = $adminview->validate->Post('url');
            $data['text'] = $adminview->validate->Post('text');
            $data['visible'] = $adminview->validate->Post('visible') ? 1 : 0;

            if ($data_id) {
                $view = $adminview->categories->GetCatId(intval($data_id));
                if ($view['url'] != $data['url']) {
                    $data['url'] = $adminview->categories->GetCatUrl($data['url']);
                }
                $adminview->categories->UpdateCategory($data_id, $data);
            } else {
                $data['url'] = $adminview->categories->GetCatUrl($data['url']);
                $data_id = $adminview->categories->AddCategory($data);
            }

            $adminview->validate->Locate("/admin/?mod=shop&act=category&id=".$data_id);

        }

        if ($id) {
            $aladesign->assign("view", $adminview->categories->GetCatId(intval($id)));
        }

        $aladesign->assign("categories", $adminview->categories->GetAllCategoriesTree());
        $aladesign->assign("page", "templates/admin/shop/edit_category.tpl");
        $aladesign->display("templates/admin/main.tpl");

    break;

    case "products":

        if($adminview->validate->method('post')) {
            $id = $adminview->validate->Post('id');
            $action = $adminview->validate->Post('action', 'string');

            if ($action == 'delete') {
                if(!empty($id)) {
                    $content = $adminview->products->GetProduct(array('id_item'=>$id));
                    $adminview->features->DeleteOption(array('page_id'=>$id, 'module_id'=>'shop'));
                    $adminview->images->DeleteFile(array('page_id'=>$id, 'module_id'=>'shop'));
                    $adminview->files->DeleteFile(array('page_id'=>$id, 'module_id'=>'shop'));
                    $adminview->variants->DeleteVariant(array('product_id'=>$id));
                    $adminview->validate->DeleteFile($content['picture']);
                    $adminview->products->DeleteProduct($id);
                    echo json_encode(array('success'=>true, 'message'=>'Товар удален!'));
                    exit();
                }
                echo json_encode(array('success'=>false, 'message'=>'Что то пошло не так...'));
                exit();
            }
        }

        $filter = array();
        $filter['page'] = max(1, $adminview->validate->Get('page', 'integer'));
        $filter['limit'] = 10;

        // Если категория выбрана
        if($category_id && $category = $adminview->categories->GetAllCategoriesTree($category_id)) {
            $filter['category_id'] = implode(',', $category->children);
            $aladesign->assign("category_id", $category_id);
        }

        // Поиск
        $keyword = $adminview->validate->Get('keyword');
        if(!empty($keyword)) {
            $filter['keyword'] = $keyword;
            $aladesign->assign("keyword", $keyword);
        }

        // Отображение
        $count = $adminview->products->CountProducts($filter);

        if ($adminview->validate->Get('page') == 'all') {
            $filter['limit'] = $count['count'];
        }
        if($filter['limit']>0) {
            $pages_count = ceil($count['count']/$filter['limit']);
        } else {
            $pages_count = 0;
        }
        $filter['page'] = min($filter['page'], $pages_count);

        $aladesign->assign("products_count", $count['count']);
        $aladesign->assign("pages_count", $pages_count);
        $aladesign->assign("current_page", $filter['page']);

        // Все продукты
        $products = array();
        foreach($adminview->products->GetProducts($filter) as $p)
            $products[$p['id_item']] = $p;

        if(!empty($products)) {
            $products_ids = array_keys($products);
            foreach($products as &$product) {
                $product['variants'] = array();
                $product['images'] = array();
                $product['files'] = array();
                $product['features'] = array();
            }
        }

        $aladesign->assign("products", $products);
        $aladesign->assign("categories", $adminview->categories->GetAllCategoriesTree());
        $aladesign->assign("page", "templates/admin/shop/products.tpl");
        $aladesign->display("templates/admin/main.tpl");

    break;

    case "product":

        //dd($adminview->products->GetNextInsertId('ala_shop_products','sibfilm'));
        if($adminview->validate->method('post')) {

            $id = $adminview->validate->Post('id_item', 'integer');

            $data_product['title'] = $adminview->validate->Post('title');
            $data_product['category_id'] = $adminview->validate->Post('category_id', 'integer');
            $data_product['type_id'] = $adminview->validate->Post('type_id');
            $data_product['price'] = $adminview->validate->Post('price');
            $data_product['old_price'] = $adminview->validate->Post('old_price');
            $data_product['meta_title'] = $adminview->validate->Post('meta_title');
            $data_product['meta_keywords'] = $adminview->validate->Post('meta_keywords');
            $data_product['meta_description'] = $adminview->validate->Post('meta_description');
            $data_product['annotation'] = $adminview->validate->Post('annotation');
            $data_product['text'] = $adminview->validate->Post('text');
            $data_product['visible'] = $adminview->validate->Post('visible') ? 1 : 0;
            $data_product['comments'] = $adminview->validate->Post('comments') ? 1 : 0;
            $data_product['time_update'] = date('Y-m-d H:i:s');

            $data_product_variants = $adminview->validate->Post('variants');
            $data_product_new_variants = $adminview->validate->Post('new_variants');
            $data_product_current_variants = $adminview->validate->Post('current_variants');
            $data_product_current_images = $adminview->validate->Post('current_images') ? $adminview->validate->Post('current_images') : array();
            $data_product_images = $adminview->validate->Post('images') ? $adminview->validate->Post('images') : array();
            $data_product_current_files = $adminview->validate->Post('current_files') ? $adminview->validate->Post('current_files') : array();
            $data_product_files = $adminview->validate->Post('files') ? $adminview->validate->Post('files') : array();

            $data_product_options = $adminview->validate->Post('options');
            $data_product_new_options = $adminview->validate->Post('new_options');

            $old_picture = $adminview->validate->Post('old_picture');

            // Не допустить пустое название товара.
            if(empty( $data_product['title'])) {
                $aladesign->assign("status", array('error'=>true, 'msg'=>'Поле заголовок не должно быть пустым'));
            } else {

                if($adminview->validate->files('picture')['name'] != '') {
                    $uploader = new Uploader\Uploader(A_PATH);
                    $uploader->setPrefix(function () {
                        return uniqid();
                    })->setDirectory('/uploads/shop/products');
                    $imageUpload = $uploader->with($adminview->validate->files('picture'));
                    $imageUpload->save();
                    $data_product['picture'] = $imageUpload->getDestination();
                    if ($old_picture && !empty($old_picture) && !empty($data_product['picture'])) {
                        unlink(A_PATH.$old_picture);
                    }
                }

                if ($id) {
                    $adminview->products->UpdateProduct($id, $data_product);
                    $aladesign->assign("status", array('error'=>false, 'msg'=>'Данные обновлены'));
                } else {
                    $data_product['created'] = date('Y-m-d H:i:s');
                    $id = $adminview->products->AddProduct($data_product);
                    $aladesign->assign("status", array('error'=>false, 'msg'=>'Данные добавлены'));
                }

                if ($id) {
                    $variants = array();
                    if(is_array($data_product_variants)) {
                        foreach($data_product_variants as $key=>$Vvalue) {
                            foreach ($Vvalue as $k => $v) {
                                if ($key == 'images' or $key == 'files') {
                                    $variants[$k][$key] = json_encode($v);
                                } else {
                                    $variants[$data_product_variants['id_item'][$k]][$key] = $v;
                                }
                            }
                        }
                    }

                    if(is_array($data_product_new_variants)) {
                        foreach($data_product_new_variants as $key=>$NVvalue) {
                            foreach ($NVvalue as $k => $v) {
                                if (empty($data_product_new_variants['name'][$k]))
                                    continue;
                                if ($key == 'images' or $key == 'files') {
                                    $v = json_encode($v);
                                }
                                $new_variants[$k][$key] = $v;
                            }
                        }

                        if(isset($new_variants)) {
                            foreach ($new_variants as $key => $value) {
                                array_push($variants, $new_variants[$key]);
                            }
                        }
                    }

                    if(isset($variants)) {
                        foreach ($variants as $key => $variant) {
                            $variant['product_id'] = $id;
                            if (empty($variant['images']) OR !isset($variant['images'])){
                                $variant['images'] = json_encode(array());
                            }
                            if (empty($variant['files'])  OR !isset($variant['files'])){
                                $variant['files'] = json_encode(array());
                            }
                            if (!empty($variant['id_item'])) {
                                $adminview->variants->UpdateVariant($variant['id_item'], array_slice($variant, 1));
                            } else {
                                $adminview->variants->AddVariant($variant);
                            }
                        }
                    }

                    if(is_array($data_product_current_variants)) {
                        foreach($data_product_current_variants as $current_variant) {
                            if(is_array($data_product_variants)) {
                                if(!in_array($current_variant, $data_product_variants['id_item']))
                                    $adminview->variants->DeleteVariant(array('id_item'=>$current_variant));
                            } else {
                                $adminview->variants->DeleteVariant(array('id_item'=>$current_variant));
                            }
                        }
                    }

                    if(is_array($data_product_current_images)) {
                        foreach($data_product_current_images as $current_image) {
                            if(!in_array($current_image, $data_product_images))
                                $adminview->images->DeleteFile(array('id_item'=>$current_image));
                        }
                    }
                    if(is_array($data_product_current_files)) {
                        foreach($data_product_current_files as $current_file) {
                            if(!in_array($current_file, $data_product_files))
                                $adminview->files->DeleteFile(array('id_item'=>$current_file));
                        }
                    }

                    if(is_array($data_product_options)) {
                        $adminview->features->DeleteOption(array('page_id'=>$id, 'module_id'=>'shop'));
                        foreach($data_product_options as $feature_id=>$value) {
                            $pos = 1;
                            $adminview->features->UpdateOption($id, $feature_id, $value, 'shop');
                            $pos++;
                        }
                    }

                    if(is_array($data_product_new_options)) {
                        foreach($data_product_new_options['names'] as $i=>$name) {
                            $value = trim($data_product_new_options['value'][$i]);
                            if(!empty($name) && !empty($value)) {
                                $feature = $adminview->features->GetFeature(array('title'=>trim($name), 'module_id'=>'shop'));
                                if(empty($feature["id_item"])){
                                    $feature_id = $adminview->features->AddFeature(array('title'=>trim($name),'module_id'=>'shop'));
                                } else {
                                    $feature_id = $feature["id_item"];
                                }
                                $adminview->features->UpdateOption($id, $feature_id, $value, 'shop');
                            }
                        }
                    }
                }
            }
        }



        if ($id) {
            $aladesign->assign("view", $adminview->products->GetProduct(array('id_item'=>$id)));
            $aladesign->assign("files", $adminview->files->GetAllFiles(array('page_id'=>$id, 'module_id'=>'shop')));
            $aladesign->assign("images", $adminview->images->GetAllImages(array('page_id'=>$id, 'module_id'=>'shop')));
            $aladesign->assign("options", $adminview->features->GetOptions(array('page_id'=>$id,'module_id'=>'shop')));
            $aladesign->assign("variants", $adminview->variants->GetAllVariants(array('product_id'=>$id)));
        }

        $aladesign->assign("categories", $adminview->categories->GetAllCategoriesTree());
        $aladesign->assign("features", $adminview->features->GetFeatures(array('module_id'=>'shop')));
        $aladesign->assign("page", "templates/admin/shop/edit_product.tpl");
        $aladesign->display("templates/admin/main.tpl");
        break;

    case "uploads_files":

        $fileName2 = $_FILES['file']['name'];
        $targetFile = basename($fileName2);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : $_FILES["file"]["name"];

        if ($fileType && $adminview->config->isFileTypeAllowed($fileType)) {
            $table = 'images';
            $filePath = '/uploads/shop/images/' . $fileName;
        } else {
            $table = 'files';
            $filePath = '/uploads/shop/files/' . $fileName;
        }

        $result = $adminview->validate->multiplyFileUpload($filePath);

        if(isset($result) && isset($_POST['page_id']) && isset($_POST['module_id'])) {
            $adminview->$table->AddFile(array('filename'=>$result, 'page_id'=>$_POST['page_id'], 'module_id'=>$_POST['module_id'], 'description'=>$_FILES["file"]["name"]));
        }

        break;

}
?>
