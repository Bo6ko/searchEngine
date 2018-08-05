<?php /* Smarty version Smarty-3.1.8, created on 2018-07-29 15:16:56
         compiled from "application/views\admin_panel\add\add_mark.htm" */ ?>
<?php /*%%SmartyHeaderCode:517159e741d5d6f888-48577272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce70e0f32f3eef8f94645874e4f76f41524da402' => 
    array (
      0 => 'application/views\\admin_panel\\add\\add_mark.htm',
      1 => 1532870213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '517159e741d5d6f888-48577272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59e741d5dbc691_24100825',
  'variables' => 
  array (
    'errors' => 0,
    'messageSend' => 0,
    'editMessage' => 0,
    'deleteMessage' => 0,
    'data' => 0,
    'mark' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e741d5dbc691_24100825')) {function content_59e741d5dbc691_24100825($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/add_mark">
			<label><strong>Add new brand:</strong></label><br/><br/>
			<input type="text" placeholder="add marque" name="add-marque" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['mark'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Add" />
		</form>
	</div>
	
	
	<div class="messageSend"><?php echo $_smarty_tpl->tpl_vars['messageSend']->value;?>
</div>
	<div class="messageSend messageDelete"><?php echo $_smarty_tpl->tpl_vars['editMessage']->value;?>
<?php echo $_smarty_tpl->tpl_vars['deleteMessage']->value;?>
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
			<?php  $_smarty_tpl->tpl_vars['mark'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mark']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mark']->key => $_smarty_tpl->tpl_vars['mark']->value){
$_smarty_tpl->tpl_vars['mark']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @WEB_PATH;?>
admin_panel/edit_mark/<?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_id'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_date_modified'];?>
</td>
				<td style="text-align: center; color: red;">
					<strong><a style="color: red;" href="<?php echo @WEB_PATH;?>
admin_panel/delete_mark/<?php echo $_smarty_tpl->tpl_vars['mark']->value['marque_id'];?>
">X</a></strong>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

	
	
</div><?php }} ?>