<?php
define( 'DB_HOST', 'db' );
define( 'DB_PORT', '3306' );
define( 'DB_NAME', 'contact' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_TABLE', 'PERSONNE' );

//Connexion
try
{
	$bdd = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
if($bdd)
{
	$table = 'CREATE TABLE IF NOT EXISTS '.DB_NAME.'.'.DB_TABLE.'(
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ENTREPRISE VARCHAR(30),
    NOM VARCHAR(30),
    PRENOM VARCHAR(30))';
	
	//On prépare et on exécute la requête
	$bdd->prepare($table)->execute();	
}
?>
