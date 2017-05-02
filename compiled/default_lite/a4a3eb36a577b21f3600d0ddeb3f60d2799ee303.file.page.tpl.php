<?php /* Smarty version Smarty-3.1.18, created on 2017-03-13 21:04:16
         compiled from "D:\OpenServer\OpenServer\domains\Medica\design\default_lite\html\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1361758c6df20649168-11922090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4a3eb36a577b21f3600d0ddeb3f60d2799ee303' => 
    array (
      0 => 'D:\\OpenServer\\OpenServer\\domains\\Medica\\design\\default_lite\\html\\page.tpl',
      1 => 1467273708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1361758c6df20649168-11922090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c6df2069f9d6_83805221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6df2069f9d6_83805221')) {function content_58c6df2069f9d6_83805221($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['canonical'] = new Smarty_variable("/".((string)$_smarty_tpl->tpl_vars['page']->value->url), null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['canonical'] = clone $_smarty_tpl->tpl_vars['canonical'];?>
<?php if ($_smarty_tpl->tpl_vars['page']->value->url=='404') {?>
    <?php echo $_smarty_tpl->getSubTemplate ('page_404.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    
    
    <div class="container">
        
        <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


        
        <h1 class="m-b-1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>

        
        <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

    </div>
<?php }?>

<!--OkayCMS Lite--><?php }} ?>
