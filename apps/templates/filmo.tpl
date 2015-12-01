{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="filmo">
{if isset( $smarty.session.admin ) && $smarty.session.admin}
<div class="adminEdit"><a href="{$smarty.const.ROOT}add-film" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>Ajouter un film</div>
{/if}
{foreach from=$films item=film}
<hr>
	<section class="film">
	{if isset( $smarty.session.admin ) && $smarty.session.admin}
		<div class="adminEdit container-fluid">
		<form action="" method="post">
		<input type="hidden" name="id" value="{$film.id}">
		<table>
			<tbody>
				<tr>
					<td><button type="submit" formaction="delete-film" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button> Eliminer le film</td>
					<td><button type="submit" formaction="edit-film"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le film</td>
				</tr>
			</tbody>
		</table>
		</form>
		</div>
	{/if}
		<div class="row">
		<div class="year col-xs-2 col-md-1">
			<p ><h1 class="vertical-text">{$film.year}</h1></p>
		</div>
		<div class="poster col-xs-10 col-md-5">
			<img src="assets/img/films/{$film.poster}" class="img-polaroid"/>
			<p class="rate"> {for $i=1 to $film.rates}*
			{/for}[{$film.rates}/5]</p>
		</div>
		<div class="infos col-xs-12 col-md-6">
			<p class="title">{$film.title}</p>
			<hr>
			<p class="description">
			<span class="show cat70">{$film.shortdesc|truncate:70:"":true}
			<span class="hidden fullDesc">{$film.shortdesc|substr:80:500}</span>
			<span class="click btn btn-default btn-xs">...</span></span>
			</p>
		</div>
	</div>
	</section>

	{/foreach}
</div>

{/block}
