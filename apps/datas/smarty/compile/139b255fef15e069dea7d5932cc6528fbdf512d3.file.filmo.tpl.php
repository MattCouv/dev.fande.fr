<?php /* Smarty version Smarty-3.1.18, created on 2015-12-07 20:01:07
         compiled from "apps\templates\filmo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2262456580bad71f2f7-36941646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139b255fef15e069dea7d5932cc6528fbdf512d3' => 
    array (
      0 => 'apps\\templates\\filmo.tpl',
      1 => 1449514345,
      2 => 'file',
    ),
    '58c18a15a0834003006d3aa17db8045e0c959e4c' => 
    array (
      0 => 'apps\\templates\\layout.tpl',
      1 => 1448817256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2262456580bad71f2f7-36941646',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_56580bad7eb6b6_32790075',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56580bad7eb6b6_32790075')) {function content_56580bad7eb6b6_32790075($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\dev.fande.fr\\apps\\libs\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
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

  

<div id="filmo">
<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']) {?>
<div class="adminEdit"><a href="<?php echo @constant('ROOT');?>
add-film" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>Ajouter un film</div>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['film'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['film']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['films']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['film']->key => $_smarty_tpl->tpl_vars['film']->value) {
$_smarty_tpl->tpl_vars['film']->_loop = true;
?>
<hr>
	<section class="film">
	<?php if (isset($_SESSION['admin'])&&$_SESSION['admin']) {?>
		<div class="adminEdit container-fluid">
		<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['film']->value['id'];?>
">
		<table>
			<tbody>
				<tr>
					<td><button type="submit" formaction="delete-film" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> Eliminer le film</td>
					<td><button type="submit" formaction="edit-film"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le film</td>
				</tr>
			</tbody>
		</table>
		</form>
		</div>
	<?php }?>
		<div class="row">
		<div class="year col-xs-2 col-md-1">
			<p ><h1 class="vertical-text"><?php echo $_smarty_tpl->tpl_vars['film']->value['year'];?>
</h1></p>
		</div>
		<div class="poster col-xs-10 col-md-5">
			<img src="assets/img/films/<?php echo $_smarty_tpl->tpl_vars['film']->value['poster'];?>
" class="img-polaroid"/>
			<p class="rate"> <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['film']->value['rates']+1 - (1) : 1-($_smarty_tpl->tpl_vars['film']->value['rates'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>*
			<?php }} ?>[<?php echo $_smarty_tpl->tpl_vars['film']->value['rates'];?>
/5]</p>
		</div>
		<div class="infos col-xs-12 col-md-6">
			<p class="title"><?php echo $_smarty_tpl->tpl_vars['film']->value['title'];?>
</p>
			<hr>
			<p class="description">
			<span class="show cat70"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['film']->value['shortdesc'],70,'',true);?>

			<span class="hidden fullDesc"><?php echo substr($_smarty_tpl->tpl_vars['film']->value['shortdesc'],80,500);?>
</span>
			<span class="click btn btn-default btn-xs">...</span></span>
			</p>
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

</body>
</html><?php }} ?>
