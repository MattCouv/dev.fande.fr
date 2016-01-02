<?php /* Smarty version Smarty-3.1.18, created on 2015-12-30 12:11:11
         compiled from "apps\templates\quizz-question.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9956567adce38f6e02-66199922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13384c82e6f6f2ac7dbaf8022b8d1c4bd4cda4fd' => 
    array (
      0 => 'apps\\templates\\quizz-question.tpl',
      1 => 1451473870,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1451062441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9956567adce38f6e02-66199922',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_567adce3942b66_67057775',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567adce3942b66_67057775')) {function content_567adce3942b66_67057775($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lte IE 7]> <html class="no-js ie67 ie678" lang="fr"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 ie678" lang="fr"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="fr"> <![endif]-->
<!--[if gt IE 9]> <!--><html class="no-js" lang="fr"> <!--<![endif]-->
<head>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <title>Fan de Quizz</title>
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
  

<div id="quizzs" class="container-fluid">
<section class="quizzContainer">

	<div class="quizzHeader">
		<h2><?php echo $_POST['quizztitle'];?>
</h2>
	</div>
	<div class="quizzQuestionContainer">
	<form action=""method="post">
		<input type="hidden" name="questionSize" value="<?php echo $_smarty_tpl->tpl_vars['questionSize']->value;?>
">
		<?php  $_smarty_tpl->tpl_vars['question'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['question']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['questions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['question']->key => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
?>
		<h2 id="TextQ"><?php echo $_smarty_tpl->tpl_vars['question']->value['TextQ'];?>
</h2>
		<div class="question">
			<?php  $_smarty_tpl->tpl_vars['answer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['answer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['answers']->value[$_smarty_tpl->tpl_vars['question']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['answer']->key => $_smarty_tpl->tpl_vars['answer']->value) {
$_smarty_tpl->tpl_vars['answer']->_loop = true;
?>
			<p><label><input class="answer" type='radio' name='answer<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['answer']->value['good'];?>
'><?php echo $_smarty_tpl->tpl_vars['answer']->value['textA'];?>
</label></p>
			<?php } ?>
		</div>
		<?php } ?>
	</form>
	<button id="submit">Envoyer</button>
	</div>
</section>
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
