<?php /* Smarty version Smarty-3.1.8, created on 2018-05-25 20:08:03
         compiled from "application/views\index\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:2156259db8791468f58-27537033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cad771e656513eb9f6e058ce031fb8c8a30dd5b8' => 
    array (
      0 => 'application/views\\index\\index.htm',
      1 => 1527271679,
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
    'data' => 0,
    'years' => 0,
    'year' => 0,
    'i' => 0,
    'months' => 0,
    'stat' => 0,
    'monthStat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59db87914d3f31_78713703')) {function content_59db87914d3f31_78713703($_smarty_tpl) {?>	<div id="header">
	<div class="navigation">
		
		<form method="get">
			<div class="year">
				<label>ANNEE</label><br/>
				<select id="year" class="select-control" name="year">
					<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear'];?>
</option>
					<?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['year']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['years']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
$_smarty_tpl->tpl_vars['year']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['year']->value['year'];?>
"><?php echo $_smarty_tpl->tpl_vars['year']->value['year'];?>
</option>
					<?php } ?>

				</select>
			</div>
			
			<div class="month">
				<label>MOIS</label><br/>
				<select id="month" class="select-control" name="month">
					<option value="<?php echo $_smarty_tpl->tpl_vars['data']->value['choiceMonth'];?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['currMonthName'];?>
</option>

					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['months']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
</option>
					<?php }} ?>

				</select>
			</div>
			<br/>
			<input class="gobtn" type="submit" value="GO" >
			<div class="clear"></div>
		</form>
		
	</div>
	</div>
<div id="content">
	
	
	

	

	
	<div class="grafic1">
		<div class="graficTitle">
			<h2>Rapport pour I`annee: <?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value['maxCountYear'];?>
 Leads Bruts requs depuis le debut de I`annee</p>
			<p style="color: red;"><?php echo $_smarty_tpl->tpl_vars['data']->value['maxCountYearPercent'];?>
 %</p>
		</div>
		<div class="graficIndex">1</div>
		<div id="container" style="min-width: 310px; height: 200px; margin: 0 auto"></div>
		
		<script type="text/javascript" src="<?php echo @WEB_PATH;?>
js/StatisticGraphics.js"></script>
		<div class="clear"></div>
		<div class="period"><?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear'];?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear']-1;?>
</div>
	</div>
	
	<div class="grafic2">
		<div class="graficIndex">2</div>
		<table style="width:95%;" align="right">
			<tr>
				<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<th><?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear'];?>
<br/><?php echo $_smarty_tpl->tpl_vars['months']->value[$_smarty_tpl->tpl_vars['i']->value-1];?>
</th>
				<?php }} ?>
				<th><?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear'];?>
<br/>Total</th>
			<tr>
			<tr>
				<?php  $_smarty_tpl->tpl_vars['stat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['currCountYearStat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stat']->key => $_smarty_tpl->tpl_vars['stat']->value){
$_smarty_tpl->tpl_vars['stat']->_loop = true;
?>
					<td><?php echo $_smarty_tpl->tpl_vars['stat']->value;?>
</td>
				<?php } ?>
					<td><?php echo $_smarty_tpl->tpl_vars['data']->value['maxCountYear'];?>
</td>
			<tr>
		</table>
		<div class="clear"></div>
	</div>
	
	
	
	
	<div class="grafic3">
		<h3>Rapport pour le mois: <?php echo $_smarty_tpl->tpl_vars['data']->value['choiceYear'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['currMonthName'];?>
</h3><br/>
		<div class="graficIndex">3</div>
		<table style="width:95%;" align="right">
			<tr>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['data']->value['lastDayOfMonth'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
					<th><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</th>
				<?php }} ?>
				<th>Total</th>
			<tr>
			<tr>
				<?php  $_smarty_tpl->tpl_vars['stat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['monthStat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stat']->key => $_smarty_tpl->tpl_vars['stat']->value){
$_smarty_tpl->tpl_vars['stat']->_loop = true;
?>
					<td><?php echo $_smarty_tpl->tpl_vars['stat']->value;?>
</td>
				<?php } ?>
					<td><?php echo $_smarty_tpl->tpl_vars['data']->value['maxCountMonth'];?>
</td>
			<tr>
		</table>
		<div class="clear"></div>
	</div>
		
		
		
		<?php }} ?>