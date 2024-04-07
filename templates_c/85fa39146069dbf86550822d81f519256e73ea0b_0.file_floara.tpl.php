<?php
/* Smarty version 5.0.2, created on 2024-04-07 11:56:02
  from 'file:templates/admin/floara/floara.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66125fa204e468_60271809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85fa39146069dbf86550822d81f519256e73ea0b' => 
    array (
      0 => 'templates/admin/floara/floara.tpl',
      1 => 1712480157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66125fa204e468_60271809 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin\\floara';
?><link rel="stylesheet" href="/templates/admin/floara/css/froala_editor.css">
<link rel="stylesheet" href="/templates/admin/floara/css/froala_style.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/code_view.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/draggable.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/colors.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/emoticons.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/image_manager.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/image.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/line_breaker.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/table.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/char_counter.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/video.css">
<link rel="stylesheet" href="/templates/admin/floara/css/codemirror.min.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/fullscreen.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/file.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/quick_insert.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/help.css">
<link rel="stylesheet" href="/templates/admin/floara/css/third_party/spell_checker.css">
<link rel="stylesheet" href="/templates/admin/floara/css/plugins/special_characters.css">


<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/froala_editor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/align.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/char_counter.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/code_beautifier.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/code_view.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/colors.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/draggable.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/emoticons.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/entities.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/file.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/font_size.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/font_family.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/fullscreen.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/image.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/image_manager.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/line_breaker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/inline_style.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/link.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/lists.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/paragraph_format.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/paragraph_style.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/quick_insert.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/quote.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/table.min.js"><?php echo '</script'; ?>
>
<!--
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/save.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/print.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/third_party/spell_checker.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/help.min.js"><?php echo '</script'; ?>
>
-->
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/url.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/video.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/special_characters.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/templates/admin/floara/js/plugins/word_paste.min.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    (function () {
        new FroalaEditor("#edit", {
            key: "1C%kZV[IX)_SL}UJHAEFZMUJOYGYQE[\\ZJ]RAe(+%$==",
            attribution: false,
            language: 'ru'
        })
    })()
<?php echo '</script'; ?>
>
<?php }
}
