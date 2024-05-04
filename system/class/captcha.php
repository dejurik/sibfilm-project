<?php
/*============================================
 Alatis Studio Content Management System
--------------------------------------------
 Copyright (c) 2024 Korshunov Aleksey
--------------------------------------------
 Данный код защищен авторскими правами
============================================*/

session_start();

$count=6;	/* количество символов */
$width=94; /* ширина картинки */
$height=42; /* высота картинки */


$random_num = md5(random_bytes(64));
$captcha_code = substr($random_num, 0, $count);

$_SESSION['CAPTCHA_CODE'] = $captcha_code;

$layer = imagecreatetruecolor($width, $height);
$captcha_bg = imagecolorallocate($layer, 52, 68, 92);
$captcha_text_color = imagecolorallocate($layer, 190, 190, 190);
imagefill($layer, 0, 0, $captcha_bg);
imagestring($layer, 12, 20, 13, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($layer);
imagedestroy($layer);



?>