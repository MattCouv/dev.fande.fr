{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
<div id="addQuizz">
	<div class="quizzEdit">
	<form method="post" action="save-quizz">
		<label>Quizz <input type="text" name="title"></label>
		<div id="questionContainer">
			<div data-question='1' class="question">Question 1 <input type="text" name="questions[1][TextQ]">
				<ul class="reponse">
					<li data-answer='1'>Réponse 1 <input type='text' name='questions[1][1][textA]'></li>
				</ul>
				<a href='#' class='btn btn-default addA'>Ajouter une réponse</a>
			</div>
		</div>
		<a href="#" id="addQ"class='btn btn-default'>Ajouter une question</a>
		<button>Ajouter un quizz</button>
	</form>
	</div>
</div>
{/block}
{block name=quizzJs}
<script src="assets/js/quizz.js"></script>
{/block}