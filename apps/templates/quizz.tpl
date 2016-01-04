{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="quizzs" class="container-fluid">
{if isset( $smarty.session.admin ) && $smarty.session.admin}
<div class="adminEdit"><a href="{$smarty.const.ROOT}add-quizz" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>Ajouter un quizz</div>
{/if}


	{foreach from=$quizzs item=quizz}
	<section class="row">
	<form method="post">
	<input type="hidden" name="quizztitle" value="{$quizz.title}">
	<div class="col-md-4 col-md-offset-1">
		<div class="question">
			<h2>{$quizz.title}</h2>
		</div>
		<div class="adminEdit">
		{if isset( $smarty.session.admin ) && $smarty.session.admin}
			<table>
			<tbody>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}delete-quizz" name="id_quizz" value="{$quizz.id}" formmethod='get' class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> Eliminer le quizz</td>
					<td><button type="submit" formaction="{$smarty.const.ROOT}edit-quizz"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le quizz</td>
				</tr>
			</tbody>
			</table>
		{/if}
		</div>
	</div>
	<div class="col-md-5">
		<button type="submit" formaction="{$smarty.const.ROOT}quizz?quizz={$quizz.id}" class="btn btn-default">Jouer</button>
	</div>
	</form>
	
	</section><hr>
	{/foreach}


</div>

{/block}
