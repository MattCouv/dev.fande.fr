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
function addfilmsave_action(){
	global $smarty, $fpdo;
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
/*function editfilm_action( $id ) {
 global $smarty, $fpdo;
 // préparer les données pour la liste des utilisateurs assocciés au billet
 $users = array();
 $films = array();
 $oUser = new User( $fpdo );
 $oMovie = new Movie( $fpdo );
 foreach( $oUser->getAll() as $user ) {
 foreach( $oMovie->getAll() as $film ) {
 $users[$user['id']] = $user['display_name'];
 $films[$film['id']] = $film['display_name'];
 }
 $smarty->assign('users', $users);
 $smarty->assign('userSelect', $post['user_id']);
 // récupérer les données sur le billet $id
 $oPost = new Post( $fpdo );
 $smarty->assign('post', $oPost->get( (int)$id ));
 // affichage
 $smarty->display('manage.tpl');
}
function editpostsave_action() {

}*/
?>