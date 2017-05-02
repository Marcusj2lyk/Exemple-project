<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 01:07:34
         compiled from "D:\OpenServer\OpenServer\domains\Medica\design\default_lite\html\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3249458c869a66a13e8-05616767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3325529ecd30e302619b04cf65267b88e4dcac8' => 
    array (
      0 => 'D:\\OpenServer\\OpenServer\\domains\\Medica\\design\\default_lite\\html\\cart.tpl',
      1 => 1460448856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3249458c869a66a13e8-05616767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'translate_id' => 0,
    'cart' => 0,
    'error' => 0,
    'name' => 0,
    'phone' => 0,
    'email' => 0,
    'address' => 0,
    'comment' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c869a67fa756_00220115',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c869a67fa756_00220115')) {function content_58c869a67fa756_00220115($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include 'D:\\OpenServer\\OpenServer\\domains\\Medica\\Smarty\\libs\\plugins\\function.math.php';
?>

<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang']->value->cart_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>

<div class="container">
	
	<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	
	<h1 class="m-b-1"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_header;?>
</span></h1>

	<?php if ($_smarty_tpl->tpl_vars['cart']->value->purchases) {?>
		<form method="post" name="cart">
            <input name="checkout" value="1" type="hidden">
			
			<div id="fn-purchases" class="h6 m-b-2">
				<?php echo $_smarty_tpl->getSubTemplate ('cart_purchases.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>

			<div class="row">
				
				<div id="fn-ajax_deliveries" class="col-lg-7 m-b-2">
					<?php echo $_smarty_tpl->getSubTemplate ('cart_deliveries.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>

				
				<div class="col-lg-5 m-b-2">
					<div class="bg-info p-a-1">
						
						<div class="h1 m-b-1 text-xs-center" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_form_header'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_form_header;?>
</div>

						
						<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
							<div class="p-x-1 p-y-05 text-red m-b-1">
								<?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_name') {?>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['error']->value=='empty_email') {?>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_email'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
</span>
								<?php }?>
								<?php if ($_smarty_tpl->tpl_vars['error']->value=='captcha') {?>
									<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_error_captcha'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->form_error_captcha;?>
</span>
								<?php }?>
							</div>
						<?php }?>

						
						<div class="form-group">
							<input class="form-control" name="name" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-format=".+" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_name;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_name'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_name;?>
*"/>
						</div>

						
						<div class="form-group">
							<input class="form-control" name="phone" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['phone']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_phone'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_phone;?>
"/>
						</div>

						
						<div class="form-group">
							<input class="form-control" name="email" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-format="email" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_email;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_email'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_email;?>
*"/>
						</div>

						
						<div class="form-group">
							<input class="form-control" name="address" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['address']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_address'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_address;?>
"/>
						</div>

						<div class="form-group">
							<textarea class="form-control" name="comment" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_order_comment'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_order_comment;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comment']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
						</div>
						<div class="row">
							<div class="col-xs-12 form-inline m-b-1-md_down text-xs-center">
								<?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_cart) {?>
									<div class="col-md-6 col-xs-12 m-b-1-md_down">
										
										<div class="form-group">
											<img class="brad-3" src="captcha/image.php?<?php echo smarty_function_math(array('equation'=>'rand(10,10000)'),$_smarty_tpl);?>
" alt="captcha"/>
										</div>

										
										<div class="form-group">
											<input class="form-control" type="text" name="captcha_code" value="" data-format="\d\d\d\d\d" data-notice="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['form_enter_captcha'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->form_enter_captcha;?>
*"/>
										</div>
									</div>
								<?php }?>
								
                                <input class="btn btn-warning" type="submit" name="checkout_fake" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_checkout'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_checkout;?>
"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	<?php } else { ?>
		<div class="m-b-2"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['cart_empty'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->cart_empty;?>
</span></div>
	<?php }?>
</div>
<!--OkayCMS Lite--><?php }} ?>
