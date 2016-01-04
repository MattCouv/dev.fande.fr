{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
	<div id="delete">
	<div class="quizzDel">
		<form method="get">
		<input type="hidden"name="id" value="{$smarty.get.id_quizz}">
		<table>
			<tbody>
				<tr>
					<td>Valider</td>
					<td>Annuler</td>
				</tr>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}deletesave" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-ok"></span></button></td>
					<td><a href="{$smarty.const.ROOT}"class="btn btn-default btn-lg"><span class="glyphicon glyphicon-remove"></span></a></td>
				</tr>
			</tbody>
		</table>
		</form>
	</div>
	</div>
{/block}