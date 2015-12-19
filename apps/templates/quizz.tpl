{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="filmo">
{if isset( $smarty.session.admin ) && $smarty.session.admin}
<div class="adminEdit"><a href="{$smarty.const.ROOT}add-film" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>Ajouter un film</div>
{/if}
{foreach from=$quizzs item=quizz}
<hr>
	<section class="film">
	{if isset( $smarty.session.admin ) && $smarty.session.admin}
		<div class="adminEdit container-fluid">
		<form method="post">
		<input type="hidden" name="id" value="{$film.id}">
		<input type="hidden"name="poster" value="{$film.poster}">
		<table>
			<tbody>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}delete-film" class="btn btn-default"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> Eliminer le film</td>
					<td><button type="submit" formaction="{$smarty.const.ROOT}edit-film"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le film</td>
				</tr>
			</tbody>
		</table>
		</form>
		</div>
	{/if}
		<div class="row">
			<p>{$quizz.description}</p>
		</div>
	</section>

	{/foreach}
</div>

{/block}
