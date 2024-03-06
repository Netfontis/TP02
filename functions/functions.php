<?php 
	// Fonctions

	function login($libelle, $password) {            
		global $pdo;

		$sql = 'select * from utilisateurs where adresse_mail = :email and mot_de_passe = :mdp';
		$req = $pdo -> prepare($sql);
		$req -> execute(['email' => $_POST['email'], 'mdp' => $_POST['password']]);

		$r = $req -> fetchAll();

		if (count($r) == 1) {
			$_SESSION['id'] = $r[0] -> id;
			$_SESSION['nom'] = $r[0] -> nom;
			$_SESSION['prenom'] = $r[0] -> prenom;
			$_SESSION['role'] = $r[0] -> role;
		}

		return(count($r) == 1);
	}


	function logout() {
		session_destroy();
	}


	function selectUsers() {
		global $pdo;

		$sql = 'select * from utilisateurs';
		$req = $pdo -> prepare($sql);
		$req -> execute();

		$r = $req -> fetchAll();

		return($r);
	}


	function getUser($id) {
		global $pdo;

		$sql = 'select * from utilisateurs where id = :id';
		$req = $pdo -> prepare($sql);
		$req -> execute(['id' => $id]);

		$r = $req -> fetchAll();

		$user = ['id'=>$id, 'nom'=>'', 'prenom'=>'', 'email'=>'', 'password'=>'', 'role'=>'user'];

		if (count($r) == 1) {
			$user['nom'] = $r[0] -> nom;
			$user['prenom'] = $r[0] -> prenom;
			$user['email'] = $r[0] -> adresse_mail;
			$user['password'] = $r[0] -> mot_de_passe;
			$user['role'] = $r[0] -> role;
		}

		return($user);
	}	


	function createUser($nom, $prenom, $email, $password, $role) {
		global $pdo;

		$sql = 'insert into utilisateurs values(null, :nom, :prenom, :email, :password, :role)';
		$req = $pdo -> prepare($sql);
		$req -> execute(['nom'=>$nom, 'prenom'=>$prenom, 'email'=>$email, 'password'=>$password, 'role'=>$role]);
	}	


	function updateUser($id, $nom, $prenom, $email, $password, $role) {
		global $pdo;

		$sql = 'update utilisateurs set nom = :nom, prenom = :prenom, adresse_mail = :email, mot_de_passe = :password, role = :role where id = :id';
		$req = $pdo -> prepare($sql);
		$req -> execute(['id'=>$id, 'nom'=>$nom, 'prenom'=>$prenom, 'email'=>$email, 'password'=>$password, 'role'=>$role]);
	}	


	function deleteUser($id) {
		global $pdo;

		$sql = 'delete from utilisateurs where id = :id';
		$req = $pdo -> prepare($sql);
		$req -> execute(['id'=>$id]);
	}	
?>