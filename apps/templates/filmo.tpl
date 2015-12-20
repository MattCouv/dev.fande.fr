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
		<form>
		<input type="hidden" name="id" value="{$film.id}">
		<input type="hidden"name="poster" value="{$film.poster}">
		<table>
			<tbody>
				<tr>
					<td><button type="submit" formaction="{$smarty.const.ROOT}delete-film" formmethod="get" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> Eliminer le film</td>
					<td><button type="submit" formaction="{$smarty.const.ROOT}edit-film"class="btn btn-default"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button> Editer le film</td>
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
			<div>
				<p>[<span class="rate">{$film.rates}</span>/5]</p>
				<input type="range" min="0" max="5" value="{$film.rates}" step="1" id="rate{$film.id}" name="r" />
				<input type="hidden" name="idmovie" value="{$film.id}" />
				<div class="rateit" data-rateit-idmovie="{$film.id}" data-rateit-backingfld="#rate{$film.id}"></div>
			</div>
			
		</div>
		<div class="infos col-xs-12 col-md-6">
			<p class="title">{$film.title}</p>
			<hr>
			<p class="description show cat70">
			{$film.shortdesc|substr:0:70}
			<span class="hidden fullDesc">{$film.shortdesc|substr:70:500}</span>
			<span class="click btn btn-default btn-xs">...</span>
			</p>
		</div>
	</div>
	</section>

	{/foreach}
</div>

{/block}
