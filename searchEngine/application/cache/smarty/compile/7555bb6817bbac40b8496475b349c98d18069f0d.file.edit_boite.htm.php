<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 21:18:07
         compiled from "application/views\admin_panel\edit\edit_boite.htm" */ ?>
<?php /*%%SmartyHeaderCode:1453059ea4bef8497b7-05737847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7555bb6817bbac40b8496475b349c98d18069f0d' => 
    array (
      0 => 'application/views\\admin_panel\\edit\\edit_boite.htm',
      1 => 1508525230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1453059ea4bef8497b7-05737847',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'boite' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ea4bef8ab577_46719858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea4bef8ab577_46719858')) {function content_59ea4bef8ab577_46719858($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/edit_boite/<?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_id'];?>
">
			<label><strong>Edit boite:</strong></label><br/><br/>
			<input type="text" placeholder="add boite" name="add-boite" value="<?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_name'];?>
" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['boite'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Edit" />
		</form>
	</div>
	
	
</div><?php }} ?>