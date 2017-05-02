<?php /* Smarty version Smarty-3.1.18, created on 2017-03-13 21:04:16
         compiled from "D:\OpenServer\OpenServer\domains\Medica\design\default_lite\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743058c6df206ad4f0-35163251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '637e5c7a06739f1b8c5190ec42f71c8b9a5d487a' => 
    array (
      0 => 'D:\\OpenServer\\OpenServer\\domains\\Medica\\design\\default_lite\\html\\page_404.tpl',
      1 => 1467273708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743058c6df206ad4f0-35163251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c6df206bdb89_33779065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6df206bdb89_33779065')) {function content_58c6df206bdb89_33779065($_smarty_tpl) {?>
<div class="container">
    
    <?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
    <h1 class="m-b-1"><span data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value->header, ENT_QUOTES, 'UTF-8', true);?>
</span></h1>

    
    <div>
        <?php echo $_smarty_tpl->tpl_vars['page']->value->body;?>

    </div>
</div><?php }} ?>
