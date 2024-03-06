<?php 
	include('parts/header.php'); 
?>

<main>

	<div id="logedDiv">

		<div id="headerUserDiv">
			
			<h1>Espace utilisateur</h1>

		</div>
		
		<div id="accountContent">

			Bienvenue <?=$_SESSION['nom'].' '.$_SESSION['prenom']?> !

		</div>

		<form action="/WebCourse/userRegistration/logout.php" method="post">
			
			<input id="sendFormBtn" value="Se déconnecter" type="submit">

		</form>
	</div>

</main>

<?php
	include('parts/footer.php');
?>