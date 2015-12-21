{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="quizzs" class="container-fluid">
<section class="quizzContainer">

	<div class="quizzHeader">
		<h2>Quizz n°{$smarty.get.id}</h2>
	</div>
	<div class="quizzQuestionContainer">
		<form method="post">
			{foreach from=$questions item=question}
				<input type="checkbox">{$question.TextQ}
			{/foreach}
		</form>
	</div>
</section>
</div>
{/block}
