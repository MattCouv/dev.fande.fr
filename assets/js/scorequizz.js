(function($){
	$(function(){
	/*déclaration de variables*/

	var $quizz=$(".quizzQuestionContainer"),
	submit=$quizz.find('#submit'),
	questionSize=parseInt($('input[name="questionSize"]').val());


	/*déclaration des évènements*/

	/*click event pour afficher le score apres avoir completé un quizz*/
	submit.click(function(){
		var score=getScore();
		rateScore(score);
	});
	/*déclaration des functions de render*/
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

})(jQuery);