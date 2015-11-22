<?php /* Smarty version Smarty-3.1.18, created on 2015-09-29 09:26:40
         compiled from "apps\templates\lists-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11641560a3d305995b6-45877415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f30481cf06bd5453b49f16e158f0749bacbfe9' => 
    array (
      0 => 'apps\\templates\\lists-posts.tpl',
      1 => 1443510119,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1443508570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11641560a3d305995b6-45877415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560a3d3066c4b9_97578550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a3d3066c4b9_97578550')) {function content_560a3d3066c4b9_97578550($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>liste des messages</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/normalize.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  
  <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
  
<div class="container">
 <h1>Liste des messages</h1>
 <ul>
 <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
 <li>
 <h2><strong><?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
</strong> <span class="title"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</span> le
<span class="date"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</span></h2>
 <p class="excerpt"><?php echo $_smarty_tpl->tpl_vars['post']->value['excerpt'];?>
</p>
 <p class="content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
 </li>
 <?php } ?>
 </ul>
 </div>


  <!-- @@@ JS -->
  <script src="assets/js/main.js"></script>
  
</body>
</html><?php }} ?>
