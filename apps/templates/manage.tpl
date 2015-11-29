{extends file="layout.tpl"}
{block name=title}Fan de Filmographie{/block}
{block name=body}
<div id="addFilm">
	<div class="filmEdit">
	<form method="post" action="add-film-save">
	  <div class="form-group">
	    <label for="title">Titre</label>
	    <input type="text" class="form-control" name="title">
	  </div>
	  <div class="form-group">
		  <label for="shortdesc">Résumé</label>
		  <textarea class="form-control" name="shortdesc" rows="3"></textarea>
	  </div>
	  <div class="form-group">
	    <label for="year">Année</label>
	    <input type="text" class="form-control" name="year">
	  </div>
	  <div class="form-group">
	    <label for="rates">Score</label>
	    <input type="text" class="form-control" name="rates">
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