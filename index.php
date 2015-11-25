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

//== ajouter un billet =====================================
elseif ('add-post' == $command){
	//ajouter un billet
	addpost_action();
}

//== ajouter un billet =====================================
elseif('add-post-save'==$command){
	//sauvegarder le billet
	addpostsave_action();
	redirect('');
}
elseif ( 'delete-post' == $command && isset( $_POST['id'] ) )
{
	deletepost_action( (int) $_POST['id'] );
 	redirect('');
}

elseif ( 'edit-post' == $command && isset( $_GET['id'] ) )
{
 	editpost_action( (int) $_GET['id'] );
}
//== effacer un billet =====================================
elseif ( 'delete-post' === $command && isset($_GET['id']))
{
 delete_post((int) $_GET['id']);
 // retour page d'accueil
 header('Location: ' . ROOT);
}
//page 404
else{
	header('Status: 404 Not Found');
	echo "<html><body><h1>OUPS la commande n'est pas reconnue </h1></body></html>";
}
?>