(function($){
	$(function(){

	/*déclaration de variables*/

	/*variable pour add-quizz*/
	var $addQuizz=$("#addQuizz"),
	addQBtn=$addQuizz.find('#addQ'),
	addABtn=$addQuizz.find('.addA');

	/*déclaration des évènements*/
	/*click event pour afficher l'input d'une question*/
	addQBtn.click(function(){
		var $this=$(this);
		var $questionNumber=parseInt($this.prev().find('.question:last').data('question'));
		$this.prev().append(_renderAddQuestion($questionNumber));
		addABtn2=$this.prev().find('.question:last').find('.addA');
		addABtn2.click(addAnswer);
	});

	addABtn.click(addAnswer);

	function addAnswer(){
		var $this=$(this);
		var $reponseNumber = parseInt($this.parent().find('.reponse').find('li:last').data('answer'));
		var $questionNumber=parseInt($this.parent().data('question'));
		$this.parent().find('.reponse').append(_renderAddAswer($reponseNumber,$questionNumber));
	}

	/*déclaration des functions de render*/
	function _renderAddQuestion($questionNumber){
		return question="<div data-question='"+($questionNumber+1)+"' class='question'><label>Question "+($questionNumber+1)+" </label><input type='text' name='questions["+($questionNumber+1)+"][TextQ]'class='form-control'><ul class='reponse'><li data-answer='1'  class='form-inline'><label>Réponse 1 </label><input type='text' name='questions["+($questionNumber+1)+"][1][textA]' class='form-control'><input type='checkbox' name='questions["+($questionNumber+1)+"][1][good]'class='checkbox'><-bonne réponse ?</li></ul><a href='#' class='btn btn-default addA'>Ajouter une réponse</a></div>";
	}
	function _renderAddAswer($reponseNumber,$questionNumber){
		return reponse="<li data-answer='"+($reponseNumber+1)+"' class='form-inline'><label>Réponse "+($reponseNumber+1)+" </label><input type='text' name='questions["+$questionNumber+"]["+($reponseNumber+1)+"][textA]' class='form-control'><input type='checkbox' name='questions["+$questionNumber+"]["+($reponseNumber+1)+"][good]'class='checkbox'><-bonne réponse ?</li>";
	}




	function _log(data){
		console.log(data);
	}

});
})(jQuery);
