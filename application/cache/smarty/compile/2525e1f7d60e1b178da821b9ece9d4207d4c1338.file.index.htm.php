<?php /* Smarty version Smarty-3.1.8, created on 2017-10-20 19:31:46
         compiled from "application/views\results\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2899059dbf3598e7ea0-56017078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2525e1f7d60e1b178da821b9ece9d4207d4c1338' => 
    array (
      0 => 'application/views\\results\\index.htm',
      1 => 1508520704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2899059dbf3598e7ea0-56017078',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59dbf359954b70_95213806',
  'variables' => 
  array (
    'data' => 0,
    'marques' => 0,
    'marque' => 0,
    'models' => 0,
    'model' => 0,
    'i' => 0,
    'yearsFrom' => 0,
    'yearsTo' => 0,
    'y' => 0,
    'milesFrom' => 0,
    'milesTo' => 0,
    'config' => 0,
    'car' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dbf359954b70_95213806')) {function content_59dbf359954b70_95213806($_smarty_tpl) {?><div id="content">

	<h1 style="display: inline-block;">Cars (db result)</h1>
	<a href="#" style="float:right; margin: 40px 0px; background-color: #ff9717; color: #ffffff;
padding: 5px 10px; border-radius: 5px;">ALL CARS</a>
	<div class="clear"></div>
	<hr/>

	<div class="cars-rsult">
	
		<div class="left" style="width: 220px;">
			
			<div id="results-search-form">
				<div class="form-group">
					<h2>Search auto</h2>
					<div class="results-search-icon">
						<img src="<?php echo @WEB_PATH;?>
images\search_icon1.png" alt="search_icon1" />
						<img src="<?php echo @WEB_PATH;?>
images\search_icon2.png" alt="search_icon2" />
						<img src="<?php echo @WEB_PATH;?>
images\search_icon3.png" alt="search_icon3" />
						<img src="<?php echo @WEB_PATH;?>
images\search_icon4.png" alt="search_icon4" />
					</div>
					<div class="clear"></div>
				</div>
				
				<form method="get">					
					<div class="form-group">
						<label>Manufacturer</label><br/>
						<select id="marque_id" class="select-control" name="marques">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['car']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['car']['name'];?>
</option>
							<option value=" - choose - "> - choose - </option>
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
						<label>Model</label><br/>
						<select id="modele_id" class="select-control" name="models">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['model']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['model']['name'];?>
</option>
							<option value=" - choose - "> - choose - </option>
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
						<label>Year</label><br/>
						<select class="select-control" name="year-from">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['yearFrom'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['yearFrom'];?>
</option>
							<option value="From">From</option>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2017+1 - (1990) : 1990-(2017)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1990, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
							<?php }} ?>							
						</select>

						<select class="select-control" name="year-to">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['yearTo'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['yearTo'];?>
</option>
							<option value="To">To</option>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2017+1 - (1990) : 1990-(2017)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1990, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
							<?php }} ?>	
						</select><br/>
					</div>	
						
					<div class="form-group">
						<label>Price</label><br/>
						<select class="select-control" name="price-from">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['priceFrom'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['priceFrom'];?>
</option>
							<option value="From">From</option>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<?php $_smarty_tpl->tpl_vars['yearsFrom'] = new Smarty_variable($_smarty_tpl->tpl_vars['yearsFrom']->value+500, null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['yearsFrom']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['yearsFrom']->value;?>
</option>
							<?php }} ?>	
							<option value="10000">10000</option>
						</select>
				
						<select class="select-control" name="price-to">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['priceTo'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['priceTo'];?>
</option>
							<option value="To">To</option>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<?php $_smarty_tpl->tpl_vars['yearsTo'] = new Smarty_variable($_smarty_tpl->tpl_vars['yearsTo']->value+1000, null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['yearsTo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['yearsTo']->value;?>
</option>
							<?php }} ?>	
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 9+1 - (1) : 1-(9)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<?php $_smarty_tpl->tpl_vars['y'] = new Smarty_variable($_smarty_tpl->tpl_vars['y']->value+10000, null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['y']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['y']->value;?>
</option>
							<?php }} ?>
						</select><br/>
					</div>	
						
					<div class="form-group">
						<label>Mileage</label><br/>
						<select class="select-control" name="mileage-from">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mileageFrom'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['mileageFrom'];?>
</option>
							<option value="From">From</option>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 10+1 - (1) : 1-(10)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<?php $_smarty_tpl->tpl_vars['milesFrom'] = new Smarty_variable($_smarty_tpl->tpl_vars['milesFrom']->value+10000, null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['milesFrom']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['milesFrom']->value;?>
</option>
							<?php }} ?>	
						</select>
				
						<select class="select-control" name="mileage-to">
							<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['mileageTo'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['mileageTo'];?>
</option>
							<option value="To">To</option>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 25+1 - (1) : 1-(25)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
								<?php $_smarty_tpl->tpl_vars['milesTo'] = new Smarty_variable($_smarty_tpl->tpl_vars['milesTo']->value+10000, null, 0);?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['milesTo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['milesTo']->value;?>
</option>
							<?php }} ?>	
						</select><br/>
					</div>
			
					<div style="margin-top: 10px;">
						<input type="checkbox" name="newcar" value="check" /> Only new cars
					</div>
					<input style="float:none; margin-top: 14px;" type="submit" class="btn btn-primary" value="SEARCH" />
					
				</form>
			</div>
			
			<div class="loan-calc">
				
				<h2>Loan calculator</h2>
				<form method="post">
				<div class="form-group">
					<label>Loan Amount</label>
					<select class="select-control" name="loan-amount">
						<option value="" disabled selected>0.00 Euro</option>
						<option value="1">50000</option>
						<option value="2">80000</option>
						<option value="3">100000</option>
						<option value="4">150000</option>
					</select><br/>
				</div>
				
				<div class="form-group">
					<label>Down Payment</label>
					<select class="select-control" name="down-payment">
						<option value="" disabled selected>0.00 Euro</option>
						<option value="1">50000</option>
						<option value="2">80000</option>
						<option value="3">100000</option>
						<option value="4">150000</option>
					</select><br/>
				</div>
				
				<div class="form-group">
					<label>Annual Rate</label>
					<select class="select-control" name="annual-rate">
						<option value="" disabled selected>0.00 %</option>
						<option value="1">50000</option>
						<option value="2">80000</option>
						<option value="3">100000</option>
						<option value="4">150000</option>
					</select><br/>
				</div>
				
				<div class="form-group">
					<label>Loan Period</label>
					<select class="select-control" name="loan-period">
						<option value="" disabled selected>0.00 Years</option>
						<option value="1">3</option>
						<option value="2">4</option>
						<option value="3">5</option>
						<option value="4">10</option>
					</select><br/>
				</div>
				
				<input style="float: none; margin-top: 10px;" type="submit" class="btn btn-primary" value="CALCULATE" />
			</form>
				
			</div>
			
		</div>
		
		<div style="margin: 20px 0 0 40px; width: calc(100% - 260px);" class="left">
			
			<div style="width: 100%;">
				<span>Sort by: Date</span>
				<span>View on page: <?php echo $_smarty_tpl->tpl_vars['config']->value['per_page'];?>
</span>
				<span style="float: right;"><?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>
</span>
				<div class="clear"></div>
			</div>
			<hr/>
			
			<?php  $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['car']->key => $_smarty_tpl->tpl_vars['car']->value){
$_smarty_tpl->tpl_vars['car']->_loop = true;
?>
			<div class="single-car-result">
				<img src="<?php echo @WEB_PATH;?>
images/temp/single-car1.jpg" alt="cars">
				<div class="single-car-result-desc">
					<strong><?php echo $_smarty_tpl->tpl_vars['car']->value['modele_name'];?>
</strong>
					<span style="float: right;">Location: <?php echo $_smarty_tpl->tpl_vars['car']->value['client_city'];?>
, <?php echo $_smarty_tpl->tpl_vars['car']->value['client_country'];?>
</span>
					<div class="clear"></div>
					
					<div style="margin: 5px 0px 8px; color: #ff9717"><strong><?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_price'];?>
 EURO</strong></div>
					<div class="single-car-options">
						<span>Registration: <?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_annee'];?>
</span>
						<span>engine: <?php echo $_smarty_tpl->tpl_vars['car']->value['energie_name'];?>
</span>
						<span>230 HP</span>
						<span>Body <?php echo $_smarty_tpl->tpl_vars['car']->value['carrosserie_name'];?>
</span>
						<span><?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_kilometrage'];?>
 Miles</span>
					</div>
					<a href="<?php echo site_url('car');?>
/index/<?php echo $_smarty_tpl->tpl_vars['car']->value['modele_id'];?>
">View details &raquo</a>
				</div>
				<div class="clear"></div>
			</div>
			
			<hr/>
			<?php } ?>
			
			<?php echo $_smarty_tpl->tpl_vars['data']->value['links'];?>

			
			
			
			
			
			
		</div>
		<div class="clear"></div>
	
	</div>


</div> <!-- CONTENT DIV!!! --><?php }} ?>