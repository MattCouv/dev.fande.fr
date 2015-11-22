<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 14:06:22
         compiled from "apps\templates\add-post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:474656136894e97fb5-37987693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53de4498fcf44f7a14c371d11f3b2647ac8331fc' => 
    array (
      0 => 'apps\\templates\\add-post.tpl',
      1 => 1444219517,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1443508570,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '474656136894e97fb5-37987693',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56136895057785_49042226',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56136895057785_49042226')) {function content_56136895057785_49042226($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'I:\\_xampp\\htdocs\\dev.blog-mmi.fr\\apps\\libs\\smarty\\plugins\\function.html_options.php';
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ajouter un billet</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/normalize.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  
  <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
  
<form action="add-post-save" method="post">
	<label for="title">Titre</label>
	<input type="text" id="title" name="title" size="50">
	<label for="excerpt">Résumer</label>
	<input type="text" id="excerpt" name="excerpt" size="50">
	<label for="content">Message</label>
	<textarea name="content" id="content" cols="50" rows="10"></textarea>
	<?php echo smarty_function_html_options(array('name'=>"user_id",'options'=>$_smarty_tpl->tpl_vars['users']->value),$_smarty_tpl);?>

	<input type="submit" value="Ajouter">
</form>


  <!-- @@@ JS -->
  <script src="assets/js/main.js"></script>
  
</body>
</html><?php }} ?>
