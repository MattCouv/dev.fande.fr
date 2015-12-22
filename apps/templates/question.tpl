{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="quizzs" class="container-fluid">
<section class="quizzContainer">

	<div class="quizzHeader">
		<h2>Quizz n°{$smarty.post.id}</h2>
	</div>
	<div class="quizzQuestionContainer">
		<form method="post">
			{foreach from=$questions item=question}
				<h2>{$question.TextQ}</h2>
				{foreach from=$answers item=answer}
				<p>{$answer.TextA}</p>
				{/foreach}
			{/foreach}
		</form>
	</div>
</section>
</div>
{/block}
