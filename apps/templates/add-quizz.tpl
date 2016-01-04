{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
<div id="addQuizz">
	<div class="quizzEdit">
	<form method="post" action="save-quizz">
		<div class='form-group'><label>Titre du Quizz</label><input type="text" name="title"class='form-control'></div>
		<div id="questionContainer">
			<div data-question='1' class='question'><label>Question 1 </label><input type='text' name='questions[1][TextQ]'class='form-control'>
				<ul class='reponse'>
					<li data-answer='1' class='form-inline'><label>Réponse 1 </label><input type='text' name='questions[1][1][textA]'class='form-control'><input type='checkbox' name='questions[1][1][good]' class='checkbox'><-bonne réponse ?</li>
				</ul>
				<a href='#' class='btn btn-default addA'>Ajouter une réponse</a>
			</div>
		</div>
		<a href="#" id="addQ"class='btn btn-default'>Ajouter une question</a>
		<button class='btn btn-success'>Ajouter un quizz</button>
	</form>
	</div>
</div>
{/block}
{block name=quizzJs}
<script src="assets/js/addquizz.js"></script>
{/block}