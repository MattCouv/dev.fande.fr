{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="filmo">
{foreach from=$films item=film}
	<section class="film row">
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
			<span class="hidden fullDesc">{$film.shortdesc|substr:71:500}</span>
			<span class="click btn btn-default btn-xs">...</span></span>
			</p>
		</div>
	</section>
	{/foreach}
</div>

{/block}
