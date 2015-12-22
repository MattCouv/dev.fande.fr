{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
	<div id="error">
	<div class="errorDel">
		<h1>OUPS la commande n'est pas reconnue </h1>
		<a href="{$smarty.const.ROOT}" class="btn btn-default">Veuillez réessayer</a>
	</div>
	</div>
{/block}