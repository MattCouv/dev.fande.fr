<?php /* Smarty version Smarty-3.1.18, created on 2016-01-01 21:38:35
         compiled from "apps\templates\add-quizz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312175685613d208547-63479541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89f1682a954c20e10b3880f619574672f440c94b' => 
    array (
      0 => 'apps\\templates\\add-quizz.tpl',
      1 => 1451680714,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1451062441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '312175685613d208547-63479541',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5685613d24d6a9_22596360',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5685613d24d6a9_22596360')) {function content_5685613d24d6a9_22596360($_smarty_tpl) {?><!DOCTYPE html>
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
  
<div id="addQuizz">
	<div class="quizzEdit">
	<form method="post" action="save-quizz">
		<label>Quizz <input type="text" name="title"></label>
		<div id="questionContainer">
			<div data-question='1' class="question">Question 1 <input type="text" name="questions[1][TextQ]">
				<ul class="reponse">
					<li data-answer='1'>Réponse 1 <input type='text' name='questions[1][1][textA]'></li>
				</ul>
				<a href='#' class='btn btn-default addA'>Ajouter une réponse</a>
			</div>
		</div>
		<a href="#" id="addQ"class='btn btn-default'>Ajouter une question</a>
		<button>Ajouter un quizz</button>
	</form>
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

<script src="assets/js/quizz.js"></script>

<script src="assets/js/main.js"></script>
<script src="assets/js/vendor/aslider.js"></script>
<script src="assets/js/vendor/nanobar.js"></script>
<script src="assets/js/vendor/jquery.rateit.min.js"></script>
</body>
</html>
<?php }} ?>
