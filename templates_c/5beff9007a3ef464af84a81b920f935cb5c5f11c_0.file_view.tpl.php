<?php
/* Smarty version 5.0.2, created on 2024-03-31 11:53:50
  from 'file:[0]/default/pages/view_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6609249e9f76d4_92707256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5beff9007a3ef464af84a81b920f935cb5c5f11c' => 
    array (
      0 => '[0]/default/pages/view_all.tpl',
      1 => 1615046380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6609249e9f76d4_92707256 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\templates\\\\default\\pages';
?>

<section class="about-section spad mt-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 order-lg-1">
				<div class="about-text">
					<h1><?php echo $_smarty_tpl->getValue('content')['title'];?>
</h1>
					<?php echo $_smarty_tpl->getValue('content')['text'];?>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- Intro Section end -->


<?php }
}
