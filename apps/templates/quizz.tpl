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
	<input type="hidden" name="id" value="{$quizz.id}">
	<input type="hidden" name="title" value="{$quizz.title}">
	<div class="col-md-4 col-md-offset-1">
		<div class="question">
			<h2>Quizz n°{$quizz.id}</h2>
			<h2>{$quizz.title}</h2>
		</div>
		<div class="adminEdit">
		{if isset( $smarty.session.admin ) && $smarty.session.admin}
			<table>
			<tbody>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}delete-quizz" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> Eliminer le quizz</td>
					<td><button type="submit" formaction="{$smarty.const.ROOT}edit-quizz"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le quizz</td>
				</tr>
			</tbody>
			</table>
		{/if}
		</div>
	</div>
	<div class="col-md-5">
		<p>{$quizz.description}</p><button type="submit" formaction="{$smarty.const.ROOT}quizz-play" class="btn btn-default">Jouer</button>
	</div>
	</form>
	</section>
	{/foreach}


</div>

{/block}
