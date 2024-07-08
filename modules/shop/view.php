<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/


$id = $index->validate->Get('id', 'integer');
$category_url = $index->validate->Get('url', 'string');
$keyword = $index->validate->Get('keyword', 'string');
$current_page = $index->validate->Get('page');
$current_page = max(1, $current_page);

switch($act) {

    case "index":

        //$aladesign->assign("shop", $index->users->View(array('id_item'=>$_SESSION['user_id'])));
        $aladesign->assign("page", "file:[main]/".$index->template."/shop/index.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");
        break;

    case "view_category":
        $filter = array();
        $filter['visible'] = 1;

        //--- Если категория выбрана, смотрим ее
        if(isset($category_url) && !empty($category_url)){
            $category = (array)$index->categories->GetCatWithChildren((string)$category_url);
            if (empty($category) || (!$category['visible']))
                return false;
            $aladesign->assign("category", $category);
            $filter['category_id'] = implode(',', $category['children']);
        }

        // Если задано ключевое слово
        if (!empty($keyword)) {
            $aladesign->assign("keyword", $keyword);
            $filter['keyword'] = $keyword;
        }

        //--- Постраничная навигация
        $items_per_page = 8;

        // Если не задана, то равна 1
        $aladesign->assign("current_page_num", $current_page);

        // Вычисляем количество страниц
        $products_count = $index->products->CountProducts($filter);

        // Показать все страницы сразу
        if (isset($_GET['page']) && $_GET['page'] == 'all') {
            $items_per_page = $products_count['count'];
        }
        $pages_num = ceil($products_count['count']/$items_per_page);
        $aladesign->assign("total_pages_num", $pages_num);
        $aladesign->assign("total_products_num", $products_count['count']);
        $filter['page'] = $current_page;
        $filter['limit'] = $items_per_page;



        $aladesign->assign("products", $index->products->GetProducts($filter));
        //$aladesign->assign('categories', $index->categories->GetAllCategory());

        $aladesign->assign("page", "file:[main]/".$index->template."/shop/view_all.tpl");
        $aladesign->display("file:[main]/".$index->template."/main.tpl");

        break;

    case "product":

        // Выборка информации по товару
        $product = $index->products->GetProduct(array('id_item'=>$id));

        if (!$product){
            $index->validate->Locate("/404");
        }

        //dd($index->variants->GetAllVariants(array('product_id'=>$id)));
        //dd($index->files->GetAllFiles(array('page_id'=>$id, 'module_id'=>'shop')));

        $aladesign->assign("product", $product);
        $aladesign->assign("category", $index->categories->GetCatId((int)$product['category_id']));
        $aladesign->assign("variants", $index->variants->GetAllVariants(array('product_id'=>$id)));
        $aladesign->assign("files", $index->files->GetAllFiles(array('page_id'=>$id, 'module_id'=>'shop')));
        $aladesign->assign("images", $index->images->GetAllImages(array('page_id'=>$id, 'module_id'=>'shop')));
        $aladesign->assign("options", $index->features->GetAllOptionsInPage(array('page_id'=>$id,'module_id'=>'shop')));

        if ($product['type_id'] == 'video'){
            $aladesign->assign("page", "file:[main]/".$index->template."/shop/view_video.tpl");
        } else if($product['type_id'] == 'audio') {
            $aladesign->assign("page", "file:[main]/".$index->template."/shop/view_audio.tpl");
        } else {
            $aladesign->assign("page", "file:[main]/".$index->template."/shop/view_product.tpl");
        }
        /*if(!isset($_SESSION['user_id'])) {
            $index->validate->Locate("/users/login/");
            exit();
        }*/
        //https://codepen.io/markhillard/pen/jOOKxM
//        $aladesign->assign("playlist",
//            array(
//                '01' => array(
//                    'track' => '1',
//                    'name' => 'All This Is - Joe L.s Studio4',
//                    'duration' => '1:40',
//                    'file' => 'https://atuin.ru/demo/plyr/GreekDance.mp3',
//                ),
//                '02' => array(
//                    'track' => '2',
//                    'name' => 'All This Is - Joe L.s Studio3',
//                    'duration' => '1:41',
//                    'file' => 'https://atuin.ru/demo/plyr/GetAMoveOn.mp3',
//                ),
//                '03' => array(
//                    'track' => '3',
//                    'name' => 'All This Is - Joe L.s Studio2',
//                    'duration' => '1:42',
//                    'file' => 'https://atuin.ru/demo/plyr/GreekDance.mp3',
//                ),
//                '04' => array(
//                    'track' => '4',
//                    'name' => 'All This Is - Joe L.s Studio1',
//                    'duration' => '2:43',
//                    'file' => 'https://atuin.ru/demo/plyr/VanishingHorizon.mp3',
//                )
//            )
//        );

        $aladesign->display("file:[main]/".$index->template."/main.tpl");
        break;



}

?>