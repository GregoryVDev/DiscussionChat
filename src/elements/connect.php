<?php 
const DBHOST = 'db';
const DBNAME = 'projet_messagerie';
const DBUSER = 'GregRoberto';
const DBPASS = 'GregRoberto_password';

    
$dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    //Maintenant, on se connecte avec le PDO
try {
$db = new PDO($dsn, DBUSER, DBPASS);
echo "connexion réussie";
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode d'erreur PDO
} catch(PDOException $error) {
    echo "échec de la connection: " . $error->getMessage() . "</br>";
    exit(); // Arrêter le script en cas d'erreur de connexion
}
//ci-dessus la fonction nous sort le message d'erreur en cas d'échec