<?php
$lastName = $_POST['last-name'];
$firstName = $_POST['first-name'];
$tel = $_POST['tel'];
$CIN = $_POST['CIN'];
$listeVehicule = $_POST['listeVehi'];
$localisation=$_POST['localisation'];

$db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'pfe';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  $sqlquery = "INSERT INTO CLIENT VALUES
    ('1','$lastName', '$firstName','$tel', '$CIN', '$listeVehicule', '$localisation')";
    if ($mysqli->query($sqlquery) === TRUE) {
        echo "Insertion avec succès";
    } else {
        echo "Error: " . $sqlquery . "<br>" . $mysqli->error;
    }
 

  echo 'Success: La connexion à MYSQL est faite avec succès';
  echo '<br>';
  echo ' information du hôte: '.$mysqli->host_info;
  echo '<br>';
  echo 'versiondu protocol : '.$mysqli->protocol_version;

  $mysqli->close();


?>