<?php /* Smarty version Smarty-3.1.18, created on 2015-11-20 09:32:08
         compiled from "apps\templates\filmo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2002956459745517347-89253987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139b255fef15e069dea7d5932cc6528fbdf512d3' => 
    array (
      0 => 'apps\\templates\\filmo.tpl',
      1 => 1448008324,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1448006298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2002956459745517347-89253987',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56459745624c33_44390675',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56459745624c33_44390675')) {function content_56459745624c33_44390675($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>Fan de Filmographie</title>
	  <meta name="viewport" content="initial-scale=1.0">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- @@@ CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Averia+Sans+Libre:700' rel='stylesheet' type='text/css'>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo @constant('ROOT');?>
">FAN de ...</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo @constant('ROOT');?>
">Introduction</a></li>
					<li><a href="<?php echo @constant('ROOT');?>
filmo">Filmographie</a></li>
					<li><a href="<?php echo @constant('ROOT');?>
biblio">Bibliographie</a></li>
					<li><a href="<?php echo @constant('ROOT');?>
quizz">Le QUIZZ</a></li>
				</ul>
			</div>
		</div>
	</nav>

  

<div id="filmo">
<?php  $_smarty_tpl->tpl_vars['film'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['film']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['films']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['film']->key => $_smarty_tpl->tpl_vars['film']->value) {
$_smarty_tpl->tpl_vars['film']->_loop = true;
?>
	<section class="film row">
		<div class="year col-lg-1">
			<p class="vertical-text"><?php echo $_smarty_tpl->tpl_vars['film']->value['year'];?>
</p>
		</div>
		<div class="poster col-lg-4">
			<img src="assets/img/films/<?php echo $_smarty_tpl->tpl_vars['film']->value['poster'];?>
" class="img-polaroid"/>
			<p class="rate"> * * * * [4/5]</p>
		</div>
		<div class="infos col-lg-7">
			<p class="title"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</p>
			<p class="description">
			<span class="show"><?php echo $_smarty_tpl->tpl_vars['film']->value['shortdesc'];?>
<span class="click btn">...</span>
			<span class="hidden otherText">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></span>
			</p>
		</div>
	</section>
<?php } ?>
</div>




	<div class="footer center-block">
		<p>Projet MMI 2015-2016 - Fan de Martin SCORSESE.</p>
	</div>



  <!-- @@@ JS -->
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/vendor/aslider.js"></script>
  
</body>
</html><?php }} ?>
