<?php /* Smarty version Smarty-3.1.18, created on 2017-03-13 21:04:15
         compiled from "D:\OpenServer\OpenServer\domains\Medica\design\default_lite\html\cart_informer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2149858c6df1fcef216-91273912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fe56e5ed18862b2532d61e8bf299f5a11c89cf1' => 
    array (
      0 => 'D:\\OpenServer\\OpenServer\\domains\\Medica\\design\\default_lite\\html\\cart_informer.tpl',
      1 => 1458557010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2149858c6df1fcef216-91273912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'lang_link' => 0,
    'translate_id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c6df1fd51c13_56121317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6df1fd51c13_56121317')) {function content_58c6df1fd51c13_56121317($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value->total_products>0) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart" class="i-cart btn-block link-black pull-xs-right pull-lg-none">
		<span class="h5 font-weight-bold btn-block" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_cart'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
		<span class="btn-block"><?php echo $_smarty_tpl->tpl_vars['cart']->value->total_products;?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['plural'][0][0]->plural_modifier($_smarty_tpl->tpl_vars['cart']->value->total_products,$_smarty_tpl->tpl_vars['lang']->value->count_products_item,$_smarty_tpl->tpl_vars['lang']->value->count_products_goods,$_smarty_tpl->tpl_vars['lang']->value->count_products_of_goods);?>
</span>
	</a>
<?php } else { ?>
	<div class="i-cart pull-xs-right pull-lg-none">
		<span class="h5 font-weight-bold btn-block" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_cart'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_cart;?>
</span>
		<span class="btn-block" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_empty_cart'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_empty_cart;?>
</span>
	</div>
<?php }?><?php }} ?>
