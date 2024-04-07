<?php
/* Smarty version 5.0.2, created on 2024-03-31 22:22:15
  from 'file:[admin]/default/menu/view_all.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.0.2',
  'unifunc' => 'content_6609b7e7bec968_16228414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9cadb2d3a353335feaa9b2d1ff929895d3e413c' => 
    array (
      0 => '[admin]/default/menu/view_all.tpl',
      1 => 1711912905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6609b7e7bec968_16228414 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\OpenServer\\domains\\sibfilm.local\\admin\\templates\\\\default\\menu';
?><div class="dd" id="sort_menu">
	<ol class="dd-list">
		<li class="dd-item" data-id="1">
			<div class="dd-handle">Item 1</div>
		</li>
		<li class="dd-item" data-id="2">
			<div class="dd-handle">Item 2</div>
		</li>
		<li class="dd-item" data-id="3">
			<div class="dd-handle">Item 3</div>
			<ol class="dd-list">
				<li class="dd-item" data-id="4">
					<div class="dd-handle">Item 4</div>
				</li>
				<li class="dd-item" data-id="5" data-foo="bar">
					<div class="dd-nodrag">Item 5</div>
				</li>
			</ol>
		</li>
	</ol>
</div>
<textarea id="nestable-output" rows="3" name="v"></textarea>

<style>
	.dd{position:relative;display:block;margin:0;padding:0;max-width:600px;list-style:none;font-size:13px;line-height:20px}.dd-list{display:block;position:relative;margin:0;padding:0;list-style:none}.dd-list .dd-list{padding-left:30px}.dd-empty,.dd-item,.dd-placeholder{display:block;position:relative;margin:0;padding:0;min-height:20px;font-size:13px;line-height:20px}.dd-handle{display:block;height:30px;margin:5px 0;padding:5px 10px;color:#333;text-decoration:none;font-weight:700;border:1px solid #ccc;background:#fafafa;border-radius:3px;box-sizing:border-box}.dd-handle:hover{color:#2ea8e5;background:#fff}.dd-item>button{position:relative;cursor:pointer;float:left;width:25px;height:20px;margin:5px 0;padding:0;text-indent:100%;white-space:nowrap;overflow:hidden;border:0;background:0 0;font-size:12px;line-height:1;text-align:center;font-weight:700}.dd-item>button:before{display:block;position:absolute;width:100%;text-align:center;text-indent:0}.dd-item>button.dd-expand:before{content:'+'}.dd-item>button.dd-collapse:before{content:'-'}.dd-expand{display:none}.dd-collapsed .dd-collapse,.dd-collapsed .dd-list{display:none}.dd-collapsed .dd-expand{display:block}.dd-empty,.dd-placeholder{margin:5px 0;padding:0;min-height:30px;background:#f2fbff;border:1px dashed #b6bcbf;box-sizing:border-box;-moz-box-sizing:border-box}.dd-empty{border:1px dashed #bbb;min-height:100px;background-color:#e5e5e5;background-size:60px 60px;background-position:0 0,30px 30px}.dd-dragel{position:absolute;pointer-events:none;z-index:9999}.dd-dragel>.dd-item .dd-handle{margin-top:0}.dd-dragel .dd-handle{box-shadow:2px 4px 6px 0 rgba(0,0,0,.1)}.dd-nochildren .dd-placeholder{display:none}
</style>





<?php }
}
