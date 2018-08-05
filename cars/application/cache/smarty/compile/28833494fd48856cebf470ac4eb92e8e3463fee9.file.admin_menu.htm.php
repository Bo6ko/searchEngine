<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 22:52:22
         compiled from "application/views\admin_menu.htm" */ ?>
<?php /*%%SmartyHeaderCode:1691559e7430b6c8b48-62371264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28833494fd48856cebf470ac4eb92e8e3463fee9' => 
    array (
      0 => 'application/views\\admin_menu.htm',
      1 => 1508532738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1691559e7430b6c8b48-62371264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59e7430b6cbd69_68167422',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e7430b6cbd69_68167422')) {function content_59e7430b6cbd69_68167422($_smarty_tpl) {?>	<h1>Admin panel</h1>
	<ul class="admin">
		<li><a href="<?php echo @WEB_PATH;?>
admin_panel/add_mark">Add new mark</a></li>
		<li><a href="<?php echo @WEB_PATH;?>
admin_panel/add_model">Add new model</a></li>
		<li><a href="<?php echo @WEB_PATH;?>
admin_panel/add_color">Add new color</a>
		<li><a href="<?php echo @WEB_PATH;?>
admin_panel/add_carrosserie">Add new carrosserie</a></li>
		<li><a href="<?php echo @WEB_PATH;?>
admin_panel/add_energie">Add new energie</a></li>
		<li><a href="<?php echo @WEB_PATH;?>
admin_panel/add_boite">Add new boite</a></li>
	</ul><?php }} ?>