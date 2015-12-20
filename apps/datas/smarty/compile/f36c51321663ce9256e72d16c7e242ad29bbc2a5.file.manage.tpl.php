<?php /* Smarty version Smarty-3.1.18, created on 2015-12-20 01:02:33
         compiled from "apps\templates\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29842566fbfa578a922-24615483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f36c51321663ce9256e72d16c7e242ad29bbc2a5' => 
    array (
      0 => 'apps\\templates\\manage.tpl',
      1 => 1450162733,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1450531541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29842566fbfa578a922-24615483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_566fbfa5831346_08259851',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566fbfa5831346_08259851')) {function content_566fbfa5831346_08259851($_smarty_tpl) {?><!DOCTYPE html>
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
biblio">Bibliographie</a></li>
					<li><a href="<?php echo @constant('ROOT');?>
quizz">Le QUIZZ</a></li>
					<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']) {?>
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
  
<div id="addFilm">
	<div class="filmEdit">
	<form method="post" action="manage-film-save" enctype="multipart/form-data">
	<input type="hidden"name="id"value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['film']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
">
	  <div class="form-group">
	    <label for="title">Titre</label>
	    <input type="text" class="form-control" name="title" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['film']->value['title'])===null||$tmp==='' ? '' : $tmp);?>
">
	  </div>
	  <div class="form-group">
		  <label for="shortdesc">Résumé</label>
		  <textarea class="form-control" name="shortdesc" rows="3"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['film']->value['shortdesc'])===null||$tmp==='' ? '' : $tmp);?>
</textarea>
	  </div>
	  <div class="form-group">
	    <label for="year">Année</label>
	    <input type="text" class="form-control" name="year" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['film']->value['year'])===null||$tmp==='' ? '' : $tmp);?>
">
	  </div>
	  <div class="poster">
	  		<img id="blah" src="#" alt="lol">
			<img id="right"src="assets/img/films/<?php echo $_smarty_tpl->tpl_vars['film']->value['poster'];?>
" class="img-polaroid"/>
	</div>
	  <div class="form-group">
	    <label for="poster">Fichier poster</label>
	    <input type="file" id="imgInp" name="poster">
	  </div>
	  <button type="submit" class="btn btn-default">Ajouter</button><span><a href="<?php echo @constant('ROOT');?>
filmo">Annuler</a></span>
	</form>
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
<script src="assets/js/vendor/jquery.rateit.min.js"></script>
</body>
</html>
<?php }} ?>
