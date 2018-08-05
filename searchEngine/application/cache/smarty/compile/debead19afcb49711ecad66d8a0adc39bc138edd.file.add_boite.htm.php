<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 21:51:36
         compiled from "application/views\admin_panel\add\add_boite.htm" */ ?>
<?php /*%%SmartyHeaderCode:2919959ea48a07101b9-28363071%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'debead19afcb49711ecad66d8a0adc39bc138edd' => 
    array (
      0 => 'application/views\\admin_panel\\add\\add_boite.htm',
      1 => 1508529094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2919959ea48a07101b9-28363071',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ea48a0784992_33483297',
  'variables' => 
  array (
    'errors' => 0,
    'messageBoite' => 0,
    'data' => 0,
    'boite' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea48a0784992_33483297')) {function content_59ea48a0784992_33483297($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/add_boite">
			<label><strong>Add new boite:</strong></label><br/><br/>
			<input type="text" placeholder="add boite" name="add-boite" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['boite'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Add" />
		</form>
	</div>
	
	<div class="messageSend"><?php echo $_smarty_tpl->tpl_vars['messageBoite']->value['update'];?>
</div>
	<div class="messageSend messageDelete"><?php echo $_smarty_tpl->tpl_vars['messageBoite']->value['edit'];?>
<?php echo $_smarty_tpl->tpl_vars['messageBoite']->value['delete'];?>
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
			<?php  $_smarty_tpl->tpl_vars['boite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['boite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['boite']->key => $_smarty_tpl->tpl_vars['boite']->value){
$_smarty_tpl->tpl_vars['boite']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @WEB_PATH;?>
admin_panel/edit_boite/<?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_id'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_date_modified'];?>
</td>
				<td style="text-align: center; color: red;">
					<strong><a style="color: red;" href="<?php echo @WEB_PATH;?>
admin_panel/delete_boite/<?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_id'];?>
">X</a></strong>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

	
	
</div><?php }} ?>