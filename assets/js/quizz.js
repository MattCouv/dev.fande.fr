$(function(){

	/*déclaration de variables*/

	/*variable pour add-quizz*/
	var $addQuizz=$("#addQuizz"),
	id_quizz=parseInt($addQuizz.find('input[name="idquizz"]').val()),
	id_question=parseInt($addQuizz.find('input[name="id_question"]').val()),
	questionContainer=$addQuizz.find('#questionContainer'),
	addQBtn=$addQuizz.find('#addQ'),
	addABtn=$addQuizz.find('.addA'),
	question=1,
	reponses,
	reponse=1;


	/*variable pour quizz-question*/
	var $quizz=$(".quizzQuestionContainer"),
	submit=$quizz.find('#submit'),
	questionSize=parseInt($('input[name="questionSize"]').val());

	/*déclaration des évènements*/
	/*click event pour afficher l'input d'une question*/
	addQBtn.click(function(){
		question++;
		_renderAddQuestion();
	});
	addABtn.click(function(){
		_renderAddAswer($(this));
	});
	/*click event pour afficher le score apres avoir completé un quizz*/
	submit.click(function(){
		var score=getScore();
		rateScore(score);
	});
	/*déclaration des functions de render*/
	function _renderAddQuestion(){
		questionContainer.append('<div data-question="'+question+'" class="question">Question '+question+' <input type="text" name="questions['+question+'][TextQ]"><ul class="reponse"></ul></div>');
		addABtn.clone().appendTo('.question');
	}
	function _renderAddAswer(a){
		a.parent().find('.reponse').append("<li data-answer='1'>Réponse 1 <input type='text' name='questions["+question+"][1][textA]'></li>");
	}




	function _log(data){
		console.log(data);
	}
	function rateScore(score){
		if(score===questionSize){
			_log("congrats you won");
		}
		if(score>=questionSize/2 && questionSize>score){
			_log("almost there");
		}
		if(score!==0 && questionSize/2>score){
			_log("you can do better");
		}
		if(score===0){
			_log("did you even try");
		}
	}
	function getScore(){
		_log(questionSize);
		var total=0;
		var $answer=$('.answer:checked').each(function(){
			total+=parseInt($(this).val());
		});
		_log(total);
		return total;
	}

});