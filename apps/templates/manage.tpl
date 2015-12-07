{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
<div id="addFilm">
	<div class="filmEdit">
	<form method="post" action="manage-film-save" enctype="multipart/form-data">
	<input type="hidden"name="id"value="{$film.id|default:''}">
	  <div class="form-group">
	    <label for="title">Titre</label>
	    <input type="text" class="form-control" name="title" value="{$film.title|default:''}">
	  </div>
	  <div class="form-group">
		  <label for="shortdesc">Résumé</label>
		  <textarea class="form-control" name="shortdesc" rows="3">{$film.shortdesc|default:''}</textarea>
	  </div>
	  <div class="form-group">
	    <label for="year">Année</label>
	    <input type="text" class="form-control" name="year" value="{$film.year|default:''}">
	  </div>
	  <div class="form-group">
	    <label for="rates">Score</label>
	    <input type="text" class="form-control" name="rates"value="{$film.rates|default:''}">
	  </div>
	  <div class="form-group">
	    <label for="poster">Fichier poster</label>
	    <input type="file" name="poster">
	  </div>
	  <button type="submit" class="btn btn-default">Ajouter</button><span><a href="{$smarty.const.ROOT}filmo">Annuler</a></span>
	</form>
	</div>
</div>
{/block}