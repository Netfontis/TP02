<?php 
	include('parts/header.php'); 
?>
<main>

	<div id="unlogedDiv">

		<div id="loginDiv" class="active">
			<div id="headerLoginDiv">
			
				<h1>Connectez-vous</h1>

			</div>
			
			<div id="loginContent" class="active">
					
<?php
	if (isset($msg) && strlen($msg) > 0) {
		echo '				<div id="message">', $msg, '</div>';
	}
?>

				<form action="/WebCourse/userRegistration/login.php" method="post">
				
					<input type="text" name="email" placeholder="Email" required="required"><br>
					<input type="password" name="password" placeholder="Password" required="required">
					
					<div id="forgotBtnDiv">
						<a id="forgotBtn">Mot de passe oublié ?</a>
					</div>

					<input id="sendFormBtn" type="submit" value="Se connecter">

				</form>

				<div>
					
<!--					<p>Pas de compte ?</p>
					<a id="toRegistration">Créez en un !</a>
-->
				</div>

			</div>

		</div>
<!--
		<div id="registerDiv">
			
			<div id="headerLoginDiv">
				
				<h1>Enregistrez-vous</h1>

			</div>
			<div id="registerContent">
					
				<form action="../functions/controller.php" method="post">
				
					<input type="text" name="username" placeholder="Username" required="required"><br>
					<input type="mail" name="username" placeholder="Email" required="required"><br>
					<input type="password" name="password" placeholder="Password" required="required">
					<input type="checkPassword" name="password" placeholder="Password" required="required">
					
					<input type="hidden" name="request" value="registerRequest">

					<input id="sendFormBtn" type="submit" value="Se connecter">

				</form>

				<div>
					
					<p>Déjà un compte ?</p>
					<a id="toLogin">Connectez vous !</a>

				</div>

			</div>
		
		</div>
-->
	</div>


	<?php 
	
		if (isset($_GET["msg"])) { 
			echo '<div id="messageDiv"><p>'. htmlspecialchars($_GET["msg"]) .'</p><div id="progressbar"><div id="fillProgressbar"></div></div></div>'; 
		}  

	?>	
	
</main>

<?php
	include('parts/footer.php');
?>