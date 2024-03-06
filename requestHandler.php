<?php
	session_start();

	include_once('functions/bdd.php');
	include_once('functions/functions.php');

	$script = $_SERVER['REQUEST_URI'];
	if (strpos($script, '?') > 0) {
		$script = substr($script, 0, strpos($script, '?'));
	}

	# Par défaut, on part sur la liste des utilisateurs
	if ($script == '/WebCourse/userRegistration/index.php' || $script == '/WebCourse/userRegistration/') {
		if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
			$script = '/WebCourse/userRegistration/listUsers.php';
		}
		else {
			$script = '/WebCourse/userRegistration/userHome.php';
		}
	}

	# Si on est pas connecté
	if (!isset($_SESSION['id'])) {
		$script = '/WebCourse/userRegistration/login.php';
	}

	switch($script) {
		case '/WebCourse/userRegistration/login.php' :
			if (isset($_POST['email'])) {
				include('functions/controller.php');
			}
			else {
				include('templates/login.php');
			}
			break;

		case '/WebCourse/userRegistration/logout.php' :
			include('functions/controller.php');
			break;

		case '/WebCourse/userRegistration/userHome.php' :
			include('templates/userHome.php');
			break;

		case '/WebCourse/userRegistration/createUser.php' :
			include('functions/controller.php');
			if (count($_POST) == 0) {
				include('templates/createUser.php');
			}
			break;

		case '/WebCourse/userRegistration/listUsers.php' :
			include('functions/controller.php');
			include('templates/listUsers.php');
			break;

		case '/WebCourse/userRegistration/updateUser.php' :
			include('functions/controller.php');
			if (count($_POST) == 0) {
				include('templates/updateUser.php');
			}
			break;

		case '/WebCourse/userRegistration/deleteUser.php' :
			include('functions/controller.php');
			if (count($_POST) == 0) {
				include('templates/deleteUser.php');
			}
			break;

		default :
			include('templates/404.php');
			break;
	}
?>