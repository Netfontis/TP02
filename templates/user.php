			<?=isset($user['id']) ? '<input type="hidden" name="id" value="'.$user['id'].'">' : ''?>
			<table class="form">
				<tr>
					<th>Nom : </th>
					<td><input type="text" name="nom" placeholder="Nom" required="required" value="<?=isset($user['nom']) ? $user['nom'] : '' ?>"></td>
				</tr>
				<tr>
					<th>Prénom : </th>
					<td><input type="text" name="prenom" placeholder="Prénom" required="required" value="<?=isset($user['prenom']) ? $user['prenom'] : '' ?>"></td>
				</tr>
				<tr>
					<th>Email : </th>
					<td><input type="text" name="email" placeholder="Adresse mail" required="required" value="<?=isset($user['email']) ? $user['email'] : '' ?>"></td>
				</tr>
				<tr>
					<th>Mot de passe : </th>
					<td><input type="text" name="password" placeholder="Mot de passe" required="required" value="<?=isset($user['password']) ? $user['password'] : '' ?>"></td>
				</tr>
				<tr>
					<th>Rôle : </th>
					<td><label><input type="radio" name="role" value="admin" <?=isset($user['role']) && $user['role'] == 'admin' ? 'checked' : '' ?>> Admin</label>
					 <label><input type="radio" name="role" value="user"<?=!isset($user['role']) || (isset($user['role']) && $user['role'] != 'admin') ? 'checked' : '' ?>> Utilisateur</label></td>
				</tr>
			</table>