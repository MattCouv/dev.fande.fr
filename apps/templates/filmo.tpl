{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}

<div id="filmo">
{foreach from=$films item=film}
	<section class="film row">
		<div class="year col-lg-1">
			<p class="vertical-text">{$film.year}</p>
		</div>
		<div class="poster col-lg-4">
			<img src="assets/img/films/{$film.poster}" class="img-polaroid"/>
			<p class="rate"> {for $i=1 to $film.rates}*
			{/for}[{$film.rates}/5]</p>
		</div>
		<div class="infos col-lg-7">
			<p class="title">{$film.title}</p>
			<p class="description">
			<span class="show cat70">{$film.shortdesc|truncate:70:""}</span>
			<span class="hidden fullDesc">{$film.shortdesc|substr:70:500}</span>
			<span class="click btn">...</span>
			</p>
		</div>
	</section>
	</hr>
{/foreach}
</div>

{/block}
