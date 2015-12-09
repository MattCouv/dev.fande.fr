<?php /* Smarty version Smarty-3.1.18, created on 2015-12-09 16:22:26
         compiled from "apps\templates\deleteConf.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4955565b742973ecc3-51261084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f3296205db7bdb78ec119b0064e94fc1aaae66a' => 
    array (
      0 => 'apps\\templates\\deleteConf.tpl',
      1 => 1449674519,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1448835415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4955565b742973ecc3-51261084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_565b74297820d6_31887370',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565b74297820d6_31887370')) {function content_565b74297820d6_31887370($_smarty_tpl) {?><!DOCTYPE html>
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

  
	<div id="delete">
	<div class="filmDel">
		<form method="post">
		<input type="hidden"name="id" value="<?php echo $_POST['id'];?>
">
		<input type="hidden"name="poster" value="<?php echo $_POST['poster'];?>
">
		<table>
			<tbody>
				<tr>
					<td>Valider</td>
					<td>Annuler</td>
				</tr>
				<tr>
					<td><button type="submit" formaction="delete-film-save" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-ok"></span></button></td>
					<td><a href="filmo"class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>
			</tbody>
		</table>
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

</body>
</html><?php }} ?>
