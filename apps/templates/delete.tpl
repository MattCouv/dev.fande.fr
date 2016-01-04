{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
	<div id="delete">
	<div class="filmDel">
		<form method="post">
		<input type="hidden"name="id" value="{$smarty.get.id}">
		<input type="hidden"name="poster" value="{$smarty.get.poster}">
		<table>
			<tbody>
				<tr>
					<td>Valider</td>
					<td>Annuler</td>
				</tr>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}delete-film" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-ok"></span></button></td>
					<td><a href="{$smarty.const.ROOT}"class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>
			</tbody>
		</table>
		</form>
	</div>
	</div>
{/block}