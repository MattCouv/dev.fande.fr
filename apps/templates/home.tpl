{extends file="layout.tpl"}
{block name=title}Michael BAY{/block}
{block name=body}

	<div id="welcome">
		<div class="top">
			<div id="home_slideshow" class="aslider" data-hide-controls>
			{foreach from=$films item=film}
				<div class="aslide" data-duration="3">
					<img src="assets/img/films/{$film.poster}" alt="{$film.poster}" />
				</div>
			{/foreach}
			</div>
			<p class="title">Fan de ... <span class="biggest">Michael BAY</span></p>
		</div>
		<div class="main">
		</hr>
			<p class="intro">Michael Benjamin Bay (né le 17 février 1965) est un réalisateur et producteur américain. Il est surtout connu pour avoir réalisé des films d'action et catastrophe avec un gros budget, caractérisés par leur utilisation massive d'effets spéciaux. Ses films, qui comprennent Bad Boys, Armageddon, Pearl Harbor, et Transformers, ont rapporté plus de quatre milliards de dollars dans le monde entier et ce malgré les critiques de cinéma hostiles à Bay. Il est cofondateur de la maison de production commerciale de l'Institut, alias The Institute for the Development of Enhanced Perceptual Awareness. Il est le cofondateur et copropriétaire de la maison d'effets spéciaux Digital Domain. Il est copropriétaire de Platinum Dunes, une maison de production qui a servi a réamorcer des films d'horreur cultes comme Vendredi 13, Massacre à la tronçonneuse et Freddy : Les Griffes de la nuit.
			</p>
			<a href="filmo"class="btn btn-primary btn-lg discover">Découvrir ...</a>
		</div>
	</div>

{/block}
