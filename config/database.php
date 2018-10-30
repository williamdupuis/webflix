<?php

// Config locale
$dbprovider = 'mysql';
$dbhost = 'localhost';
$dbname = 'webflix';
$dbport = '3306';
$dbuser = 'wf_admin';
$dbpassword = '';

/**
 * MySQL/MariaDB User for this app
 * > CREATE SCHEMA IF NOT EXISTS `webflix` DEFAULT CHARACTER SET utf8 ;
 * > CREATE USER 'wf_admin'@'localhost' IDENTIFIED BY '';
 * > GRANT ALL PRIVILEGES ON webflix.* TO 'wf_admin'@'localhost';
 */

 
try {
	$db = new PDO("$dbprovider:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpassword);
} catch(Exception $e) {
    echo '<p>Connexion à la base de données impossible</p>';
    echo '<p>'.$e->getMessage().'</p>';
    exit();
	// Redirection en PHP vers Google avec le message d'erreur concerné
	// header('Location: https://www.google.fr/search?q='.$e->getMessage());
}

?>