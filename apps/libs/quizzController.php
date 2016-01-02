<?php
	function quizz_action(){
	global $smarty,$fpdo;
	$oQuizz = new Quizz( $fpdo );
	$quizzs = $oQuizz->getAll();
	$smarty->assign('quizzs', $quizzs );
	//Affichage
	$smarty->display('quizz.tpl');
}

//affiche la page pour jouer au quizz
function quizzquestion_action($id_quizz){
	global $smarty,$fpdo;
	$oQuestion = new Question($fpdo);
	$oAnswers = new Answers($fpdo);
	$questions=$oQuestion->getQ($id_quizz);
	$questionsLength=count($questions);
	$answers=[];
	foreach ($questions as $question) {
		$answers[$question["id"]]=$oAnswers->getA($question["id"]);
	}
	$smarty->assign('questions',$questions);
	$smarty->assign('questionSize',$questionsLength);
	$smarty->assign('answers',$answers);
	$smarty->display('quizz-question.tpl');

}
//affiche la page pour ajouter des quizz
function addquizz_action(){
	global $smarty,$fpdo;
	$smarty->display('add-quizz.tpl');
}
function addquizzsave_action($post)
{

	global $fpdo,$pdo;
	debug($post,'post');
	$title=['title'=>$post['title']];
	$questions=$post['questions'];
	debug($questions,'questions');

	$oQuizz = new Quizz( $fpdo );
	$id_quizz =$oQuizz->add($title);

	$oQuestion = new Question($fpdo);
	$id_questionA=[];
	foreach ($questions as $TextQ) {
		$paramQ=['TextQ'=>$TextQ,'id_quizz'=>$id_quizz];
		$id_question=$oQuestion->add($paramQ);
		$id_questionA[$id_question]=$id_question;
	}
	debug($id_questionA,'id_question');
}
?>