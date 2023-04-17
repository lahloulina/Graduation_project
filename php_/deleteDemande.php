<?php
// supprimer demande
include "Database.php";
session_start();
$id_demande = $_GET['id'];
$query = "DELETE FROM demande WHERE ID_DEMANDE = '$id_demande';";
$result = mysqli_query($connect, $query);
if ($result) { 
    if($_SESSION['is_admin']==true)
    {
    header("location: historiqueAdmin.php");
    }
    else { header("location: historiqueClient.php"); }
} else {
    echo "Error deleting record";
}
?>
