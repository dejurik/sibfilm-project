<?php
/* Smarty version 5.0.2, created on 2024-04-24 20:30:48
  from 'file:templates/admin/ckeditor.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_662941c89c8050_49818173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65d8a9988dd5aae77e2a7a34ecfcc67c7289de8b' => 
    array (
      0 => 'templates/admin/ckeditor.tpl',
      1 => 1713979838,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_662941c89c8050_49818173 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\admin';
echo '<script'; ?>
 src="/templates/admin/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">

    document.addEventListener("DOMContentLoaded", function() {
        $('.editor').each(function () {
            CKEDITOR.replace($(this).prop('id'), {
                extraPlugins: 'image2,uploadimage',
                filebrowserBrowseUrl: '/templates/admin/ckeditor/ckfinder/ckfinder.html',
                filebrowserImageBrowseUrl: '/templates/admin/ckeditor/ckfinder/ckfinder.html?type=Images',
                filebrowserUploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                uploadUrl: '/templates/admin/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',
                removeDialogTabs: 'image:advanced;link:advanced',
                height: 350,
                removeButtons: 'PasteFromWord'
            });
        });


        //CKFinder.setupCKEditor( editor );
    });
<?php echo '</script'; ?>
>
<?php }
}
