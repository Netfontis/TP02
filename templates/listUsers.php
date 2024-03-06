<?php 
	include('parts/header.php'); 
?>

<main>

	<div id="logedDiv">

		<div id="headerLoginDiv">
			
			<h1>Bienvenue <?php echo htmlspecialchars($_SESSION['nom'].' '.$_SESSION['prenom']); ?></h1>

		</div>
		
		<div id="accountContent">

			<div>
<?php
	if (is_array($tabUsers)) {
		echo '				<table>';		
		echo '					<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Rôle</th><th>Actions</th></tr>';
		foreach($tabUsers as $user) {
			echo '					<tr>';
				echo '					<td>', $user->nom, '</td>';
				echo '					<td>', $user->prenom, '</td>';
				echo '					<td>', $user->adresse_mail, '</td>';
				echo '					<td>', $user->role, '</td>';
				echo '					<td><a href="/WebCourse/userRegistration/updateUser.php?id=', $user->id, '"><img src="templates/assets/img/modifier.png" alt=""></a>';
				echo $user->id != $_SESSION['id'] ? ' <a href="/WebCourse/userRegistration/deleteUser.php?id='.$user->id.'"><img src="templates/assets/img/poubelle.gif" alt=""></a>' : '', '</td>';
			echo '					</tr>';
		}
		echo '				</table>';		
	}
?>
	
			</div>

			<br><a href="/WebCourse/userRegistration/createUser.php" class="p-5">Créer un utilisateur</a>
	

			<form action="/WebCourse/userRegistration/logout.php" method="post">
				
				<input id="sendFormBtn" value="Se déconnecter" type="submit">

			</form>
		</div>

	</div>

</main>

<?php
	include('parts/footer.php');
?>