<?php /* Smarty version Smarty-3.1.18, created on 2015-12-15 08:21:35
         compiled from "apps\templates\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23933566fbf7fe1ea01-07125248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58a27c9dd258f6d3b3b68db4e8be08f6ea147b99' => 
    array (
      0 => 'apps\\templates\\home.tpl',
      1 => 1448835415,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1450163880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23933566fbf7fe1ea01-07125248',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566fbf7feae8a2_85791742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566fbf7feae8a2_85791742')) {function content_566fbf7feae8a2_85791742($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>Martin SCORSESE</title>
	  <meta name="viewport" content="initial-scale=1.0">
	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- @@@ CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/rateit.css">
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
biblio">Bibliographie</a></li>
					<li><a href="<?php echo @constant('ROOT');?>
quizz">Le QUIZZ</a></li>
					<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']) {?>
						<li><a href="<?php echo @constant('ROOT');?>
logout">
							<div class="icon-lock" style="float: left">
							    <div class="lock-top-1" style="background-color: #E5E9EA"></div>
							    <div class="lock-top-2"></div>
							    <div class="lock-body" style="background-color: #E5E9EA"></div>
							    <div class="lock-hole"></div>
	  						</div>
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
				<div class="aslide" data-duration="2">
					<img src="assets/img/films/casino.jpg" alt="Gang of New York xxx - 3000 -" />
				</div>
				<div class="aslide" data-duration="2">
					<img src="assets/img/films/casino.jpg" alt="Shutter Island - 2010 -" />
				</div>
				<div class="aslide" data-duration="2">
					<img src="assets/img/films/casino.jpg" alt="Casino - 1995 -" />
				</div>
				<div class="aslide" data-duration="2">
					<img src="assets/img/films/lesaffranchis.jpg" alt="Les affranchis - 1990 -" />
				</div>
				<div class="aslide" data-duration="2">
					<img src="assets/img/films/ragingbull.jpg" alt="Raging Bull - 1980 -" />
				</div>
			</div>
			<p class="title">Fan de ... <span class="biggest">Martin SCORSESE</span></p>
		</div>
		<div class="main">
		</hr>
			<p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam faucibus blandit arcu a sagittis. Suspendisse nisi erat, accumsan vel mattis non, rhoncus sit amet turpis. Vestibulum erat arcu, porta eget cursus eu, posuere congue elit. Fusce dolor diam, luctus non molestie quis, maximus a sapien. Nullam felis neque, sodales in vulputate at, accumsan et nulla. Maecenas accumsan rhoncus orci, euismod efficitur tortor lacinia sed. Etiam risus quam, pellentesque vitae eros eu, malesuada congue tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed dignissim molestie ex, in mollis velit elementum vel. Pellentesque pellentesque dolor ac arcu porttitor auctor. Nulla a enim ut nulla condimentum rhoncus consectetur vitae nisi. Sed in semper nisi. Nullam quis diam ligula. Nam mollis dictum eros id pharetra.
			</p>
			<a class="btn btn-primary btn-lg discover">Découvrir ...</a>
		</div>
	</div>




	<div class="footer">
		<p>Projet MMI 2015-2016 - Fan de Martin SCORSESE.</p>
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
<script src="/assets/js/vendor/jquery.rateit.min.js"></script>
</body>
</html>
<?php }} ?>
