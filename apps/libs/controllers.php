<?php
// Affiche la page d'acceuil

function home_action() {
 global $smarty;
   // affichage
 $smarty->display('home.tpl');
}

//Affiche la page de la filmographie

function filmo_action(){
	global $smarty,$fpdo;
	$oMovie = new Movie( $fpdo );
	$smarty->assign('films', $oMovie->getAll() );

	//Affichage
	$smarty->display('filmo.tpl');
}

//affiche le page de login de l'admin
function login_action(){
	global $smarty,$fpdo;
	//affichage
	$smarty->display('login.tpl');
}
//affiche la page de confirmation de suppression du film
function deletefilm_action(){
	global $smarty;
	$smarty->display('deleteConf.tpl');
}
//confirmation remove film from database
function deletefilmconf_action($id,$image){
	global $smarty, $fpdo;
	$oMovie = new Movie( $fpdo );
	$oMovie->delete($id);
	deleteImage($image);
}
function addfilm_action(){
	global $smarty;

	$smarty->display('manage.tpl');
}
function error_action(){
	global $smarty;

	$smarty->display('error.tpl');
}
function addfilmsave_action($data, $file){
	global $smarty, $fpdo;
	$oMovie = new Movie( $fpdo );
	list($err,$movie)=isposterset($file,$_POST);
	if ($err==true) {
		return $err;
	}else{
		$oMovie->add($movie);
		return $err;
	}
}
/**
* Edite un billet.
* param integer $id
*/
function editfilm_action( $id ) {
 global $smarty, $fpdo;
 // préparer les données pour la liste des utilisateurs assocciés au billet
 $oMovie = new Movie( $fpdo );
 // récupérer les données sur le billet $id
 $smarty->assign('film', $oMovie->get( (int)$id ));
 // affichage
 $smarty->display('manage.tpl');
}

function editfilmsave_action($data, $file){
	global $smarty, $fpdo;
	$oMovie = new Movie( $fpdo );

	list($err,$movie)=isposterset($file,$_POST);
	if ($err==true) {
		return $err;
	}else{
		$oMovie->edit( $_POST['id'],$movie);
		return $err;
	}
}

?>