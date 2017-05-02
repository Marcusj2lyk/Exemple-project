<?php /* Smarty version Smarty-3.1.18, created on 2017-03-15 01:21:27
         compiled from "D:\OpenServer\OpenServer\domains\Medica\design\default_lite\html\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1897258c6df1f8cca67-09749845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9f906d00504b57a6cd2075d90ec9f33f7a8b50' => 
    array (
      0 => 'D:\\OpenServer\\OpenServer\\domains\\Medica\\design\\default_lite\\html\\index.tpl',
      1 => 1489530083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1897258c6df1f8cca67-09749845',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58c6df1fb82815_38576491',
  'variables' => 
  array (
    'language' => 0,
    'config' => 0,
    'meta_title' => 0,
    'filter_meta' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'module' => 0,
    'set_canonical' => 0,
    'rel_prev_next' => 0,
    'lang_link' => 0,
    'canonical' => 0,
    'product' => 0,
    'image' => 0,
    'post' => 0,
    'settings' => 0,
    'sort_canonical' => 0,
    'languages' => 0,
    'l' => 0,
    'keyword' => 0,
    'translate_id' => 0,
    'lang' => 0,
    'currencies' => 0,
    'currency' => 0,
    'c' => 0,
    'ln' => 0,
    'cnt' => 0,
    'user' => 0,
    'categories' => 0,
    'level' => 0,
    'content' => 0,
    'pages' => 0,
    'p' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c6df1fb82815_38576491')) {function content_58c6df1fb82815_38576491($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\OpenServer\\OpenServer\\domains\\Medica\\Smarty\\libs\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html <?php if ($_smarty_tpl->tpl_vars['language']->value->label) {?>lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value->label, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> prefix="og: http://ogp.me/ns#">
<head>
	
	<base href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/"/>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	
	<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->title, ENT_QUOTES, 'UTF-8', true);?>
</title>
	<?php if ((!empty($_smarty_tpl->tpl_vars['meta_description']->value)||!empty($_smarty_tpl->tpl_vars['meta_keywords']->value)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->description)||!empty($_smarty_tpl->tpl_vars['filter_meta']->value->keywords))&&!$_GET['page']) {?>
	<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->description, ENT_QUOTES, 'UTF-8', true);?>
"/>
	<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter_meta']->value->keywords, ENT_QUOTES, 'UTF-8', true);?>
"/>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductsView') {?>
	<?php if ($_smarty_tpl->tpl_vars['set_canonical']->value) {?>
	<meta name="robots" content="noindex,nofollow"/>
	<?php } elseif ($_GET['page']||$_GET['sort']) {?>
	<meta name="robots" content="noindex,follow"/>
	<?php } elseif (isset($_GET['keyword'])) {?>
	<meta name="robots" content="noindex,follow"/>
	<?php } else { ?>
	<meta name="robots" content="index,follow"/>
	<?php }?>
	<?php } else { ?>
	<meta name="robots" content="index,follow"/>
	<?php }?>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
	<meta name="generator" content="OkayCMS Lite <?php echo $_smarty_tpl->tpl_vars['config']->value->version;?>
"/>
	<?php echo $_smarty_tpl->tpl_vars['rel_prev_next']->value;?>


	
	<?php if ($_smarty_tpl->tpl_vars['module']->value=='ProductView') {?>
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
	<meta property="og:description" content='<?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>
'/>
	<?php if ($_smarty_tpl->tpl_vars['product']->value->images) {?>
	<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product']->value->images; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
	
	<link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,330,300);?>
"/>
	
	<meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['image']->value->filename,330,300);?>
"/>
	<?php } ?>
	<?php }?>
	<meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
"/>
	<link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
"/>
	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
	<meta name="twitter:description" content="<?php echo $_smarty_tpl->tpl_vars['product']->value->annotation;?>
">
	<meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['product']->value->image->filename,330,300);?>
">
	<?php } elseif ($_smarty_tpl->tpl_vars['module']->value=='BlogView') {?>
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/>
	<meta property="og:type" content="article"/>
	<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
"/>
	<?php if ($_smarty_tpl->tpl_vars['post']->value->image) {?>
	<meta property="og:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
"/>
	<link rel="image_src" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
"/>
	<?php } else { ?>
	<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png" />
	<meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png">
	<?php }?>
	<meta property="og:description" content='<?php echo $_smarty_tpl->tpl_vars['post']->value->annotation;?>
'/>

	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->name, ENT_QUOTES, 'UTF-8', true);?>
">
	<meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value->annotation, ENT_QUOTES, 'UTF-8', true);?>
">
	<meta name="twitter:image" content="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['resize'][0][0]->resize_modifier($_smarty_tpl->tpl_vars['post']->value->image,400,300,false,$_smarty_tpl->tpl_vars['config']->value->resized_blog_dir);?>
">
	<?php } else { ?>
	<meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
" />
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
"/>
	<meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png" />
	<meta property="og:site_name" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
"/>
	<meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
"/>
	<link rel="image_src" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png"/>
	
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_name;?>
">
	<meta name="twitter:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/logo_ru.png">
	<?php }?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['canonical']->value)) {?>
	<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
<?php if ($_smarty_tpl->tpl_vars['lang_link']->value) {?>/<?php echo str_replace('/','',$_smarty_tpl->tpl_vars['lang_link']->value);?>
<?php }?><?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/>
	<?php } elseif ($_GET['sort']) {?>
	<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['sort_canonical']->value;?>
"/>
	<?php }?>

	
	<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
	<link rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
" href="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
"/>
	<?php }?>
	<?php } ?>

	
	<link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="icon"/>
	<link href="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/favicon.png" type="image/x-icon" rel="shortcut icon"/>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-2.1.4.min.js"></script>

	
	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery-ui.min.js"></script>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.fancybox.min.js"></script>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/jquery.autocomplete-min.js"></script>

	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/slick.min.js"></script>

	
	<?php if ($_GET['module']=='ProductView'||$_GET['module']=="BlogView") {?>
	<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
	<script type="text/javascript" src="//yastatic.net/share2/share.js"></script>
	<?php }?>

	
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/bootstrap.css" rel="stylesheet"/>
	<script src="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/js/bootstrap.min.js"></script>
	<link href="design/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->theme, ENT_QUOTES, 'UTF-8', true);?>
/css/style.css" rel="stylesheet"/>

	
	<?php echo $_smarty_tpl->getSubTemplate ("scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/okay_lite.js"></script>

	<!-- 
	<?php if ($_SESSION['admin']) {?>
	<script src ="backend/design/js/admintooltip/admintooltip.js"></script>
	<link href="backend/design/js/admintooltip/styles/admin.css" rel="stylesheet"/>
	<?php }?> -->
	
	<script src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/js/baloon.js"></script>
	
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="wrapmenu">
	<div class="container-fluid fixMenu">
		<div class="border-b-1-info">
			<div class="container">

			<div class="mobilemenu">
							
			<div class="m-y-1-md_down">
				<form id="fn-search" class="input-group modsearsh" action="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
all-products">
					<input class="fn-search okaycmslite form-control" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_search'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search;?>
"/>
					<span class="input-group-btn">
						<button class="i-search" type="submit"></button>
					</span>
				</form>
			</div>	


			</div>
	<ul class="nav nav-inline pull-xs-right">
		
		<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
		<li class="nav-item">
			<div class="btn-group">
				<a class="nav-link link-black i-cur" href="#" data-toggle="dropdown" aria-haspopup="true"
				aria-expanded="false">
				<span class="cur-label"><?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
</span>
				<span class="cur-name"><?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
</span>
			</a>
			<div class="dropdown-menu">
				<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['c']->value->enabled) {?>
				<a class="dropdown-item <?php if ($_smarty_tpl->tpl_vars['currency']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>active<?php }?>" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('currency_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl);?>
">
					<span class="cur-label"><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
</span>
					<span class="cur-name"><?php echo $_smarty_tpl->tpl_vars['c']->value->name;?>
</span>
				</a>
				<?php }?>
				<?php } ?>
			</div>
		</div>
	</li>
	<?php }?>

	
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
	<?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['ln'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ln']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ln']->key => $_smarty_tpl->tpl_vars['ln']->value) {
$_smarty_tpl->tpl_vars['ln']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['ln']->value->enabled) {?>
	<?php $_smarty_tpl->tpl_vars['cnt'] = new Smarty_variable($_smarty_tpl->tpl_vars['cnt']->value+1, null, 0);?>
	<?php }?>
	<?php } ?>
	<?php if ($_smarty_tpl->tpl_vars['cnt']->value>1) {?>
	<li class="nav-item">
		<div class="btn-group">
			<a data-languages="true" class="nav-link link-black i-lang" href="#" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false"><span class="lang-label"><?php echo $_smarty_tpl->tpl_vars['language']->value->label;?>
</span><span
			class="lang-name"><?php echo $_smarty_tpl->tpl_vars['language']->value->{('name_').($_smarty_tpl->tpl_vars['language']->value->label)};?>
</span></a>
			<div class="dropdown-menu">
				<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value) {
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['l']->value->enabled) {?>
				<a class="dropdown-item<?php if ($_smarty_tpl->tpl_vars['language']->value->id==$_smarty_tpl->tpl_vars['l']->value->id) {?> active<?php }?>"
					href="<?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
"><span class="lang-label"><?php echo $_smarty_tpl->tpl_vars['l']->value->label;?>
</span><span
					class="lang-name"><?php echo $_smarty_tpl->tpl_vars['l']->value->{('name_').($_smarty_tpl->tpl_vars['language']->value->label)};?>
</span></a>
					<?php }?>
					<?php } ?>
				</div>
			</div>
		</li>
		<?php }?>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
		
		<li class="nav-item">
			<a class="nav-link link-black i-user" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user"><?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</a>
		</li>
		<?php } else { ?>
		
		<li class="nav-item">
			<a class="nav-link link-black i-user" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
user/login" title="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_login'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_login;?>
</span></a>
		</li>
		<?php }?>
	</ul>
</div>
</div>

<div class="container m-y-1" id="blfixed">
	<div class="row">
		
		<div class="col-xs-6 col-lg-3 text-md-right p-r-0-md_down">
			<a href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
">
				<span class="logostyle">M E D I C A</span>
			</a>
		</div>

		
		<div id="cart_informer" class="col-xs-6 col-lg-2 pull-lg-right">
			<?php echo $_smarty_tpl->getSubTemplate ('cart_informer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
		
		<div class="col-xs-8 col-lg-2 p-l-0 p-l-1-md_down">
			<div class="i-phone h5 font-weight-bold">
				<div><a class="link-black" href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_phone_1;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_phone_1'];?>
" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_phone_1;?>
</a></div>
				<div><a class="link-black" href="tel:<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_phone_2;?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_phone_2'];?>
" ><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_phone_2;?>
</a></div>
			</div>
		</div>
	</div>
</div>

<?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
<?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>

<?php if ($_smarty_tpl->tpl_vars['level']->value==1) {?>
<div class="container p-x-0_md-down m-b-1">
<!-- 	<div class="border-b-1-white hidden-lg-up">
		<button class="text-sm-center btn btn-block brad-0 btn-primary dropdown-toggle" type="button" data-toggle="collapse" data-target="#catalog" aria-expanded="false" aria-controls="catalog"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_catalog;?>
</button>
	</div> -->
	</div>
	
	<?php } else { ?>
</ul>
<?php }?>

<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

<?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>1));?>

</div>

<?php if ($_GET['module']=="MainView") {?>
<div class="h1 titleTyping text-center">
	<div class="mobhid">
		<p class="coverH1"><b>M E D I C A</b><br>
		</p>
		<div class="typing">
			<p class="console">
			<span id="caption"></span>
			<span id="cursor"></span>	
			</p>
		</div>
	</div>

			
			<div class="pcsearsh">
				<div class="m-y-1-md_down">
					<form id="fn-search" class="input-group" action="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
all-products">
						<input class="fn-search okaycmslite form-control" type="text" name="keyword" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['keyword']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_search'];?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value->index_search;?>
"/>
						<span class="input-group-btn">
							<button class="i-search" type="submit"></button>
						</span>
					</form>
				</div>
			</div>		
		</div>
	</div>			
</div>	
	<div class="container-fluid hidden-md-down baner">

		<div class="fn-slick-banner okaycmslite slick-banner m-b-1">
			<div>
				<a href="/" target="_blank">
					<img src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/1.png" alt="1" />
				</a>
			</div>
			<!--  банер слайд номер два  -->
            <div>
                <a href="/" target="_blank">
                    <img src="design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/3.png" alt="3" />
                </a>
            </div>

        </div>
	</div>
	<?php }?>
	
	
	<div id="fn-content">
		<div class="container-fluid">
			<div class="row">

				<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			</div>	
		</div>
	</div>

	
	<div class="bg-blue p-y-1">
		<div class="container">
			<div class="row text-white">
				
				<div class="col-xs-6 col-lg-3 l-h-1_7 m-b-1-md_down">
					<div class="h5">
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_about_store'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_about_store;?>
</span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
					
					<?php if ($_smarty_tpl->tpl_vars['p']->value->menu_id==1) {?>
					<div>
						<a class="link-white" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
<?php echo $_smarty_tpl->tpl_vars['p']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['p']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
					</div>
					<?php }?>
					<?php } ?>
				</div>

				
				<div class="col-xs-6 col-lg-3 l-h-1_7 m-b-1-md_down">
					<div class="h5">
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['login_enter'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_catalog;?>
</span>
					</div>
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['c']->value->visible) {?>
					<div>
						<a class="link-white" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
catalog/<?php echo $_smarty_tpl->tpl_vars['c']->value->url;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</a>
					</div>
					<?php }?>
					<?php } ?>
				</div>
				<div class="clearfix hidden-lg-up"></div>
				
				<div class="col-xs-6 col-lg-3 l-h-1_7">
					<div class="h5">
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_contacts'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_contacts;?>
</span>
					</div>
					<div class="text-nowrap" data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_contacts_body'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_contacts_body;?>
</div>
				</div>
				
				<div class="col-xs-6 col-lg-3">
					<div class="h5">
						<span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_in_networks'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_in_networks;?>
</span>
					</div>
					<div>
						<a class="i-soc i-fb" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
#" target="_blank"></a>
						<a class="i-soc i-vk" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
#" target="_blank"></a>
						<a class="i-soc i-tw" href="<?php echo $_smarty_tpl->tpl_vars['lang_link']->value;?>
#" target="_blank"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--OkayCMS Lite-->
	
	<div class="container p-y-1">
		© <?php echo smarty_modifier_date_format(time(),"%Y");?>
. <!-- <a class="link-black" href="http://okay-cms.com" target="_blank"><span data-language="<?php echo $_smarty_tpl->tpl_vars['translate_id']->value['index_copyright'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value->index_copyright;?>
</span></a> -->
	</div>
	<script>
		jQuery(function(f){
			var element = f('#blfixed');
			f(window).scroll(function(){
				element['fade'+ (f(this).scrollTop() > 20 ? 'In': 'Out')](400);           
			});
		}); 
	</script>
</body>
</html><?php }} ?>
