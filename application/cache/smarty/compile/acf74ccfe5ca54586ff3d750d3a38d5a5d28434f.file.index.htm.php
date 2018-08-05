<?php /* Smarty version Smarty-3.1.8, created on 2017-10-18 09:29:32
         compiled from "application/views\car\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2827559db8790beb562-82265650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf74ccfe5ca54586ff3d750d3a38d5a5d28434f' => 
    array (
      0 => 'application/views\\car\\index.htm',
      1 => 1508311770,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2827559db8790beb562-82265650',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59db8790c169c1_94883237',
  'variables' => 
  array (
    'car' => 0,
    'recently_cars' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59db8790c169c1_94883237')) {function content_59db8790c169c1_94883237($_smarty_tpl) {?><div id="content">

	<h1 style="display: inline-block;">Mercedes-Benz CLS 320</h1>
	
	<hr/>
	
	<div class="details">
		
		<div class="car-pictures left">
		
			<div class="big-picture">
				<img class="myImg" src="<?php echo @WEB_PATH;?>
images\temp\single-car1.jpg" alt="car1" />
			</div>

			<div class="all-pictures">
				<img class="myImg" src="<?php echo @WEB_PATH;?>
images\temp\single-car2.png" alt="car2" />
				<img class="myImg" src="<?php echo @WEB_PATH;?>
images\temp\single-car3.jpg" alt="car3" />
				<img class="myImg" src="<?php echo @WEB_PATH;?>
images\temp\single-car4.jpg" alt="car4" />
				<img class="myImg" src="<?php echo @WEB_PATH;?>
images\temp\single-car5.jpg" alt="car5" />
				<img class="myImg" src="<?php echo @WEB_PATH;?>
images\temp\single-car6.jpg" alt="car6" />
			</div>
			
			
			<div id="myModal" class="modal">
				<span class="close">&times;</span>
				<!-- <img class="modal-content" id="img01">  -->
				
				<img id="img01" class="mySlides modal-content del" src="<?php echo @WEB_PATH;?>
images\temp\single-car1.jpg">
				<img class="mySlides modal-content" src="<?php echo @WEB_PATH;?>
images\temp\single-car2.png">
				<img class="mySlides modal-content" src="<?php echo @WEB_PATH;?>
images\temp\single-car3.jpg">
				<img class="mySlides modal-content" src="<?php echo @WEB_PATH;?>
images\temp\single-car4.jpg">
				<img class="mySlides modal-content" src="<?php echo @WEB_PATH;?>
images\temp\single-car5.jpg">
				<img class="mySlides modal-content" src="<?php echo @WEB_PATH;?>
images\temp\single-car6.jpg" alt="car6" />
				
				<button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
				<button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
			</div>
			
		</div>
		

		
		<!-- 
		//other carosel
		<div class="car-pictures left">
			<ul class="pgwSlideshow">
			    <li><img src="<?php echo @WEB_PATH;?>
images\temp\single-car1.jpg" alt="" data-description=""></li>
			    <li><img src="<?php echo @WEB_PATH;?>
images\temp\single-car2.png" alt=""></li>
			    <li><img src="<?php echo @WEB_PATH;?>
images\temp\single-car3.jpg" alt="" data-large-src="<?php echo @WEB_PATH;?>
images\temp\single-car3.jpg"></li>
			    <li><img src="<?php echo @WEB_PATH;?>
images\temp\single-car4.jpg" alt=""></li>
			    <li><img src="<?php echo @WEB_PATH;?>
images\temp\single-car5.jpg" alt=""></li>
			</ul>	
			<script>
				$(document).ready(function() {
				    $('.pgwSlideshow').pgwSlideshow();
				});
			</script> 
		</div>
		-->
		
		<div class="details-desc left">
			<div><strong style="margin: 5px 10px 8px 0px; color: #ff9717; font-size:25px;"><?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_price'];?>
 EURO</strong> *Price negotiable</div>
			
			<div class="details-desc-headlines left">
				<p class="odd"><strong>Model, Body type:</strong></p>
				<p><strong>Fabrication:</strong></p>
				<p><strong>Fuel:</strong></p>
				<p><strong>Engine:</strong></p>
				<p><strong>Transmision:</strong></p>
				<p><strong>Color:</strong></p>
				<p><strong>Doors:</strong></p>
				<p><strong>CO2-Emissions combined:</strong></p>
			</div>
			<div class="details-desc-desc left">
				<p><?php echo $_smarty_tpl->tpl_vars['car']->value['modele_name'];?>
, <?php echo $_smarty_tpl->tpl_vars['car']->value['carrosserie_name'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['car']->value['vehicule_annee'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['car']->value['energie_name'];?>
</p>
				<p>3200 cm3 (373 kW/507 CP)</p>
				<p><?php echo $_smarty_tpl->tpl_vars['car']->value['boite_name'];?>
</p>
				<p><?php echo $_smarty_tpl->tpl_vars['car']->value['couleur_name'];?>
</p>
				<p>4/5</p>
				<p>ca 423 g/km</p>
			</div>
			<div class="clear"></div>
			<div style="margin-top: 30px;">
				<span style="width: 50%;     display: block; float: left;">You want to sell a similar car?</span>
				<strong style="margin: 5px 10px 8px 0px; color: #ff9717; font-size:25px;">+ ADD AN OFFER</strong>
				<div class="clear"></div>
			</div>
			<hr/>
		</div>
		<div class="clear"></div>
	</div>
	
	
	
	
	
	
	
	
	
	
	
		<div class="car-vehicle-information">
			<div class="vehicle-information">
				
				<div class="vihicle-basic-information left">
					<h2>Vehicle information</h2>
					<hr/>
					
					<strong>Features:</strong>
					<p>alloy wheels, xenon headlights, tinted glass</p><br/>
					
					<strong>Other parameters:</strong>
					<p>service book</p><br/>
					
					<strong>Safety:</strong>
					<p>ABS, traction control, alarm, airbags, immobilizer, anty-theft, ESP, EDS, protection framework</p><br/>
					
					<strong>Comfort:</strong>
					<p>electric windows, electric mirrors, air conditioning, leather upholstery, 
					navigation system, central locking,  radio/CD, power steering, onboard computer, 
					cruise control, heated seats, rain sensor, steering wheel controls, parking sensors</p>
					
				</div>
				
				<div class="more-information left">
					<h2>More info</h2>
					<hr/>
				
					<strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry</strong><br/><br/>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum 
					has been the industry's standard dummy text ever since the 1500s, when an unknown printer 
					took a galley of type and scrambled it to make a type specimen book. It has survived not 
					only five centuries, but also the leap into electronic typesetting. <br/><br/>
					
					It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
					 and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum, 
					 remaining essentially unchanged.
					 </p>
				</div>
				<div class="clear"></div>
	
			</div>
			
			<div class="contact-details">
			
				<h2>Contact details</h2>
				<hr style="margin: -6px 0px 15px;">
				
				<p style="margin-bottom: 5px;">AutoMarket does not store additional information about the seller except for those
				contained in the announcement.
				</p>
				<span>0040 742 016 756</span>
				<span>Berlin, Germany, nr.250330, main street</span>
				<span>Contact vendor via e-mail</span>
				<span>http://www.dealer.automarket.com</span>
				<div class="clear"></div>
			
			</div>				
	</div>

		
	
	<div style="width: calc(100% - 720px); margin: 0px;" class="left">
		<div class="loan-calc">
					
				<h2>Loan calculator</h2>
				<form method="post">
					<div class="form-group">
						<label>Loan Amount</label>
						<select class="select-control" name="loan-amount">
							<option value="" disabled="" selected="">0.00 Euro</option>
							<option value="1">50000</option>
							<option value="2">80000</option>
							<option value="3">100000</option>
							<option value="4">150000</option>
						</select><br>
					</div>
					
					<div class="form-group">
						<label>Down Payment</label>
						<select class="select-control" name="down-payment">
							<option value="" disabled="" selected="">0.00 Euro</option>
							<option value="1">50000</option>
							<option value="2">80000</option>
							<option value="3">100000</option>
							<option value="4">150000</option>
						</select><br>
					</div>
					
					<div class="form-group">
						<label>Annual Rate</label>
						<select class="select-control" name="annual-rate">
							<option value="" disabled="" selected="">0.00 %</option>
							<option value="1">50000</option>
							<option value="2">80000</option>
							<option value="3">100000</option>
							<option value="4">150000</option>
						</select><br>
					</div>
					
					<div class="form-group">
						<label>Loan Period</label>
						<select class="select-control" name="loan-period">
							<option value="" disabled="" selected="">0.00 Years</option>
							<option value="1">3</option>
							<option value="2">4</option>
							<option value="3">5</option>
							<option value="4">10</option>
						</select><br>
					</div>
					
					<input style="float: none; margin-top: 10px;" type="submit" class="btn btn-primary" value="CALCULATE">
				</form>
					
			</div>
			
			<div class="ads">
				Ads here
			</div>
			
		</div>
		<div class="clear"></div>
		
			<h2 style="margin-bottom: 3px;">Similar offers</h2>
			<hr/>
			<div class="recently-cars">
			
				<?php  $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recently_cars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['car']->key => $_smarty_tpl->tpl_vars['car']->value){
$_smarty_tpl->tpl_vars['car']->_loop = true;
?>
				<div class="pictures-recently-car">
					<img src="http://cars.localhost/images\hyundai.bmp" alt="car1">
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



</div> <!-- CONTENT DIV!!! --><?php }} ?>