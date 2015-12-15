{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
	<div id="error">
	<div class="errorDel">
		<h1>Oups une error c'est produite lors de l'envoie de l'image.</h1>
		<a href="{$smarty.const.ROOT}filmo">Veuillez réessayer</a>
	</div>
	</div>
{/block}