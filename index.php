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
// afficher la page de filmographie
elseif ('quizz' == $command){
	//afficher un billet
	quizz_action();
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
		debug($_SESSION['login'],'session');
		/*redirect('admin-login');*/
	}
}
//Permet de ce déconnecté de la session et la détruire
elseif ('logout'==$command) {
	unset($_SESSION["admin"]);
	session_destroy();
	// redirectionne vers l'index
	redirect('');
}
//afficher la page d'ajout de film
elseif ('add-film'==$command && $_SESSION['admin']) {

	addfilm_action();
}
elseif ('error'==$command) {

	error_action();
}

//== ajouter un film =====================================
elseif('manage-film-save'==$command && $_SESSION['admin']){
	//sauvegarder le film
	if ($_POST['id']=="") {
		$err=addfilmsave_action($_POST, $_FILES);
		if($err==true){
			redirect('error');
		}else{
			redirect('filmo');
		}
	}else{
		$err=editfilmsave_action($_POST, $_FILES);
		if($err==true){
			redirect('error');
		}else{
			redirect('filmo');
		}
	}
}

// edition d'un film existant
elseif ( 'edit-film' == $command && isset( $_POST['id'] ) && $_SESSION['admin'])
{
 	editfilm_action( (int) $_POST['id'] );
}
//== affiche page qui confirme la deletion  ==========================================
//==remove film ==============================================
elseif ('delete-film'==$command && $_SESSION['admin']){
	if(isset( $_GET['id'])){
		deletefilm_action($_GET['id'],null);
	}
	if (isset( $_POST['id'])) {
		deletefilm_action($_POST['id'],$_POST['poster']);
	}
}


elseif ('ajx-rate'==$command) {
	$rate = (int) $_POST['rate'];
	$idmovie = (int) $_POST['idmovie'];
	// lire les informations sur le films ($rates, $crates)
	$oMovie = new Movie( $fpdo );
	extract( $oMovie->get($idmovie) );
	// mettre à jour le vote du lien
	$crates = (int)$crates + 1;
	$rates = $rates * (1 - 1 / $crates) + $rate / $crates;
	$oMovie->edit($idmovie, array('crates' => $crates, 'rates' => $rates));
	echo number_format($rates, 1);
}

//page 404
else{
	header('Status: 404 Not Found');
	echo "<html><body><h1>OUPS la commande n'est pas reconnue </h1></body></html>";
}
?>