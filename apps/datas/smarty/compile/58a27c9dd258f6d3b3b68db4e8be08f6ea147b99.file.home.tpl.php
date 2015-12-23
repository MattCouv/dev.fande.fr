<?php /* Smarty version Smarty-3.1.18, created on 2015-12-23 14:31:08
         compiled from "apps\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23933566fbf7fe1ea01-07125248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58a27c9dd258f6d3b3b68db4e8be08f6ea147b99' => 
    array (
      0 => 'apps\\templates\\home.tpl',
      1 => 1450877466,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1450870495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23933566fbf7fe1ea01-07125248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566fbf7feae8a2_85791742',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566fbf7feae8a2_85791742')) {function content_566fbf7feae8a2_85791742($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>Michael BAY</title>
	  <meta name="viewport" content="initial-scale=1.0">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- @@@ CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/rateit.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Averia+Sans+Libre:700' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="wraper">
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
quizz">Le QUIZZ</a></li>
					<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']) {?>
						<li><a href="<?php echo @constant('ROOT');?>
admin-page">Administration</a></li>
						<li><a href="<?php echo @constant('ROOT');?>
logout">
							<span class="glyphicon glyphicon-lock"  aria-hidden="true"></span>
  						</a></li>
					<?php } else { ?>
					<li><a href="<?php echo @constant('ROOT');?>
admin-login">Login</a></li>
					<?php }?>

				</ul>
			</div>
		</div>
	</nav>
  

	<div id="welcome">
		<div class="top">
			<div id="home_slideshow" class="aslider" data-hide-controls>
			<?php  $_smarty_tpl->tpl_vars['film'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['film']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['films']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['film']->key => $_smarty_tpl->tpl_vars['film']->value) {
$_smarty_tpl->tpl_vars['film']->_loop = true;
?>
				<div class="aslide" data-duration="3">
					<img src="assets/img/films/<?php echo $_smarty_tpl->tpl_vars['film']->value['poster'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['film']->value['poster'];?>
" />
				</div>
			<?php } ?>
			</div>
			<p class="title">Fan de ... <span class="biggest">Michael BAY</span></p>
		</div>
		<div class="main">
		</hr>
			<p class="intro">Michael Benjamin Bay (né le 17 février 1965) est un réalisateur et producteur américain. Il est surtout connu pour avoir réalisé des films d'action et catastrophe avec un gros budget, caractérisés par leur utilisation massive d'effets spéciaux. Ses films, qui comprennent Bad Boys, Armageddon, Pearl Harbor, et Transformers, ont rapporté plus de quatre milliards de dollars dans le monde entier et ce malgré les critiques de cinéma hostiles à Bay. Il est cofondateur de la maison de production commerciale de l'Institut, alias The Institute for the Development of Enhanced Perceptual Awareness. Il est le cofondateur et copropriétaire de la maison d'effets spéciaux Digital Domain. Il est copropriétaire de Platinum Dunes, une maison de production qui a servi a réamorcer des films d'horreur cultes comme Vendredi 13, Massacre à la tronçonneuse et Freddy : Les Griffes de la nuit.
			</p>
			<a href="filmo"class="btn btn-primary btn-lg discover">Découvrir ...</a>
		</div>
	</div>




	<div class="footer">
		<p>Projet MMI 2015-2016 - Fan de Michael Bay.</p>
	</div>


</div>
  <!-- @@@ JS -->
<script src="assets/js/vendor/jquery.js"></script>
<script src="assets/js/vendor/transition.js"></script>
<script src="assets/js/vendor/collapse.js"></script>
<script src="assets/js/vendor/dropdown.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/vendor/aslider.js"></script>
<script src="assets/js/vendor/nanobar.js"></script>
<script src="assets/js/vendor/jquery.rateit.min.js"></script>
</body>
</html>
<?php }} ?>
