<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 21:48:53
         compiled from "application/views\admin_panel\edit\edit_carrosserie.htm" */ ?>
<?php /*%%SmartyHeaderCode:1313159ea5325c9c985-44966699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e426580cc67c2aa50d1745abc84ff656798d2231' => 
    array (
      0 => 'application/views\\admin_panel\\edit\\edit_carrosserie.htm',
      1 => 1508527480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1313159ea5325c9c985-44966699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrosserie' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ea5325cf53e8_88507970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea5325cf53e8_88507970')) {function content_59ea5325cf53e8_88507970($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/edit_carrosserie/<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
">
			<label><strong>Edit carrosserie:</strong></label><br/><br/>
			<input type="text" placeholder="add carrosserie" name="add-carrosserie" value="<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_name'];?>
" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['carrosserie'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Edit" />
		</form>
	</div>
	
	
</div><?php }} ?>