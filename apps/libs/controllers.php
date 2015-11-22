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
	//debug ( $oMovie, 'objet oMovie');
	//$oMovie->add(
		//array(
		//'title' => "Les affranchis",
		//'shortdesc' => "Le film est basé sur le livre Wiseguy, de Nicholas...",
		//'year' => 1990,
		//'poster' => "lesaffranchis.png"
		//)
	//);
	//$oMovie->delete(id);
	//Toujours déclarer la variables smarty
	$smarty->assign('films', $oMovie->getAll() );

	//Affichage
	$smarty->display('filmo.tpl');
}
//remove film from database
function deletefilm_action($id){
	global $smarty, $fpdo;
	$oPost = new Post( $fpdo );
	$oPost->delete($id);
}
function addpost_action(){
	global $smarty, $fpdo;
	$oPost = new Post( $fpdo );
	$oUser = new User( $fpdo );
	foreach( $oUser->getAll() as $user ) {
	$users[$user['id']] = $user['display_name'];
	 }
	 $smarty->assign( 'users', $users );
	 $smarty->display('add-post.tpl');
}
function addpostsave_action(){
	global $smarty, $fpdo;
	$oPost = new Post( $fpdo );
	$oUser = new User( $fpdo );
	$oPost->add($_POST);
	//addpost($_POST['title'],$_POST['excerpt'],$_POST['content']);
}
/**
* Edite un billet.
* param integer $id
*/
function editpost_action( $id ) {
 global $smarty, $fpdo;
 // préparer les données pour la liste des utilisateurs assocciés au billet
 $users = array();
 $oUser = new User( $fpdo );
 foreach( $oUser->getAll() as $user ) {
 $users[$user['id']] = $user['display_name'];
 }
 $smarty->assign('users', $users);
 $smarty->assign('userSelect', $post['user_id']);
 // récupérer les données sur le billet $id
 $oPost = new Post( $fpdo );
 $smarty->assign('post', $oPost->get( (int)$id ));
 // affichage
 $smarty->display('edit-post.tpl');
}
function editpostsave_action() {

}
?>