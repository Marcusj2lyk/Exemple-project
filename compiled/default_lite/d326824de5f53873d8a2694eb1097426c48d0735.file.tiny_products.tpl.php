<?php /* Smarty version Smarty-3.1.18, created on 2017-03-13 21:04:15
         compiled from "D:\OpenServer\OpenServer\domains\Medica\design\default_lite\html\tiny_products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:603158c6df1f7cbd06-32024420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd326824de5f53873d8a2694eb1097426c48d0735' => 
    array (
      0 => 'D:\\OpenServer\\OpenServer\\domains\\Medica\\design\\default_lite\\html\\tiny_products.tpl',
      1 => 1467273708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '603158c6df1f7cbd06-32024420',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_link' => 0,
    'product' => 0,
    'settings' => 0,
    'currency' => 0,
    'v' => 0,
    'translate_id' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c6df1f8874c8_28497461',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6df1f8874c8_28497461')) {function content_58c6df1f8874c8_28497461($_smarty_tpl) {?>
<div class="fn-product card">
	<div class="card-block fn-transfer">
		
		<a class="card-image m-b-1" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
">
            <?php if ($_smarty_tpl->tpl_vars['product']->value->image->filename) {?>
                <img class="fn-img" src="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,219,172);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php } else { ?>
                <img class="fn-img" src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/no_image.png" width="200" height="180" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
            <?php }?>
		</a>

		
		<div class="card-title m-b-1">
			<a data-product="<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
products/<?php echo $_smarty_tpl->tpl_vars['product']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
		</div>

		<div class="row card-price-block">
			
			<div class="col-xs-6 text-line-through text-red<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?> hidden-xs-up<?php }?>">
				<span class="fn-old_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->compare_price);?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

			</div>

			
			<div class="<?php if (!$_smarty_tpl->tpl_vars['product']->value->variant->compare_price) {?>col-xs-12<?php } else { ?>col-xs-6<?php }?> h5 font-weight-bold m-b-0">
				<span class="fn-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['product']->value->variant->price);?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value->sign, ENT_QUOTES, 'UTF-8', true);?>

			</div>
		</div>
		<form class="fn-variants okaycmslite" action="/<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
cart">
			
			<select name="variant" class="fn-variant okaycmslite form-control c-select<?php if (count($_smarty_tpl->tpl_vars['product']->value->variants)<2) {?> hidden-xs-up<?php }?>">
	            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value->variants; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value->id;?>
" data-price="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->price);?>
" data-stock="<?php echo $_smarty_tpl->tpl_vars['v']->value->stock;?>
"<?php if ($_smarty_tpl->tpl_vars['v']->value->compare_price>0) {?> data-cprice="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['convert'][0][0]->convert($_smarty_tpl->tpl_vars['v']->value->compare_price);?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['v']->value->sku) {?> data-sku="<?php echo $_smarty_tpl->tpl_vars['v']->value->sku;?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['v']->value->name) {?><?php echo $_smarty_tpl->tpl_vars['v']->value->name;?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></option>
	            <?php } ?>
	        </select>

            
            <div class="fn-not_preorder m-b-1 <?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock>0) {?>hidden-xs-up<?php }?>">
                <button class="btn btn-danger-outline btn-block disabled" type="button" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['tiny_products_out_of_stock'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->tiny_products_out_of_stock;?>
</button>
            </div>

            <div class="input-group">
                
				<button class="fn-is_stock btn btn-warning btn-block i-add-cart<?php if ($_smarty_tpl->tpl_vars['product']->value->variant->stock<1) {?> hidden-xs-up<?php }?>" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['tiny_products_add_cart'];?>
" type="submit"><?php echo $_smarty_tpl->tpl_vars['lang']->value->tiny_products_add_cart;?>
</button>
            </div>
		</form>
    </div>
</div>
<!--OkayCMS Lite--><?php }} ?>
