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
	//utilisé tamporairement pour ajouter a la base de donnée des film
	/*debug ( $oMovie, 'objet oMovie');
	$oMovie->add(
		array(
		'title' => "Les affranchis",
		'shortdesc' => "Le film est basé sur le livre Wiseguy, de Nicholas...",
		'year' => 1990,
		'poster' => "lesaffranchis.png"
		)
	);
	$oMovie->delete(id);*/
	//Toujours déclarer la variables smarty
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
function deletefilmconf_action($id){
	global $smarty, $fpdo;
	$oMovie = new Movie( $fpdo );
	$oMovie->delete($id);
}
function addfilm_action(){
	global $smarty;

	$smarty->display('manage.tpl');
}
function addfilmsave_action($_POST, $_FILES){
	global $smarty, $fpdo;
	$dir2save = ROOT_DIR . '/assets/img/films';
	debug( $dir2save, "dossier d'enregistrement" );
	$image_source = $file['poster']['tmp_name'];
	$image_dest = "$dir2save/{$file['poster']['name']}";
	if (move_uploaded_file( $image_source, $image_dest )) {
	debug( "Le fichier est valide; il a été téléchargé avec succès. \n" );
	} else {
	debug( " PROBLÈME pendant le téléchargement du fichier!!\n" );
	}
	$oMovie = new Movie( $fpdo );
	$oMovie->add(
		array(
		'title' => $_POST['title'],
		'shortdesc' => $_POST['shortdesc'],
		'year' => $_POST['year'],
		'rates'=>$_POST['rates']
		)
	);
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

function editfilmsave_action(){
	global $smarty, $fpdo;
	$oMovie = new Movie( $fpdo );
	$oMovie->edit( $_POST['id'],
		array(
		'title' => $_POST['title'],
		'shortdesc' => $_POST['shortdesc'],
		'year' => $_POST['year'],
		'rates'=>$_POST['rates']
		)
	);
}
?>