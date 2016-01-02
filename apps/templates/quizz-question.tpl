{extends file="layout.tpl"}
{block name=title}Fan de Quizz{/block}
{block name=body}

<div id="quizzs" class="container-fluid">
<section class="quizzContainer">

	<div class="quizzHeader">
		<h2>{$smarty.post.quizztitle}</h2>
	</div>
	<div class="quizzQuestionContainer">
	<form action=""method="post">
		<input type="hidden" name="questionSize" value="{$questionSize}">
		{foreach from=$questions item=question}
		<h2 id="TextQ">{$question.TextQ}</h2>
		<div class="question">
			{foreach from=$answers[$question.id] item=answer}
			<p><label><input class="answer" type='radio' name='answer{$question.id}' value='{$answer.good}'>{$answer.textA}</label></p>
			{/foreach}
		</div>
		{/foreach}
	</form>
	<button id="submit">Envoyer</button>
	</div>
</section>
</div>
{/block}
{block name=quizzJs}
<script src="assets/js/quizz.js"></script>
{/block}