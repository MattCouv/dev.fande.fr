/*déclaration de variables*/

	/*variable pour add-quizz*/
	var $addQuizz=$("#addQuizz"),
	id_quizz=parseInt($addQuizz.find('input[name="idquizz"]').val()),
	id_question=parseInt($addQuizz.find('input[name="id_question"]').val()),
	questionContainer=$addQuizz.find('#questionContainer'),
	addQBtn=$addQuizz.find('#addQ'),
	addABtn,
	questions=1,
	reponses,
	reponse=1;




	/*variable pour quizz-question*/
	var $quizz=$(".quizzQuestionContainer"),
	submit=$quizz.find('#submit'),
	questionSize=parseInt($('input[name="questionSize"]').val());


	/*déclaration des évènements*/
	/*click event pour afficher l'input d'une question*/
	addQBtn.click(function(){
		questions++;
		_renderAddQuestion();
		define();
	});
	/*click event pour afficher le score apres avoir completé un quizz*/
	submit.click(function(){
		var score=getScore();
		rateScore(score);
	});
	/*déclaration des functions de render*/
	function _renderAddQuestion(){
		questionContainer.append('<div id="question'+questions+'">Question '+questions+' <input type="text" name="questions['+questions+'][TextQ]"><ul class="reponse"></ul>'+_renderAddAbtn()+'</div>');
	}
	function define(){
		reponses=$addQuizz.find('.reponse');
		addABtn=$addQuizz.find('.addA');_log(addABtn);
		addABtn.click(function(){
			_renderAddAswer($(this));
		});
	}
	function _renderAddAbtn(){
		var AddAbtn= "<a href='#' class='btn btn-default addA'>Ajouter une réponse</a>";
		return AddAbtn;
	}
	function _renderAddAswer(a){
		a.parent().find('.reponse').append("<li>Réponse "+reponse+" <input type='text' name='questions["+questions+"]["+reponse+"][textA]'></li>");
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