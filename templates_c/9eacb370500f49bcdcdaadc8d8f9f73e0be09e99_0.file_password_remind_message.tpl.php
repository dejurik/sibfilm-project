<?php
/* Smarty version 5.0.2, created on 2024-06-06 17:43:19
  from 'file:./templates/app/default/users/password_remind_message.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6661cb078755f4_17960496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9eacb370500f49bcdcdaadc8d8f9f73e0be09e99' => 
    array (
      0 => './templates/app/default/users/password_remind_message.tpl',
      1 => 1717683756,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6661cb078755f4_17960496 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\app\\default\\users';
$_smarty_tpl->assign('subject', 'Восстановление доступа к личному кабинету', false, 8);?>
<html>
<body>
<p><?php echo htmlspecialchars((string)$_smarty_tpl->getValue('user')['name'], ENT_QUOTES, 'UTF-8', true);?>
, на сайте <a href='<?php echo $_smarty_tpl->getValue('config')['site_url'];?>
'><?php echo $_smarty_tpl->getValue('config')['company_name'];?>
</a> был сделан запрос на восстановление пароля.</p>
<p>Вы можете изменить пароль, перейдя по следующей ссылке:</p>
<p><a href='<?php echo $_smarty_tpl->getValue('config')['site_url'];?>
/users/forgot/<?php echo $_smarty_tpl->getValue('code');?>
/'>Изменить пароль</a></p>
<p>Эта ссылка действует в течение нескольких минут.</p>
<p>Если это письмо пришло вам по ошибке, проигнорируйте его.</p>
</body>
</html><?php }
}
