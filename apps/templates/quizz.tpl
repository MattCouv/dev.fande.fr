{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="quizzs">
{if isset( $smarty.session.admin ) && $smarty.session.admin}
<div class="adminEdit"><a href="{$smarty.const.ROOT}add-quizz" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>Ajouter un quizz</div>
{/if}
{foreach from=$quizzs item=quizz}
	<section class="quizz">
	{if isset( $smarty.session.admin ) && $smarty.session.admin}
		<div class="adminEdit container-fluid">
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
		</div>
	{/if}
		<div class="quizzRow">
			<div class="quizzContainer">
				<div class="quizzHeader">
					<h2>{$quizz.description}</h2>
				</div>
				<div class="quizzQuestionContainer">
					<h3>sdflkjghslkdjfhgkjsfdgmlkjdsfmlkjqmlkdjsf</h3>
					<p><input type="checkbox"> This is a check box</p>
					<p><input type="checkbox"> This is a check box</p>
					<p><input type="checkbox"> This is a check box</p>
					<p><input type="checkbox"> This is a check box</p>
				</div>
			</div>
			
		</div>
	</section>

	{/foreach}
</div>

{/block}
