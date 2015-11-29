<?php

$uri = isset($_SERVER['REDIRECT_URL']) ? $_SERVER['REDIRECT_URL'] :  $_SERVER['REQUEST_URI'];
//charge et initiale les bibliotheques globales
include( 'setting.inc.php');

//route de la requete interne
$command = get_command();

//== afficher la page d'acceuil de Fan de
if (''==$command){
	//afficher les billets
	home_action();
}

// afficher la page de filmographie
elseif ('filmo' == $command){
	//afficher un billet
	filmo_action();
}
//affiche la page de login de l'admin
elseif ('admin-login' == $command){
	//afficher un billet
	login_action();
}
//vérifie si les paramètre entré son correcte et créer un connexion
elseif ('login-check' == $command && isset( $_POST['admin_name'] ) && isset( $_POST['admin_pwd'] )){

	//user et pwd envoyer par POST
	$user=$_POST['admin_name'];
	$pwd=sha1($_POST['admin_pwd']);
	//protection contre injection SQL
	$user = stripslashes($user);
	$user = mysql_real_escape_string($user);
	//recupère les parametres de login pour conparaison
	$oParameter= new Parameter($fpdo);
	$admin_name=$oParameter->getParam('admin_name');
	$admin_pwd=$oParameter->getParam('admin_pwd');
	//Compare les parametre récupéré et les compare a ceux entré
	if($user==$admin_name && $pwd==$admin_pwd){
		//si c'est bon redirectionne vers la page filmo
		redirect('filmo');
		//inicialise une variable session login et admin
		$_SESSION['login'] = true;
		$_SESSION['admin'] = true;
	}else{
		// si ça ne fonctionne pas redirestionne vers admin login
		redirect('admin-login');
	}
}
//Permet de ce déconnecté de la session et la détruire
elseif ('logout'==$command) {
	session_start();
	unset($_SESSION["admin"]);
	session_destroy();
	// redirectionne vers l'index
	redirect('');
}
//afficher la page d'ajout de film
elseif ('add-film'==$command) {
	addfilm_action();
}

//== ajouter un film =====================================
elseif('add-film-save'==$command){
	//sauvegarder le film
	addfilmsave_action();
	redirect('filmo');
}
//== affiche page qui confirme la deletion  ===========================================
elseif ('delete-film'==$command && isset( $_GET['id'])){
	deletefilm_action( (int) $_GET['id'] );
}
//==remove film ==============================================
elseif ( 'delete-film-save' == $command && isset( $_GET['id'] ) )
{
	deletefilmconf_action( (int) $_GET['id'] );
 	redirect('filmo');
}

elseif ( 'edit-film' == $command && isset( $_GET['id'] ) )
{
 	editfilm_action( (int) $_GET['id'] );
}


//page 404
else{
	header('Status: 404 Not Found');
	echo "<html><body><h1>OUPS la commande n'est pas reconnue </h1></body></html>";
}
?>