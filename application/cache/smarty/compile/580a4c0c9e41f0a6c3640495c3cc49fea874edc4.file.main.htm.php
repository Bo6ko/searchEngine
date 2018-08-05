<?php /* Smarty version Smarty-3.1.8, created on 2017-10-18 13:31:49
         compiled from "application/views\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:1668859db8790f119a2-75365539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '580a4c0c9e41f0a6c3640495c3cc49fea874edc4' => 
    array (
      0 => 'application/views\\main.htm',
      1 => 1508326297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668859db8790f119a2-75365539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_59db87910272e4_80421836',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59db87910272e4_80421836')) {function content_59db87910272e4_80421836($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">

<?php echo $_smarty_tpl->getSubTemplate ("head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body>

<!-- HEADER BEGIN -->
<?php echo $_smarty_tpl->getSubTemplate ("header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- HEADER END -->

<!-- CONTENT BEGIN -->

	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>


<!-- CONTENT END -->

<!-- FOOTER BEGIN -->
<?php echo $_smarty_tpl->getSubTemplate ("footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- FOOTER END -->
	
</body>
</html><?php }} ?>