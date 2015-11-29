{extends file="layout.tpl"}
{block name=title}Login Administrateur{/block}
{block name=body}
<div id="login">
	<div class="formContainer">
	<form method="post" action="login-check">
	<table>
		<tbody>
			<tr>
				<td><label for="admin_name">Utilisateur</label></td>
				<td><label for="admin_pwd">Mot de passe</label></td>
			</tr>
			<tr>
				<td><input type="text" name="admin_name" value="admin"></td>
				<td><input type="password" name="admin_pwd" value="secret"></td>
				<td><input type="submit" class="btn btn-primary"value="Login"></td>
			</tr>
		</tbody>
	</table>
	</form>
	</div>
</div>
{/block}
