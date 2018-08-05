<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 22:54:25
         compiled from "application/views\admin_panel\add\add_energie.htm" */ ?>
<?php /*%%SmartyHeaderCode:1921959ea62811a9e10-19894791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e947fd8c4e6a92b838dd35a705113afc47fb77' => 
    array (
      0 => 'application/views\\admin_panel\\add\\add_energie.htm',
      1 => 1508532061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1921959ea62811a9e10-19894791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'messageEnergie' => 0,
    'data' => 0,
    'energie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59ea628122b754_24592338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea628122b754_24592338')) {function content_59ea628122b754_24592338($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/add_energie">
			<label><strong>Add new energie:</strong></label><br/><br/>
			<input type="text" placeholder="add energie" name="add-energie" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['energie'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Add" />
		</form>
	</div>
	
	<div class="messageSend"><?php echo $_smarty_tpl->tpl_vars['messageEnergie']->value['update'];?>
</div>
	<div class="messageSend messageDelete"><?php echo $_smarty_tpl->tpl_vars['messageEnergie']->value['edit'];?>
<?php echo $_smarty_tpl->tpl_vars['messageEnergie']->value['delete'];?>
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
			<?php  $_smarty_tpl->tpl_vars['energie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['energie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['energie']->key => $_smarty_tpl->tpl_vars['energie']->value){
$_smarty_tpl->tpl_vars['energie']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @WEB_PATH;?>
admin_panel/edit_energie/<?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_id'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_date_modified'];?>
</td>
				<td style="text-align: center; color: red;">
					<strong><a style="color: red;" href="<?php echo @WEB_PATH;?>
admin_panel/delete_energie/<?php echo $_smarty_tpl->tpl_vars['energie']->value['energie_id'];?>
">X</a></strong>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

	
	
</div><?php }} ?>