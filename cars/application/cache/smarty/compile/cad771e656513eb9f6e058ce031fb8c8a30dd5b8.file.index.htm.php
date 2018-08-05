<?php /* Smarty version Smarty-3.1.8, created on 2018-05-25 07:48:12
         compiled from "application/views\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2156259db8791468f58-27537033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cad771e656513eb9f6e058ce031fb8c8a30dd5b8' => 
    array (
      0 => 'application/views\\index\\index.htm',
      1 => 1527196221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2156259db8791468f58-27537033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59db87914d3f31_78713703',
  'variables' => 
  array (
    'best_price_cars' => 0,
    'best_price_car' => 0,
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
    'recently_cars' => 0,
    'car' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59db87914d3f31_78713703')) {function content_59db87914d3f31_78713703($_smarty_tpl) {?><div id="content">
<br/>			
   
<!--SLIDER-->
<div  id="jssor_1">
	<div class="slides" data-u="slides">
		<?php  $_smarty_tpl->tpl_vars['best_price_car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['best_price_car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_price_cars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['best_price_car']->key => $_smarty_tpl->tpl_vars['best_price_car']->value){
$_smarty_tpl->tpl_vars['best_price_car']->_loop = true;
?>
		<div style="display: none;">
		    <img data-u="image" src="<?php echo @WEB_PATH;?>
images\hyundai.bmp" alt="car1" />
		    <div class="image-title">
				<div class="image-title-left">
					<strong><?php echo $_smarty_tpl->tpl_vars['best_price_car']->value['vehicule_annee'];?>
 <?php echo $_smarty_tpl->tpl_vars['best_price_car']->value['marque_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['best_price_car']->value['modele_name'];?>
</strong>
					<div class="image-desc">Miles: <?php echo $_smarty_tpl->tpl_vars['best_price_car']->value['vehicule_kilometrage'];?>
 
					<strong>Engine:</strong> <?php echo $_smarty_tpl->tpl_vars['best_price_car']->value['energie_name'];?>
</div>
				</div>
				<div class="image-title-right">
					<strong>$ <?php echo $_smarty_tpl->tpl_vars['best_price_car']->value['vehicule_price'];?>
</strong>
				</div>
			</div>  
		</div>
		<?php } ?>

	</div>
 
	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb05" data-autocenter="1">
	    <!-- bullet navigator item prototype -->
	    <div data-u="prototype" style="width:16px;height:16px;"></div>
	</div>  

	
	        <!-- Arrow Navigator
	<span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
	<span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
	<a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
        -->
</div>
<script>
   jssor_1_slider_init();
</script>
<!--  End Slider -->

<div id="search-form">
	<div class="form-group">
		<h2>Search auto</h2>
		<div class="vehicles-icon">
			<img src="<?php echo @WEB_PATH;?>
images\search_icon1.png" alt="search_icon1" />
			<img src="<?php echo @WEB_PATH;?>
images\search_icon2.png" alt="search_icon2" />
			<img src="<?php echo @WEB_PATH;?>
images\search_icon3.png" alt="search_icon3" />
			<img src="<?php echo @WEB_PATH;?>
images\search_icon4.png" alt="search_icon4" />
			<div class="clear"></div>
		</div>
	</div>
	
	<form method="get" action="<?php echo site_url('results');?>
">
		<div style="margin-bottom: 9.3px;" class="form-group">
			<label>Manufacturer</label><br/>
			<select id="marque_id" class="select-control" name="marques">
				<option value=""> - choose - </option>
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
				<option value=""> - choose - </option>
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
				<option value="" disabled selected>From</option>
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
				<option value="" disabled selected>To</option>
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
				<option value="" disabled selected>From</option>
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
				<option value="" disabled selected>to</option>
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
				<option value="" disabled selected>From</option>
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
				<option value="" disabled selected>To</option>
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

		<div style="margin-top: 21px">
			<input style="margin-top: 12px" type="checkbox" name="newcar" /> Only new cars
			<input type="submit" class="btn btn-primary" value="SEARCH" />
			<div class="clear"></div>
		</div>
		
	</form>
</div>

<h2>Recent listings</h2>
<hr/>

<div class="recently-cars">
	<?php  $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recently_cars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['car']->key => $_smarty_tpl->tpl_vars['car']->value){
$_smarty_tpl->tpl_vars['car']->_loop = true;
?>
	<div class="pictures-recently-car">
		<img src="<?php echo @WEB_PATH;?>
images\hyundai.bmp" alt="car1">
	    <div class="image-desc-recently-car">
			<div class="image-title-left">
				<strong><?php echo $_smarty_tpl->tpl_vars['car']->value['modele_name'];?>
</strong>
			</div>
			<div class="image-title-right">
				<strong>$ <?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_price'];?>
</strong>
			</div>
			<div class="clear"></div>
		</div> 
	</div>
	<?php } ?>
	<div class="clear"></div>

</div>

<div>
	<div class="looking-for-car left">
		<div class="left">
			<div class="looking-for-car-header"><strong>Looking for a car?</strong></div>
			<span style="font-size: 10px;">1.000 new offers every day. 35.000 offers on site</span>
		</div>
		
		<div class="right">
			<a href="#">SEARCH</a>
		</div>
		<div class="clear"></div>
	</div>
	
	<div class="want-to-sell-car right">
		<div class="left">
			<div class="want-to-sell-car-header"><strong>Want to sell a car?</strong></div>
			<span style="font-size: 10px;">200.000 visitors every day. Add your offer now!</span>
		</div>
		<div class="right">
			<a href="<?php echo @WEB_PATH;?>
index/offers">SELL</a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>

</div>

<h2>Recent from the blog</h2>
<hr/>

<div class="recent-blog">

	<div class="recent-blog-car">
		<img src="<?php echo @WEB_PATH;?>
images\car-blog1.jpg" alt="car1">
	    <div class="recent-blog-desc">
			<p style="font-size:12px; margin: 9px 0px;"><strong>THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</strong></p>
			<i style="font-size:10.5px;">November 1, 2012</i>
			<p style="margin-top: 3px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
			
			</p>
		</div> 
	</div>
	
	<div class="recent-blog-car">
		<img src="<?php echo @WEB_PATH;?>
images\car-blog2.jpg" alt="car1">
	    <div class="recent-blog-desc">
			<p style="font-size:12px; margin: 9px 0px;"><strong>THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</strong></p>
			<i style="font-size:10.5px;">November 1, 2012</i>
			<p style="margin-top: 3px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
			
			</p>
		</div> 
	</div>
	
	<div class="recent-blog-car">
		<img src="<?php echo @WEB_PATH;?>
images\car-blog3.jpg" alt="car1">
	    <div class="recent-blog-desc">
			<p style="font-size:12px; margin: 9px 0px;"><strong>THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</strong></p>
			<i style="font-size:10.5px;">November 1, 2012</i>
			<p style="margin-top: 3px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
			
			</p>
		</div> 
	</div>
	
	<div class="recent-blog-car">
		<img src="<?php echo @WEB_PATH;?>
images\car-blog3.jpg" alt="car1">
	    <div class="recent-blog-desc">
			<p style="font-size:12px; margin: 9px 0px;"><strong>THE IMPORTANCE OF LUXURY SUV SALES EXPLAINED</strong></p>
			<i style="font-size:10.5px;">November 1, 2012</i>
			<p style="margin-top: 3px;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
			
			</p>
		</div> 
	</div>
	<div class="clear"></div>

</div>


</div>
<div class="clear"></div>
	
        
<?php }} ?>