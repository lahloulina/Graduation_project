<?php
include "Database.php";
$id_user = $_GET['id_user'];
$id_client = $_GET['id_client'];
$deleteDemande = "DELETE FROM demande WHERE ID_USER = '$id_user';";
if(mysqli_query($connect, $deleteDemande))
{
    $deletUser="DELETE FROM utilisateur WHERE ID_USER= '$id_user'; ";
    if (mysqli_query($connect, $deletUser))
    {
        $deleteClient="DELETE FROM client WHERE ID_CLIENT= '$id_client'; ";
        $result=mysqli_query($connect, $deleteClient);
        if ($result) {
            header("location: users.php");
        } else {
            echo "Error deleting client";
        }
    }
    else {
        echo "Error deleting user";
    }
}
else {
    echo "Error deleting demande";
}
?>