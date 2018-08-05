<?php /* Smarty version Smarty-3.1.8, created on 2018-08-05 16:58:18
         compiled from "application/views\admin_panel\edit\edit_car.htm" */ ?>
<?php /*%%SmartyHeaderCode:19365b624cfa06d713-30151827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a61b1607e2437360a10232f3d62de9a7b5b2d18' => 
    array (
      0 => 'application/views\\admin_panel\\edit\\edit_car.htm',
      1 => 1533481091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19365b624cfa06d713-30151827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5b624cfa123586_73202704',
  'variables' => 
  array (
    'car' => 0,
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
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b624cfa123586_73202704')) {function content_5b624cfa123586_73202704($_smarty_tpl) {?><div id="content">

	<?php echo $_smarty_tpl->getSubTemplate ("admin_menu.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	<div class="admin-form">
	
		<form method="post" action="<?php echo @WEB_PATH;?>
admin_panel/edit_car/<?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_id'];?>
">
			<label><strong>Edit marque:</strong></label><br/>
			<select id="marque_id" style="width: 300px;" id="marque_id" class="select-control" name="add-marque">
				<option value="<?php echo $_smarty_tpl->tpl_vars['car']->value['marque_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value['marque_name'];?>
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
			
			
			<!-- za models -->
			
			<label><strong>Edit new modele:</strong></label><br/>
			<select id="modele_id" style="width: 300px;" class="select-control" name="add-model">
				<option value="<?php echo $_smarty_tpl->tpl_vars['car']->value['modele_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value['modele_name'];?>
</option>
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
			
			<label><strong>Edit new carrosserie:</strong></label><br/>
			<select style="width: 300px;" id="carrosserie_id" class="select-control" name="add-carrosserie">
				<option value="<?php echo $_smarty_tpl->tpl_vars['car']->value['carrosserie_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value['carrosserie_name'];?>
</option>
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
			
			<label><strong>Edit new energie:</strong></label><br/>
			<select style="width: 300px;" id="energie_id" class="select-control" name="add-engine">
				<option value="<?php echo $_smarty_tpl->tpl_vars['car']->value['energie_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value['energie_name'];?>
</option>
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
			
			<label><strong>Edit new boite:</strong></label><br/>
			<select style="width: 300px;" id="boite_id" class="select-control" name="add-boite">
				<option value="<?php echo $_smarty_tpl->tpl_vars['car']->value['boite_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value['boite_name'];?>
</option>
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
			
			<label><strong>Edit new color:</strong></label><br/>
			<select style="width: 300px;" id="couleur_id" class="select-control" name="add-color">
				<option value="<?php echo $_smarty_tpl->tpl_vars['car']->value['couleur_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['car']->value['couleur_name'];?>
</option>
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
			
			
			<input class="btn" type="submit" value="Edit" />
		</form>
	
	</div>
	
	
</div><?php }} ?>