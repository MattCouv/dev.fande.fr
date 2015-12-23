{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="quizzs" class="container-fluid">
<section class="quizzContainer">

	<div class="quizzHeader">
		<h2>{$smarty.post.title}</h2>
	</div>
	<div class="quizzQuestionContainer">
		<form method="post">
			{foreach from=$questions item=question}
				<h2>{$question.TextQ}</h2>
				{foreach from=$answers[$question.id] item=answer}
				<p><input type="radio">{$answer.textA}</p>
				{/foreach}
			{/foreach}
			<button type="submit">Valider</button>
		</form>
	</div>
</section>
</div>
{/block}
