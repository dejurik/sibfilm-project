<?php
/* Smarty version 5.0.2, created on 2024-07-03 19:02:04
  from 'file:default/index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_668575fc4d98c2_00997048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1e468dd4332a435225844ff92608196361446ef' => 
    array (
      0 => 'default/index.tpl',
      1 => 1717334427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default/sliders/index_sliders.tpl' => 1,
  ),
))) {
function content_668575fc4d98c2_00997048 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default';
$_smarty_tpl->renderSubTemplate("file:default/sliders/index_sliders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sliders'=>$_smarty_tpl->getValue('sliders')), (int) 0, $_smarty_current_dir);
?>

<div class="sm:px-16 px-6 flex justify-center items-center">
    <div class="xl:max-w-[1280px] w-full">



        <!-- контент	-->
        <div class="flex flex-row w-full block w-auto bg-[#F3F3F3]/20 mb-8">

            <div class="basis-2/3 mr-4">
                <a href="./projects.html" class="">
                    <div class="bg-[#34445d] h-80 rounded-lg mb-4 relative block bg-[url('/templates/app/default/images/projects.jpg')] bg-right bg-no-repeat max-md:bg-none">
                        <div class="absolute bottom-7 left-7 *:text-white">
                            <div class="text-2xl font-bold underline max-md:text-base">Проекты</div>
                            <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                        </div>
                    </div>
                </a>

                <a href="#" class="">
                    <div class="bg-[#f3f3f1] h-56 rounded-lg relative block bg-[url('/templates/app/default/images/partners.jpg')] bg-right bg-no-repeat max-md:bg-none">
                        <div class="absolute bottom-7 left-7 *:text-[#7B8384]">
                            <div class="text-2xl font-bold underline max-md:text-base">Партнеры</div>
                            <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="basis-1/3">
                <a href="./services.html" class="">
                    <div class="bg-[#f3f3f1] h-56 rounded-lg mb-4 relative block bg-[url('/templates/app/default/images/services.jpg')] bg-right bg-no-repeat max-md:bg-none ">
                        <div class="absolute bottom-7 left-7 *:text-[#7B8384]">
                            <div class="text-2xl font-bold underline max-md:text-base">Услуги</div>
                            <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                        </div>
                    </div>
                </a>

                <a href="#" class="">
                    <div class="bg-[#34445d] h-80 rounded-lg relative block bg-[url('/templates/app/default/images/presents.jpg')] bg-right bg-no-repeat max-md:bg-none">
                        <div class="absolute bottom-7 left-7 *:text-white">
                            <div class="text-2xl font-bold underline max-md:text-base">Награды</div>
                            <div class="text-sm hidden lg:block">Описание данного раздела в 3 словах</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>


<!--
<div class="sm:px-16 px-6 flex justify-center items-center bg-[#F3F3F3]">
    <div class="xl:max-w-[1280px] w-full my-4">

        <div class="w-full block flex flex-row justify-between items-end py-1.5 *:text-[#34445C]">
            <div class="text-3xl">Кинозал</div>
            <div class="text-sm italic underline"><a href="">Смотреть всё</a></div>
        </div>


        <div class="flex flex-wrap -mx-4">


            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/5 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative h-80 overflow-hidden rounded-lg">
                        <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/upload/information_system_1/4/item_4766/small_item_4766.jpg" alt="">
                    </div>
                    <div class="py-3 px-4 border-b *:text-[#34445C]">
                        <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                        <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                    </div>
                    <div class="p-4 flex flex-row justify-between items-center text-sm text-gray-600">
                        <div class="flex">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <span class="ml-2 text-xs text-[#34445C]">4/34</span>
                        </div>
                        <div class="flex">
                            <img src="./src/images/eye.svg" class="w-3.5"/>
                            <span class="ml-2 text-xs text-[#34445C]">2434</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/5 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative h-80 overflow-hidden rounded-lg">
                        <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/upload/information_system_1/1/item_12612/small_item_12612.jpg" alt="">
                    </div>
                    <div class="py-3 px-4 border-b *:text-[#34445C]">
                        <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                        <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                    </div>
                    <div class="p-4 flex flex-row justify-between items-center text-sm text-gray-600">
                        <div class="flex">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <span class="ml-2 text-xs text-[#34445C]">4/34</span>
                        </div>
                        <div class="flex">
                            <img src="./src/images/eye.svg" class="w-3.5"/>
                            <span class="ml-2 text-xs text-[#34445C]">2434</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/5 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative h-80 overflow-hidden rounded-lg">
                        <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/upload/information_system_1/2/item_21298/small_item_21298.webp" alt="">
                    </div>
                    <div class="py-3 px-4 border-b *:text-[#34445C]">
                        <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                        <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                    </div>
                    <div class="p-4 flex flex-row justify-between items-center text-sm text-gray-600">
                        <div class="flex">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <span class="ml-2 text-xs text-[#34445C]">4/34</span>
                        </div>
                        <div class="flex">
                            <img src="./src/images/eye.svg" class="w-3.5"/>
                            <span class="ml-2 text-xs text-[#34445C]">2434</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/5 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative h-80 overflow-hidden rounded-lg">
                        <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/upload/information_system_1/4/item_4763/small_item_4763.jpg" alt="">
                    </div>
                    <div class="py-3 px-4 border-b *:text-[#34445C]">
                        <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                        <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                    </div>
                    <div class="p-4 flex flex-row justify-between items-center text-sm text-gray-600">
                        <div class="flex">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <span class="ml-2 text-xs text-[#34445C]">4/34</span>
                        </div>
                        <div class="flex">
                            <img src="./src/images/eye.svg" class="w-3.5"/>
                            <span class="ml-2 text-xs text-[#34445C]">2434</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/5 p-4">
                <a href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                    <div class="relative h-80 overflow-hidden rounded-lg">
                        <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/upload/information_system_1/2/item_21303/small_item_21303.webp" alt="">
                    </div>
                    <div class="py-3 px-4 border-b *:text-[#34445C]">
                        <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                        <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                    </div>
                    <div class="p-4 flex flex-row justify-between items-center text-sm text-gray-600">
                        <div class="flex">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg>
                            <span class="ml-2 text-xs text-[#34445C]">4/34</span>
                        </div>
                        <div class="flex">
                            <img src="./src/images/eye.svg" class="w-3.5"/>
                            <span class="ml-2 text-xs text-[#34445C]">2434</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>



    </div>
</div>
-->


<!--
<div class="sm:px-16 px-6 flex justify-center items-center">
    <div class="xl:max-w-[1280px] w-full my-4">



                <div class="w-full block flex flex-row justify-between items-end py-1.5 *:text-[#34445C]">
                    <div class="text-3xl">Магазин | Прокат</div>
                    <div class="text-sm italic underline"><a href="">Смотреть всё</a></div>
                </div>


                <div class="flex flex-wrap -mx-4">


                    <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <div href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative h-32 overflow-hidden rounded-lg m-2">
                                <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/_local/gorkyfilm/content/kinokampus.jpg" alt="">
                            </div>
                            <div class="pb-3 px-4 border-b text-center *:text-[#34445C]">
                                <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                                <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                            </div>
                            <div class="p-4 flex flex-row justify-between items-center text-gray-600">
                                <div class="w-1/2 mx-1">
                                    <button href="#" class="w-full grow text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Цена: <span class="font-bold text-sm">500</span> р</button>
                                </div>
                                <div class="w-1/2 mx-1">
                                    <a href="#" class="block w-full px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0 font-bold text-sm text-center">Демо</a>
                                </div>
                            </div>
                            <div class="pb-4 px-4 mx-1">
                                <button href="#" class="w-full text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Добавить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <div href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative h-32 overflow-hidden rounded-lg m-2">
                                <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/_local/gorkyfilm/content/muzey.jpg" alt="">
                            </div>
                            <div class="pb-3 px-4 border-b text-center *:text-[#34445C]">
                                <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                                <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                            </div>
                            <div class="p-4 flex flex-row justify-between items-center text-gray-600">
                                <div class="w-1/2 mx-1">
                                    <button href="#" class="w-full grow text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Цена: <span class="font-bold text-sm">500</span> р</button>
                                </div>
                                <div class="w-1/2 mx-1">
                                    <a href="#" class="block w-full px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0 font-bold text-sm text-center">Демо</a>
                                </div>
                            </div>
                            <div class="pb-4 px-4 mx-1">
                                <button href="#" class="w-full text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Добавить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <div href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative h-32 overflow-hidden rounded-lg m-2">
                                <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/_local/gorkyfilm/content/rent4.png" alt="">
                            </div>
                            <div class="pb-3 px-4 border-b text-center *:text-[#34445C]">
                                <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                                <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                            </div>
                            <div class="p-4 flex flex-row justify-between items-center text-gray-600">
                                <div class="w-1/2 mx-1">
                                    <button href="#" class="w-full grow text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Цена: <span class="font-bold text-sm">500</span> р</button>
                                </div>
                                <div class="w-1/2 mx-1">
                                    <a href="#" class="block w-full px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0 font-bold text-sm text-center">Демо</a>
                                </div>
                            </div>
                            <div class="pb-4 px-4 mx-1">
                                <button href="#" class="w-full text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Добавить в корзину</button>
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                        <div href="" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                            <div class="relative h-32 overflow-hidden rounded-lg m-2">
                                <img class="absolute inset-0 h-full w-full object-cover" src="https://gorkyfilm.ru/_local/gorkyfilm/content/rent3.png" alt="">
                            </div>
                            <div class="pb-3 px-4 border-b text-center *:text-[#34445C]">
                                <h2 class="mb-2 text-sm font-bold">Название этого фильма</h2>
                                <p class="text-xs">Краткое описание фильма, анонс мероприятия или просто какой то текст</p>
                            </div>
                            <div class="p-4 flex flex-row justify-between items-center text-gray-600">
                                <div class="w-1/2 mx-1">
                                    <button href="#" class="w-full grow text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Цена: <span class="font-bold text-sm">500</span> р</button>
                                </div>
                                <div class="w-1/2 mx-1">
                                    <a href="#" class="block w-full px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0 font-bold text-sm text-center">Демо</a>
                                </div>
                            </div>
                            <div class="pb-4 px-4 mx-1">
                                <button href="#" class="w-full text-xs px-4 py-2 border rounded-full text-[#34445C] border-[#34445C] hover:border-transparent hover:text-white hover:bg-[#34445C] mt-4 lg:mt-0">Добавить в корзину</button>
                            </div>
                        </div>
                    </div>

                </div>




    </div>
</div>
--><?php }
}
