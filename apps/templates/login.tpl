{extends file="layout.tpl"}
{block name=title}Login Administrateur{/block}
{block name=body}
<div id="login">
	<div class="formContainer">
	<form class="form-inline" method="post" action="login-check">
	  <div class="form-group">
	    <label class="sr-only" for="admin_name">Utilisateur</label>
	    <input type="text" class="form-control" id="admin_name" name="admin_name" value="admin" placeholder="utilisateur"> 
	  </div>
	  <div class="form-group">
	    <label class="sr-only" for="admin_pwd">Password</label>
	    <input type="password" class="form-control" id="admin_pwd" placeholder="Password" name="admin_pwd" value="secret">
	  </div>
	  <div class="checkbox">
	    <label>
	      <input type="checkbox"> Remember me
	    </label>
	  </div>
	  <button type="submit" class="btn btn-default">Sign in</button>
	</form>
	</div>
</div>
{/block}
