<?php

//LAHLOU DATABASE USING WAMPP

$mysql_username="localhost";
$mysql_password="root";
$mysql_hostname="root";
$mysql_databasename="pfe";

// Établir la connexion avec la base de données
$connect=mysqli_connect($mysql_username,$mysql_password,$mysql_hostname,$mysql_databasename);

// Établir la connexion avec la base de données
if (!$connect) {
    die("Connexion échouée: " . mysqli_connect_error());
}
?>

<?php

// MANKOU DATABSE USING XAMPP

/*
$mysql_username = "root"; // Nom d'utilisateur pour la base de données
$mysql_password = ""; // Mot de passe pour la base de données
$mysql_hostname = "127.0.0.1"; // Adresse IP du serveur de base de données
$mysql_databasename = "pfe"; // Nom de la base de données que vous souhaitez utiliser

// Établir la connexion avec la base de données
$connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_databasename);

// Établir la connexion avec la base de données
if (!$connect) {
    die("Connexion échouée: " . mysqli_connect_error());
}*/
?>