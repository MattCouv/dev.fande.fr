<?php /* Smarty version Smarty-3.1.18, created on 2015-12-23 12:59:23
         compiled from "apps\templates\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265745679333a0c5f97-67664519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e9cab9d32f4ae00b99f6c99078c173934ec4d5c' => 
    array (
      0 => 'apps\\templates\\admin.tpl',
      1 => 1450784014,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1450870495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265745679333a0c5f97-67664519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5679333a11fc23_74073384',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5679333a11fc23_74073384')) {function content_5679333a11fc23_74073384($_smarty_tpl) {?><!DOCTYPE html>
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
  
	<div id="admin" class="container-fluid">
	<div class="row adminTable">
	<a href="<?php echo @constant('ROOT');?>
filmo" class="btn btn-primary btn-lg btn-block">Editer la Filmographie</a>
	<a href="<?php echo @constant('ROOT');?>
quizz" class="btn btn-primary btn-lg btn-block">Editer les Quizzs</a>
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
