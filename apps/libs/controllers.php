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
//Affiche la page de la filmographie

function quizz_action(){
	global $smarty,$fpdo;
	$oQuizz = new Quizz( $fpdo );
	$quizzs = $oQuizz->selectAll();
	/*$id_quizz=[];
		for ($i=0; $i < sizeof($quizzs); $i++) {
			array_push($id_quizz, $quizzs[$i]['id']);
		}*/
	debug($quizzs,'quizzs');
	/*debug($id_quizz,'quizz id');*/
	/*question_action($id_quizz);*/
	//Affichage
	/*$smarty->display('quizz.tpl');*/
}
//get all question from id_quizz
function question_action($id_quizz){
	$oQuestion = new Question($fpdo);
	$params['where']="id_quizz".','.$id_quizz;
	$smarty->assign('questions', $oQuizz->getAll($params['where']));
}
//affiche le page de login de l'admin
function login_action(){
	global $smarty,$fpdo;
	//affichage
	$smarty->display('login.tpl');
}
//affiche la page de confirmation de suppression du film et supprime le film
function deletefilm_action($id,$image){
	global $smarty, $fpdo;
	if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
        $smarty->display('delete.tpl');
    }
	if ( !empty($_POST)) {
        // delete data
        $oMovie = new Movie( $fpdo );
		$oMovie->delete($id);
		deleteImage($image);
		/*redirect('filmo');*/
    }
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
	//verification si existance de l'image téléchargent isPosterSet
	list($err,$movie)=isPosterSet($file,$_POST);
	if ($err==true) {
		return $err;
	}else{
		$oMovie->add($movie);
		return $err;
	}
}
/**
 * [editfilm_action description]
 * @param  [int] $id [id du film que l'on veut editer $_POST['id']]
 * @return [type]     [description]
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
/**
 * [editfilmsave_action methode to edit a selected film]
 * @param  [array] $data [array content from $_POST]
 * @param  [array] $file [array content from $_file]
 * @return [type]       [description]
 */
function editfilmsave_action($data, $file){
	global $smarty, $fpdo;
	$oMovie = new Movie( $fpdo );
	//verification si existance de l'image téléchargent isPosterSet
	list($err,$movie)=isPosterSet($file,$_POST);
	if ($err==true) {
		return $err;
	}else{
		$oMovie->edit( $_POST['id'],$movie);
		return $err;
	}
}

?>