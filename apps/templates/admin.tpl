{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
	<div id="admin" class="container-fluid">
	<div class="row adminTable">
	<a href="{$smarty.const.ROOT}filmo" class="btn btn-primary btn-lg btn-block">Editer la Filmographie</a>
	<a href="{$smarty.const.ROOT}quizz" class="btn btn-primary btn-lg btn-block">Editer les Quizzs</a>
	</div>
	</div>
{/block}