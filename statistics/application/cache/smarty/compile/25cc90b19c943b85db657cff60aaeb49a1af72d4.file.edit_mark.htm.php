<?php /* Smarty version Smarty-3.1.8, created on 2017-10-19 11:22:47
         compiled from "application/views\admin_panel\edit\edit_mark.htm" */ ?>
<?php /*%%SmartyHeaderCode:722059e77d84ea7850-54808259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25cc90b19c943b85db657cff60aaeb49a1af72d4' => 
    array (
      0 => 'application/views\\admin_panel\\edit\\edit_mark.htm',
      1 => 1508404708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '722059e77d84ea7850-54808259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59e77d84eaa1c6_65235072',
  'variables' => 
  array (
    'mark' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e77d84eaa1c6_65235072')) {function content_59e77d84eaa1c6_65235072($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/edit_mark/<?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_id'];?>
">
			<label><strong>Edit marque:</strong></label><br/><br/>
			<input type="text" placeholder="Marque" name="add-marque" value="<?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_name'];?>
" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['mark'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Edit" />
		</form>
	</div>
	
</div><?php }} ?>