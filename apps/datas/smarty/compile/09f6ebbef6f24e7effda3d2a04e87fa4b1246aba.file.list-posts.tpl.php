<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 14:44:38
         compiled from "apps\templates\list-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117425613664b405121-58499348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09f6ebbef6f24e7effda3d2a04e87fa4b1246aba' => 
    array (
      0 => 'apps\\templates\\list-posts.tpl',
      1 => 1444221875,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1443508570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117425613664b405121-58499348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5613664b6ed601_30390836',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613664b6ed601_30390836')) {function content_5613664b6ed601_30390836($_smarty_tpl) {?><!DOCTYPE html>
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
 <form action="<?php echo @constant('ROOT');?>
delete-post" method="post">
 <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" />
 <button class="btn btn-primary">Effacer</button>
 </form>
 <form action="<?php echo @constant('ROOT');?>
edit-post" method="get">
 <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
" />
 <button class="btn btn-primary">Edit</button>
 </form>
 </li>
 <?php } ?>
 </ul>

 </div>


  <!-- @@@ JS -->
  <script src="assets/js/main.js"></script>
  
</body>
</html><?php }} ?>
