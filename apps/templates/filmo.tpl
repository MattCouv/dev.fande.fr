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
			<p class="rate"> * * * * [4/5]</p>
		</div>
		<div class="infos col-lg-7">
			<p class="title">{$film.title}</p>
			<p class="description">
			<span class="show">{$film.shortdesc}<span class="click btn">...</span>
			<span class="hidden otherText">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></span>
			</p>
		</div>
	</section>
{/foreach}
</div>

{/block}
