<?php
include "Database.php";
//Contact form
if(isset($_POST["editInfos"]))
{

    // Récupération des données du formulaire
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $cin = $_POST["cin"];
    $id_client = $_POST["idClient"];
    $id_user=$_SESSION['user_id'];
    $is_admin=$_SESSION['is_admin'];
    
    // Insertion des données dans la table "contact"
    $updateClient = "UPDATE client SET NOM='$lastName' , PRENOM='$firstName' , CIN='$cin' , NUM_TEL='$phone' WHERE ID_CLIENT='$id_client' ";
    if($is_admin==true){
        if (mysqli_query($connect, $updateClient))
    {
    // Affichage du message de succès
    echo '<div class="message success">Data updated successfully!</div>';
    }  
    else 
    {
    // Affichage du message d'erreur
    echo '<div class="message error">Error updating data: ' . mysqli_error($connect) . '</div>';
    }
    }else {
        $mail = $_POST["mail"];
        $updateUser = "UPDATE utilisateur SET EMAIL='$mail' WHERE ID_USER='$id_user' ";
        if (mysqli_query($connect, $updateClient) && mysqli_query($connect, $updateUser))
    {
    // Affichage du message de succès
    $_SESSION['email']=$mail;
    echo '<div class="message success">Data updated successfully!</div>';
    }  
    else 
    {
    // Affichage du message d'erreur
    echo '<div class="message error">Error updating data: ' . mysqli_error($connect) . '</div>';
    }
    }
}


if(isset($_POST["editPWD"]))
{

    // Récupération des données du formulaire
    $oldPswd = md5($_POST["oldPswd"]);
    $newPswd = md5($_POST["newPswd"]);
    $confirmNewPswd = md5($_POST["confirmNewPswd"]);
    $id_user=$_SESSION['user_id'];
    
    $query="SELECT * FROM UTILISATEUR WHERE ID_USER='$id_user' AND MDP='$oldPswd' ";
    $result= mysqli_query($connect,$query);
    if(mysqli_num_rows($result) == 0){
        echo '<div class="message error">Ancien mot de passe est incorrect !</div>';
    }
    elseif($newPswd!= $confirmNewPswd){
        echo '<div class="message error">Les mots de passe ne sont pas compatibles !</div>';
    } 
    elseif ($oldPswd==$newPswd && $newPswd==$confirmNewPswd){
        echo '<div class="message error">Le nouveau mot de passe est le même que l\'ancien !</div>';
    }
    else{
        $updateUser = "UPDATE utilisateur SET MDP='$newPswd' WHERE ID_USER='$id_user' ";
        if (mysqli_query($connect, $updateUser))
        {
        // Affichage du message de succès
        echo '<div class="message success">Data updated successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error updating data: ' . mysqli_error($connect) . '</div>';
        }
    }
    }
?>