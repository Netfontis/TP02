<?php 
	include('parts/header.php'); 
?>

<main>

	<div id="logedDiv">

		<div id="headerLoginDiv">
			
			<h1>Suppression utilisateur</h1>

		</div>
		
		<div id="accountContent">

<?php
	echo "<div>Êtes-vous sûr de vouloir supprimer ", $user['nom'], ' ', $user['prenom'], ' ?</div>';
?>
			<form action="/WebCourse/userRegistration/deleteUser.php" method="post">
				<input type="hidden" name="id" value="<?=$user['id']?>">

				<input id="sendFormBtn" value="Supprimer" type="submit">

			</form>

			<a href="/WebCourse/userRegistration/listUsers.php" class="p-5">Retour à la liste des utilisateurs</a>

			<form action="/WebCourse/userRegistration/logout.php" method="post">
				
				<input id="sendFormBtn" value="Se déconnecter" type="submit">

			</form>
		</div>

	</div>

</main>

<?php
	include('parts/footer.php');
?>