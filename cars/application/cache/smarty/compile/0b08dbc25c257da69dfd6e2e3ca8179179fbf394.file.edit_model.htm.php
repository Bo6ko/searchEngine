<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 10:45:57
         compiled from "application/views\admin_panel\edit\edit_model.htm" */ ?>
<?php /*%%SmartyHeaderCode:754259e8f262b96ca9-77987784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b08dbc25c257da69dfd6e2e3ca8179179fbf394' => 
    array (
      0 => 'application/views\\admin_panel\\edit\\edit_model.htm',
      1 => 1508485555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '754259e8f262b96ca9-77987784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59e8f262c05009_45966017',
  'variables' => 
  array (
    'model' => 0,
    'marqueId' => 0,
    'marques' => 0,
    'marque' => 0,
    'errors' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e8f262c05009_45966017')) {function content_59e8f262c05009_45966017($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/edit_model/<?php echo $_smarty_tpl->tpl_vars['model']->value['modele_id'];?>
">
			<label><strong>Edit marque:</strong></label><br/>
			<select style="width: 300px;" id="marque_id" class="select-control" name="marques" >
				<option value="<?php echo $_smarty_tpl->tpl_vars['marqueId']->value[0]['marque_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marqueId']->value[0]['marque_name'];?>
</option>
	   			<?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
?>
   					<option value="<?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_name'];?>
</option>
				<?php } ?>
			</select>
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['marque'];?>
</span><br/><br/>
			<label><strong>Edit modele:</strong></label><br/>
			<input type="text" placeholder="add modele" name="add-model" value="<?php echo $_smarty_tpl->tpl_vars['model']->value['modele_name'];?>
" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['model'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Edit" />
		</form>
	</div>
	
	
</div><?php }} ?>