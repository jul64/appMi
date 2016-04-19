<?php
define( 'DB_HOST', getenv("MYSQL_SERVICE_HOST"));
define( 'DB_PORT', getenv("MYSQL_SERVICE_HOST") );
define( 'DB_NAME', getenv("MYSQL_DATABASE"));
define( 'DB_USER', getenv("MYSQL_USER") );
define( 'DB_PASSWORD', getenv("MYSQL_ROOT_PASSWORD") );
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
