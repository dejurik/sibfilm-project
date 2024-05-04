<?php
/* Smarty version 5.0.2, created on 2024-05-02 16:57:05
  from 'file:./templates/app/default/feedback/send_message.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_66339bb1768d07_31909780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '273a8bda94a8fb5e83b524635d31795b559fde2d' => 
    array (
      0 => './templates/app/default/feedback/send_message.tpl',
      1 => 1712778526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66339bb1768d07_31909780 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default\\feedback';
$_smarty_tpl->assign('subject', 'Сообщение с сайта', false, 8);?>
<html>
<body>
<p>С сайта <?php echo $_smarty_tpl->getValue('config')['company_name'];?>
 <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%d.%m.%Y %H:%M");?>
 было отправлено сообщение.</p>
<p>Имя: <?php echo $_smarty_tpl->getValue('mail')['name'];?>
</p>
<p>Email: <?php echo $_smarty_tpl->getValue('mail')['email'];?>
</p>
<p>Телефон: <?php echo $_smarty_tpl->getValue('mail')['phone'];?>
</p>
<p><?php echo $_smarty_tpl->getValue('mail')['message'];?>
</p>
</body>
</html>
<?php }
}
