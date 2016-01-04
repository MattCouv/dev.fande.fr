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
function deletequizz_action()
{
	global $smarty;
	$smarty->display('deleteQuizz.tpl');
}
function deletequizzsave_action()
{
	global $fpdo;
	$id_quizz=$_GET['id'];
	$oQuizz = new Quizz( $fpdo );
	$oQuestion = new Question($fpdo);
	$oAnswers = new Answers($fpdo);
	$oQuizz->delete($id_quizz);
	$questions=$oQuestion->getQ($id_quizz);
	foreach ($questions as $question) {
		$oAnswers->delA($question['id']);
	}
	$oQuestion->delQ($id_quizz);
}

function addquizzsave_action($post)
{
	global $fpdo,$pdo;
	$title=['title'=>$post['title']];
	$questions=$post['questions'];

	$oQuizz = new Quizz( $fpdo );
	$oQuestion = new Question($fpdo);
	$oAnswers = new Answers($fpdo);
	/*recuperation de l'identifiant du quizz*/
	$id_quizz =$oQuizz->add($title);
	/*iteration de chaque questions du quizz*/
	foreach ($questions as $question) {
		/*configuration de param de la question a ajouter*/
		$paramQ=['TextQ'=>$question['TextQ'],'id_quizz'=>$id_quizz];
		/*recuparation de l'indentifiant de la question*/
		$id_question=$oQuestion->add($paramQ);
		/*iteration de chaque reponses de chaque questions*/
		foreach ($question as $answer) {
			/*si il y a bien un parametre $answer['textA']*/
			if (isset($answer['textA'])) {
				if (is_null($answer['good'])) {
					$paramA=['textA'=>$answer['textA'],'good'=>0,'id_question'=>$id_question];
				}else{
					$paramA=['textA'=>$answer['textA'],'good'=>1,'id_question'=>$id_question];
				}
				$oAnswers->add($paramA);
			}
		}
	}
}
?>