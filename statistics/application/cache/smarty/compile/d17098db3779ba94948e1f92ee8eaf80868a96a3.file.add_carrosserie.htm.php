<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 21:47:18
         compiled from "application/views\admin_panel\add\add_carrosserie.htm" */ ?>
<?php /*%%SmartyHeaderCode:1099059ea52c61fd9a6-96329931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd17098db3779ba94948e1f92ee8eaf80868a96a3' => 
    array (
      0 => 'application/views\\admin_panel\\add\\add_carrosserie.htm',
      1 => 1508527436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1099059ea52c61fd9a6-96329931',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'messageCarrosserie' => 0,
    'data' => 0,
    'carrosserie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ea52c6278508_24788137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea52c6278508_24788137')) {function content_59ea52c6278508_24788137($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/add_carrosserie">
			<label><strong>Add new carrosserie:</strong></label><br/><br/>
			<input type="text" placeholder="add carrosserie" name="add-carrosserie" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['carrosserie'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Add" />
		</form>
	</div>
	
	<div class="messageSend"><?php echo $_smarty_tpl->tpl_vars['messageCarrosserie']->value['update'];?>
</div>
	<div class="messageSend messageDelete"><?php echo $_smarty_tpl->tpl_vars['messageCarrosserie']->value['edit'];?>
<?php echo $_smarty_tpl->tpl_vars['messageCarrosserie']->value['delete'];?>
</div>
	
	<table style="width: 100%; margin: 40px 0px;" border=1>
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Date created</th>
				<th>Date modified</th>
				<th>Delete</th>
			</tr>
		</thead>
			
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['carrosserie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrosserie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrosserie']->key => $_smarty_tpl->tpl_vars['carrosserie']->value){
$_smarty_tpl->tpl_vars['carrosserie']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @WEB_PATH;?>
admin_panel/edit_carrosserie/<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_date_modified'];?>
</td>
				<td style="text-align: center; color: red;">
					<strong><a style="color: red;" href="<?php echo @WEB_PATH;?>
admin_panel/delete_carrosserie/<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
">X</a></strong>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

	
	
</div><?php }} ?>