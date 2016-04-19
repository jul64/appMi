<?php
define( 'DB_HOST', 'db' );
define( 'DB_PORT', '3306' );
define( 'DB_NAME', 'contact' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );

//Connexion
try
{
	$bdd = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT, DB_USER, DB_PASSWORD);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
//Création de la base de données
$sql = 'CREATE DATABASE IF NOT EXISTS '.DB_NAME.' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci';

//On prépare et on exécute la requête
$bdd->prepare($sql)->execute();

header("Location: index.php");
?>