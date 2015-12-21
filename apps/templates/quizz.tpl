{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="quizzs" class="container-fluid">
{if isset( $smarty.session.admin ) && $smarty.session.admin}
<div class="adminEdit"><a href="{$smarty.const.ROOT}add-quizz" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>Ajouter un quizz</div>
{/if}

	{foreach from=$quizzs item=quizz}
	<section class="row">

	<div class="col-md-4 col-md-offset-1">
		<a href="{$smarty.const.ROOT}quizz?id={$quizz.id}">
		<div class="question">
			<h2>Quizz n°{$quizz.id}</h2>
		</div></a>
		<div class="adminEdit">
		{if isset( $smarty.session.admin ) && $smarty.session.admin}
		<form method="post">
			<input type="hidden" name="id" value="{$quizz.id}">
			<table>
			<tbody>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}delete-quizz" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> Eliminer le quizz</td>
					<td><button type="submit" formaction="{$smarty.const.ROOT}edit-quizz"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le quizz</td>
				</tr>
			</tbody>
			</table>
		</form>
		{/if}
		</div>
	</div>
	<div class="col-md-5">
		<p>{$quizz.description}</p>
	</div>
	</section>
	{/foreach}


</div>

{/block}
