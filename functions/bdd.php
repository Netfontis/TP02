<?php
    //ACCES A LA BASE DE DONNEE

    # Connexion locale
    if ($_SERVER['HTTP_HOST'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == 'localhost') {
        define("DB_NOM",        'portfolio');
        define("DB_HOST",       '127.0.0.1');
        define("DB_LOGIN",      'root');
        define("DB_MOT_PASSE",  '');
    }
    # Connexion distante
    else {
        define("DB_NOM",        '');
        define("DB_HOST",       '');
        define("DB_LOGIN",      '');
        define("DB_MOT_PASSE",  '');
    }

   # Connexion à la base de données
   try {
       $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NOM, DB_LOGIN, DB_MOT_PASSE);
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
       $pdo->exec('SET NAMES utf8');
   }
   catch(PDOException $e) {
        echo "Erreur BDD";
        exit();
   }
?>