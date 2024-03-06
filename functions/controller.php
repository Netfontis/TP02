<?php 
	switch($script) {
		case '/WebCourse/userRegistration/login.php' :
			if (isset($_POST['email'])) {
				if (login($_POST['email'], $_POST['password'])) {
					if ($_SESSION['role'] == 'admin') {
						header('location: /WebCourse/userRegistration/listUsers.php');
					}
					else {
						header('location: /WebCourse/userRegistration/userHome.php');
					}
					exit();
				}
				else {
					$msg = 'Le mot de passe ou le nom d\'utilisateur est invalide !';
					include('templates/login.php');
				}
			}
			break;

		case '/WebCourse/userRegistration/logout.php' :
			logout();

			header('Location: /WebCourse/userRegistration/login.php');
			break;

		case '/WebCourse/userRegistration/listUsers.php' :
			$tabUsers = selectUsers();
			break;

		case '/WebCourse/userRegistration/createUser.php' :
			if (isset($_POST['nom'])) {
				createUser($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['role']);
				header('location: /WebCourse/userRegistration/listUsers.php');
				exit();
			}
			else {
				$user = ['role'=>'user'];
			}
			break;

		case '/WebCourse/userRegistration/updateUser.php' :
			if (isset($_POST['id'])) {
				updateUser($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['password'], $_POST['role']);
				header('location: /WebCourse/userRegistration/listUsers.php');
				exit();
			}
			else if (isset($_GET['id'])) {
				$user = getUser($_GET['id']);
			}
			break;

		case '/WebCourse/userRegistration/deleteUser.php' :
			if (isset($_POST['id'])) {
				deleteUser($_POST['id']);
				header('location: /WebCourse/userRegistration/listUsers.php');
				exit();
			}
			else if (isset($_GET['id'])) {
				$user = getUser($_GET['id']);
			}
			break;
	}
?>