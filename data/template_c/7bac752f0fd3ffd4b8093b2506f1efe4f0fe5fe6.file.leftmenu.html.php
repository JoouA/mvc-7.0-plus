<?php /* Smarty version Smarty-3.1.16, created on 2017-05-29 22:40:39
         compiled from "tpl\admin\leftmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:30274592c32e7a4c642-71108048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bac752f0fd3ffd4b8093b2506f1efe4f0fe5fe6' => 
    array (
      0 => 'tpl\\admin\\leftmenu.html',
      1 => 1494223239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30274592c32e7a4c642-71108048',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_592c32e7a51838_82265353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592c32e7a51838_82265353')) {function content_592c32e7a51838_82265353($_smarty_tpl) {?><aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="index.php?controller=admin&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="index.php?controller=admin&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="index.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }} ?>
