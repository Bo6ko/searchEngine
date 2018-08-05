<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 13:55:49
         compiled from "application/views\admin_panel\add\add_color.htm" */ ?>
<?php /*%%SmartyHeaderCode:3202759e85abb7d17e1-80579055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1555683efdfa1d5edd9cd8a82fb96e6a1c3734cf' => 
    array (
      0 => 'application/views\\admin_panel\\add\\add_color.htm',
      1 => 1508500511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3202759e85abb7d17e1-80579055',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59e85abb850701_43642197',
  'variables' => 
  array (
    'errors' => 0,
    'messageColor' => 0,
    'data' => 0,
    'color' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e85abb850701_43642197')) {function content_59e85abb850701_43642197($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/add_color">
			<label><strong>Add new color:</strong></label><br/><br/>
			<input type="text" placeholder="add couleur" name="add-color" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['color'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Add" />
		</form>
	</div>
	
	<div class="messageSend"><?php echo $_smarty_tpl->tpl_vars['messageColor']->value['update'];?>
</div>
	<div class="messageSend messageDelete"><?php echo $_smarty_tpl->tpl_vars['messageColor']->value['edit'];?>
<?php echo $_smarty_tpl->tpl_vars['messageColor']->value['delete'];?>
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
			<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @WEB_PATH;?>
admin_panel/edit_color/<?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_id'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_date_modified'];?>
</td>
				<td style="text-align: center; color: red;">
					<strong><a style="color: red;" href="<?php echo @WEB_PATH;?>
admin_panel/delete_color/<?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_id'];?>
">X</a></strong>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

	
	
</div><?php }} ?>