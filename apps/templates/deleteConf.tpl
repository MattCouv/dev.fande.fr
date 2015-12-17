{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
	<div id="delete">
	<div class="filmDel">
		<form method="post">
		<input type="hidden"name="id" value="{$smarty.post.id}">
		<input type="hidden"name="poster" value="{$smarty.post.poster}">
		<table>
			<tbody>
				<tr>
					<td>Valider</td>
					<td>Annuler</td>
				</tr>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}delete-film-save" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-ok"></span></button></td>
					<td><a href="{$smarty.const.ROOT}filmo"class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>
			</tbody>
		</table>
		</form>
	</div>
	</div>
{/block}