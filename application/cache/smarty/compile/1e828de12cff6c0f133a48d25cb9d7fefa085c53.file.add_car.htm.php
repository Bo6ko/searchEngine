<?php /* Smarty version Smarty-3.1.8, created on 2018-08-05 16:38:03
         compiled from "application/views\admin_panel\add\add_car.htm" */ ?>
<?php /*%%SmartyHeaderCode:322005b613ab1b17417-38360979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e828de12cff6c0f133a48d25cb9d7fefa085c53' => 
    array (
      0 => 'application/views\\admin_panel\\add\\add_car.htm',
      1 => 1533479793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322005b613ab1b17417-38360979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b613ab1c260f7_40681131',
  'variables' => 
  array (
    'data' => 0,
    'marques' => 0,
    'marque' => 0,
    'errors' => 0,
    'models' => 0,
    'model' => 0,
    'carrosseries' => 0,
    'carrosserie' => 0,
    'engines' => 0,
    'engine' => 0,
    'boites' => 0,
    'boite' => 0,
    'colors' => 0,
    'color' => 0,
    'messageModel' => 0,
    'car' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b613ab1c260f7_40681131')) {function content_5b613ab1c260f7_40681131($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/add_car">
			<label><strong>Choose marque:</strong></label><br/>
			<select id="marque_id" style="width: 300px;" id="marque_id" class="select-control" name="add-marque">
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
			
			
			
			
			<!-- za models -->
			
			<label><strong>Add new modele:</strong></label><br/>
			<select id="modele_id" style="width: 300px;" class="select-control" name="add-model">
				<!-- <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['car']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['car']['name'];?>
</option> -->
				<option value=" - choose model - "> - choose - </option>
	   			<?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value){
$_smarty_tpl->tpl_vars['model']->_loop = true;
?>
   					<option value="<?php echo $_smarty_tpl->tpl_vars['model']->value['modele_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value['modele_name'];?>
</option>
				<?php } ?>
			</select>
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['model'];?>
</span><br/><br/>
			
			
			
			<!-- za carroserie -->
			
			<label><strong>Add new modele:</strong></label><br/>
			<select style="width: 300px;" id="carrosserie_id" class="select-control" name="add-carrosserie">
				<option value=" - choose carrosserie - "> - choose - </option>
	   			<?php  $_smarty_tpl->tpl_vars['carrosserie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrosserie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrosseries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrosserie']->key => $_smarty_tpl->tpl_vars['carrosserie']->value){
$_smarty_tpl->tpl_vars['carrosserie']->_loop = true;
?>
   					<option value="<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_name'];?>
</option>
				<?php } ?>
			</select>
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['carrosserie'];?>
</span><br/><br/>
			
			
			<!-- za engine -->
			
			<label><strong>Add new modele:</strong></label><br/>
			<select style="width: 300px;" id="marque_id" class="select-control" name="add-engine">
				<option value=" - choose engine - "> - choose - </option>
	   			<?php  $_smarty_tpl->tpl_vars['engine'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['engine']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['engines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['engine']->key => $_smarty_tpl->tpl_vars['engine']->value){
$_smarty_tpl->tpl_vars['engine']->_loop = true;
?>
   					<option value="<?php echo $_smarty_tpl->tpl_vars['engine']->value['energie_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['engine']->value['energie_name'];?>
</option>
				<?php } ?>
			</select>
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['engine'];?>
</span><br/><br/>
			
			<label><strong>Add new boite:</strong></label><br/>
			<select style="width: 300px;" id="boite_id" class="select-control" name="add-boite">
				<option value=" - choose engine - "> - choose - </option>
	   			<?php  $_smarty_tpl->tpl_vars['boite'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['boite']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['boites']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['boite']->key => $_smarty_tpl->tpl_vars['boite']->value){
$_smarty_tpl->tpl_vars['boite']->_loop = true;
?>
   					<option value="<?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['boite']->value['boite_name'];?>
</option>
				<?php } ?>
			</select>
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['boite'];?>
</span><br/><br/>
			
			<label><strong>Add new color:</strong></label><br/>
			<select style="width: 300px;" id="couleur_id" class="select-control" name="add-color">
				<option value=" - choose engine - "> - choose - </option>
	   			<?php  $_smarty_tpl->tpl_vars['color'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['color']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['colors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['color']->key => $_smarty_tpl->tpl_vars['color']->value){
$_smarty_tpl->tpl_vars['color']->_loop = true;
?>
   					<option value="<?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['color']->value['couleur_name'];?>
</option>
				<?php } ?>
			</select>
			<span class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value['color'];?>
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
				<th>Marks name</th>
				<th>Models name</th>
				<th>Carrosseries</th>
				<th>Energies</th>
				<th>Boites</th>
				<th>Color</th>
				<th>Date modified</th>
				<th>Delete</th>
			</tr>
		</thead>
			
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['car']->key => $_smarty_tpl->tpl_vars['car']->value){
$_smarty_tpl->tpl_vars['car']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @WEB_PATH;?>
admin_panel/edit_car/<?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_id'];?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['car']->value['marque_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['car']->value['modele_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['car']->value['carrosserie_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['car']->value['energie_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['car']->value['boite_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['car']->value['couleur_name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_date_modified'];?>
</td>
				<td style="text-align: center; color: red;">
					<strong><a style="color: red;" href="<?php echo @WEB_PATH;?>
admin_panel/delete_car/<?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_id'];?>
">X</a></strong>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

	
</div><?php }} ?>