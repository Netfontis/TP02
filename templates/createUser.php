<?php 
	include('parts/header.php'); 
?>

<main>

	<div id="logedDiv">

		<div id="headerLoginDiv">
			
			<h1>Nouvel utilisateur</h1>

		</div>
		
		<div id="accountContent">

			<form action="/WebCourse/userRegistration/createUser.php" method="post">
<?php
	include('user.php');
?>
				<input id="sendFormBtn" value="Créer" type="submit">

			</form>

			<form action="/WebCourse/userRegistration/logout.php" method="post">
				
				<input id="sendFormBtn" value="Se déconnecter" type="submit">

			</form>
		</div>

	</div>

</main>

<?php
	include('parts/footer.php');
?>