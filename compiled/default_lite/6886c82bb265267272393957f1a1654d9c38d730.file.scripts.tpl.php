<?php /* Smarty version Smarty-3.1.18, created on 2017-03-13 21:04:15
         compiled from "D:\OpenServer\OpenServer\domains\Medica\design\default_lite\html\scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1795758c6df1fbcd237-67784540%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6886c82bb265267272393957f1a1654d9c38d730' => 
    array (
      0 => 'D:\\OpenServer\\OpenServer\\domains\\Medica\\design\\default_lite\\html\\scripts.tpl',
      1 => 1467273708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1795758c6df1fbcd237-67784540',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c6df1fc652f0_48258759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6df1fc652f0_48258759')) {function content_58c6df1fc652f0_48258759($_smarty_tpl) {?><script>
	/* Глобальный обьект */
	/* все глобальные переменные добавляем в оъект и работаем с ним!!! */
	var okay = {};
	
	<?php if ($_GET['module']=='BlogView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
		
		$( window ).load( function() {
			location.href = location.href + '#fn-blog_comment';
			$( '#fn-blog_comment' ).trigger( 'submit' );
		} );
	<?php }?>
	
	<?php if ($_GET['module']=='ProductView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
		$( window ).load( function() {
			$( 'a[href="#comments"]' ).tab( 'show' );
			location.href = location.href + '#comments';
		} );
	
	<?php } elseif ($_GET['module']=='ProductView') {?>
		$( window ).load( function() {
			if( location.hash.search('comment') !=-1 ) {
				$( 'a[href="#comments"]' ).tab( 'show' );
			}
		} );
	<?php }?>
    <?php if ($_GET['module']=="MainView"||$_GET['module']=="ProductsView"||$_GET['module']=="ProductView"||$_GET['module']=="ComparisonView"||$_GET['module']=="WishlistView") {?>
    $(document).ready(function(){
        $('select[name=variant]').each(function(){
            var first_in_stock = $(this).find('option[data-stock!="0"]').first();
            first_in_stock.attr('selected',true);
            first_in_stock.trigger('change');
        });
    });
    <?php }?>
</script>
<!--OkayCMS Lite--><?php }} ?>
