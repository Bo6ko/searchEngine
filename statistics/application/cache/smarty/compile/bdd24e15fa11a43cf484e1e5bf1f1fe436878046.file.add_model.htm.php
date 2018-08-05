<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 13:52:50
         compiled from "application/views\admin_panel\add\add_model.htm" */ ?>
<?php /*%%SmartyHeaderCode:1302659e8e973ba3a39-92250408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdd24e15fa11a43cf484e1e5bf1f1fe436878046' => 
    array (
      0 => 'application/views\\admin_panel\\add\\add_model.htm',
      1 => 1508500366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1302659e8e973ba3a39-92250408',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59e8e973c0b6d1_16383630',
  'variables' => 
  array (
    'data' => 0,
    'marques' => 0,
    'marque' => 0,
    'errors' => 0,
    'messageModel' => 0,
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e8e973c0b6d1_16383630')) {function content_59e8e973c0b6d1_16383630($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/add_model">
			<label><strong>Choose marque:</strong></label><br/>
			<select style="width: 300px;" id="marque_id" class="select-control" name="marques">
				<!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['car']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['car']['name'];?>
</option> -->
				<option value=" - choose marque - "> - choose - </option>
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
			<label><strong>Add new modele:</strong></label><br/>
			<input type="text" placeholder="add modele" name="add-model" />
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['model'];?>
</span><br/><br/>
			<input class="btn" type="submit" value="Add" />
		</form>
	</div>
	
	<div class="messageSend"><?php echo $_smarty_tpl->tpl_vars['messageModel']->value['update'];?>
</div>
	<div class="messageSend messageDelete"><?php echo $_smarty_tpl->tpl_vars['messageModel']->value['edit'];?>
<?php echo $_smarty_tpl->tpl_vars['messageModel']->value['delete'];?>
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
			<?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value){
$_smarty_tpl->tpl_vars['model']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @WEB_PATH;?>
admin_panel/edit_model/<?php echo $_smarty_tpl->tpl_vars['model']->value['modele_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value['modele_id'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['model']->value['modele_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['model']->value['modele_date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['model']->value['modele_date_modified'];?>
</td>
				<td style="text-align: center; color: red;">
					<strong><a style="color: red;" href="<?php echo @WEB_PATH;?>
admin_panel/delete_model/<?php echo $_smarty_tpl->tpl_vars['model']->value['modele_id'];?>
">X</a></strong>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

	
</div><?php }} ?>