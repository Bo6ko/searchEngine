<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 22:56:35
         compiled from "application/views\admin_panel\edit\edit_energie.htm" */ ?>
<?php /*%%SmartyHeaderCode:2778859ea63032a78f7-72144396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '580b651c526ce1e346cca872ebc5324282f74d84' => 
    array (
      0 => 'application/views\\admin_panel\\edit\\edit_energie.htm',
      1 => 1508532093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2778859ea63032a78f7-72144396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'energie' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ea6303318413_36832927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea6303318413_36832927')) {function content_59ea6303318413_36832927($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/edit_energie/<?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_id'];?>
">
			<label><strong>Edit energie:</strong></label><br/><br/>
			<input type="text" placeholder="add energie" name="add-energie" value="<?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_name'];?>
" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['energie'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Edit" />
		</form>
	</div>
	
	
</div><?php }} ?>