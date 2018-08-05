<?php /* Smarty version Smarty-3.1.8, created on 2018-08-01 06:16:47
         compiled from "application/views\search\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2654759dbf335b75102-44178898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da3465cb1030cfbbff15823ca2c44b08a5eab09f' => 
    array (
      0 => 'application/views\\search\\index.htm',
      1 => 1533097005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2654759dbf335b75102-44178898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59dbf335bf6531_60774614',
  'variables' => 
  array (
    'data' => 0,
    'marques' => 0,
    'marque' => 0,
    'models' => 0,
    'model' => 0,
    'engines' => 0,
    'engine' => 0,
    'carRangeResult' => 0,
    'results' => 0,
    'car' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dbf335bf6531_60774614')) {function content_59dbf335bf6531_60774614($_smarty_tpl) {?><div id="content">
	
	<div class="section-find-car">
		<h1>Find Your Dream Car</h1>
		<p style="color: #8696af;">Tempor incididunt labore dolore magna aliqua sed ipsum</p>
		<br/>
		<p><img src="<?php echo @WEB_PATH;?>
images\icons\horisontal-linies-marker.png" alt="horisontal-linies-marker" /></p>
		<br/>
		<br/>
		
		<div class="carrosserie">
			<!-- da gi napravq na butoni koito da filtrirat po na dolu kolite - ajax -->
			
			<button class="pickup">PICKUP</button>
			<button class="suv">SUV</button>
			<button class="coupe">COUPE</button>
			<button class="convertible">CONVERTIBLE</button>
			<button class="sedan">SEDAN</button>
			<button class="minicar">MINICAR</button>
			
		</div>
		
		<div id="search-form">

	
			<form method="get" ">
				
				<div class="form-group">
					<select id="marque_id" class="select-control" name="marques">
						<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['car']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['car']['name'];?>
</option>
						<option value="0"> Select Brand </option>
			   			<?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
?>
		   					<option value="<?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_name'];?>
</option>
						<?php } ?>
					</select><br/>
				</div>	
				
				<div class="form-group">
					<select id="modele_id" class="select-control" name="models">
						<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['model']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['model']['name'];?>
</option>					
						<option value="0">Select Model</option>
			   			<?php  $_smarty_tpl->tpl_vars['model'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['model']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['models']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['model']->key => $_smarty_tpl->tpl_vars['model']->value){
$_smarty_tpl->tpl_vars['model']->_loop = true;
?>
		   					<option value="<?php echo $_smarty_tpl->tpl_vars['model']->value['modele_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value['modele_name'];?>
</option>
						<?php } ?>
					</select><br/>
				</div>
				
				<div class="form-group">
					<select id="engine_id" class="select-control" name="engines">
						<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['engine']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['engine']['name'];?>
</option>
						<option value="0">Select Engine</option>
			   			<?php  $_smarty_tpl->tpl_vars['engine'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['engine']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['engines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['engine']->key => $_smarty_tpl->tpl_vars['engine']->value){
$_smarty_tpl->tpl_vars['engine']->_loop = true;
?>
		   					<option value="<?php echo $_smarty_tpl->tpl_vars['engine']->value['energie_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['engine']->value['energie_name'];?>
</option>
						<?php } ?>
					</select><br/>
				</div>
			
				<div class="form-group">
	            	<input id="ex2" name="car-range" type="text" class="span2" value="" data-slider-min="0" data-slider-max="80000" 
	            	data-slider-step="5" data-slider-value="[10000,70000]"/>
	            	<span>Price Range: </span><b>$<?php echo $_smarty_tpl->tpl_vars['carRangeResult']->value['carRange1'];?>
</b> - <b>$<?php echo $_smarty_tpl->tpl_vars['carRangeResult']->value['carRange2'];?>
</b> 
	            </div>
	            
	            <input type="submit" class="btn-search" value="SEARCH VEHICLE" />
	            <br/><br/>
	            <p><strong>10</strong> <span>cars found</span></p>
	            				
			</form>
		</div>	
	</div>

	<?php if (!empty($_smarty_tpl->tpl_vars['data']->value['sectionResultShow'])){?>
	<div class="section-result">
		<?php  $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['car']->key => $_smarty_tpl->tpl_vars['car']->value){
$_smarty_tpl->tpl_vars['car']->_loop = true;
?>
		<div class="cars-result">
				<img class="left" src="<?php echo @WEB_PATH;?>
images\hyundai.bmp" alt="car1">
				<div class="car-name left"><?php echo $_smarty_tpl->tpl_vars['car']->value['modele_name'];?>
</div>
				<div class="car-price right"><?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_price'];?>
</div>
				<div class="clear"></div>
		</div>	
		<?php } ?>
	</div>
	<?php }?>
	
</div> <!-- CONTENT DIV!!! --><?php }} ?>