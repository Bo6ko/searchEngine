<?php /* Smarty version Smarty-3.1.8, created on 2017-10-19 14:30:24
         compiled from "application/views\admin_panel\edit\edit_color.htm" */ ?>
<?php /*%%SmartyHeaderCode:527259e89aca50b156-67900341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d040562dd278425cc56ebda397f74ba82f45ef4' => 
    array (
      0 => 'application/views\\admin_panel\\edit\\edit_color.htm',
      1 => 1508416222,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '527259e89aca50b156-67900341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59e89aca577de9_93216554',
  'variables' => 
  array (
    'color' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e89aca577de9_93216554')) {function content_59e89aca577de9_93216554($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/edit_color/<?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_id'];?>
">
			<label><strong>Edit couleur:</strong></label><br/><br/>
			<input type="text" placeholder="add couleur" name="add-color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_name'];?>
" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['color'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Edit" />
		</form>
	</div>
	
	
</div><?php }} ?>