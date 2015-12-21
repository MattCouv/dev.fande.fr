<?php /* Smarty version Smarty-3.1.18, created on 2015-12-20 18:11:09
         compiled from "apps\templates\quizz.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12805675434b9ce690-59733451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0f21c4e79e02913f181b7516d0ea0541e73b28' => 
    array (
      0 => 'apps\\templates\\quizz.tpl',
      1 => 1450631468,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1450531541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12805675434b9ce690-59733451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5675434bf245b0_92623531',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5675434bf245b0_92623531')) {function content_5675434bf245b0_92623531($_smarty_tpl) {?><!DOCTYPE html>
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
  

<div id="quizzs">
<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']) {?>
<div class="adminEdit"><a href="<?php echo @constant('ROOT');?>
add-quizz" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>Ajouter un quizz</div>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['quizz'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['quizz']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['quizzs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['quizz']->key => $_smarty_tpl->tpl_vars['quizz']->value) {
$_smarty_tpl->tpl_vars['quizz']->_loop = true;
?>
	<section class="quizz">
	
		<div class="quizzRow">
			<div class="quizzContainer">
				<div class="quizzHeader">
				<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']) {?>
					<div class="adminEdit container-fluid">
					<form method="post">
					<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['quizz']->value['id'];?>
">
					<table>
						<tbody>
							<tr>
								<td><button type="submit" formaction="<?php echo @constant('ROOT');?>
delete-quizz" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> Eliminer le quizz</td>
								<td><button type="submit" formaction="<?php echo @constant('ROOT');?>
edit-quizz"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le quizz</td>
							</tr>
						</tbody>
					</table>
					</form>
					</div>
				<?php }?>
					<h2><?php echo $_smarty_tpl->tpl_vars['quizz']->value['description'];?>
</h2>
				</div>
				<div class="quizzQuestionContainer">
					<h3>sdflkjghslkdjfhgkjsfdgmlkjdsfmlkjqmlkdjsf</h3>
					<p><input type="checkbox"> This is a check box</p>
					<p><input type="checkbox"> This is a check box</p>
					<p><input type="checkbox"> This is a check box</p>
					<p><input type="checkbox"> This is a check box</p>
				</div>
			</div>
			
		</div>
	</section>

	<?php } ?>
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
