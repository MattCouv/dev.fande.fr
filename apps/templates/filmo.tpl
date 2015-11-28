{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="filmo">
{foreach from=$films item=film}
	<section class="film row">
		<div class="year col-xs-1">
			<p ><h1 class="vertical-text">{$film.year}</h1></p>
		</div>
		<div class="poster col-xs-4">
			<img src="assets/img/films/{$film.poster}" class="img-polaroid"/>
			<p class="rate"> {for $i=1 to $film.rates}*
			{/for}[{$film.rates}/5]</p>
		</div>
		<div class="infos col-xs-7">
			<p class="title">{$film.title}</p>
			<p class="description">
			<span class="show cat70">{$film.shortdesc|truncate:70}</span>
			<span class="hidden fullDesc">{$film.shortdesc|substr:71:500}</span>
			<span class="click btn">...</span>
			</p>
		</div>
	</section>
	{/foreach}
</div>

{/block}
