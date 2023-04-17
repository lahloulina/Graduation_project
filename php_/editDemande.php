<?php
include "Database.php";
//update remorquage
if(isset($_POST["editRemorquage"]))
{

    // Récupération des données du formulaire
    $vehiculeType = $_POST["vehicule"];
    $dateDemande = $_POST["date"];
    $point_depart = $_POST["point_depart"];
    $point_arrivee = $_POST["point_arrivee"];
    $id_demande = $_GET["id"];
    
    
    // Insertion des données dans la table "contact"
    $updateDemande = "UPDATE DEMANDE SET ID_VEHICULE_TYPE='$vehiculeType' , DATE_DEMANDE='$dateDemande' , POINT_DEPART='$point_depart' , POINT_ARRIVEE='$point_arrivee' WHERE ID_DEMANDE='$id_demande' ";
    if (mysqli_query($connect, $updateDemande))
    {
    // Affichage du message de succès
    echo '<div class="message success">Data updated successfully!</div>';
    }  
    else 
    {
    // Affichage du message d'erreur
    echo '<div class="message error">Error updating data: ' . mysqli_error($connect) . '</div>';
    }
    
} else {
   

}

//updateDepannage
if(isset($_POST["editDepannage"]))
{

    // Récupération des données du formulaire
    $vehiculeType = $_POST["vehicule"];
    $nature_panne = $_POST["listeServices"];
    $descriptionPanne = $_POST["description"];
    $localisation = $_POST["lieu"];
    $dateDemande = $_POST["date"];
    $id_demande = $_GET["id"];
    
    
    // Insertion des données dans la table "contact"
    $updateDemande = "UPDATE DEMANDE SET ID_VEHICULE_TYPE='$vehiculeType' , DATE_DEMANDE='$dateDemande' , MARQUE='$nature_panne' , LISTE_SERVICES_DEPANNAGE='$descriptionPanne', LIEU='$localisation' WHERE ID_DEMANDE='$id_demande' ";
    if (mysqli_query($connect, $updateDemande))
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


//updatePortes
if(isset($_POST["editPortes"]))
{

    // Récupération des données du formulaire
    $vehiculeType = $_POST["vehicule"];
    $dateDemande = $_POST["date"];
    $lieu=$_POST["lieu"];
    $id_demande = $_GET["id"];
    
    
    // Insertion des données dans la table "contact"
    $updateDemande = "UPDATE DEMANDE SET ID_VEHICULE_TYPE='$vehiculeType' , DATE_DEMANDE='$dateDemande', LIEU='$lieu' WHERE ID_DEMANDE='$id_demande' ";
    if (mysqli_query($connect, $updateDemande))
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

//updateBatterie
if(isset($_POST["editBatterie"]))
{

    // Récupération des données du formulaire
    $vehiculeType = $_POST["vehicule"];
    $dateDemande = $_POST["date"];
    $lieu=$_POST["lieu"];
    $id_demande = $_GET["id"];
    
    
    // Insertion des données dans la table "contact"
    $updateDemande = "UPDATE DEMANDE SET ID_VEHICULE_TYPE='$vehiculeType' , DATE_DEMANDE='$dateDemande', LIEU='$lieu' WHERE ID_DEMANDE='$id_demande' ";
    if (mysqli_query($connect, $updateDemande))
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
//updateCarburant
if(isset($_POST["editCarburant"]))
{

    // Récupération des données du formulaire
    $vehiculeType = $_POST["vehicule"];
    $dateDemande = $_POST["date"];
    $lieu=$_POST["lieu"];
    $typeCarburant=$_POST["typeCarburant"];
    $id_demande = $_GET["id"];
    
    
    // Insertion des données dans la table "contact"
    $updateDemande = "UPDATE DEMANDE SET ID_VEHICULE_TYPE='$vehiculeType' , DATE_DEMANDE='$dateDemande', LIEU='$lieu', TYPE_CARBURANT='$typeCarburant' WHERE ID_DEMANDE='$id_demande' ";
    if (mysqli_query($connect, $updateDemande))
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


//updateRoues 
if(isset($_POST["editRoues"]))
{

    // Récupération des données du formulaire
    $vehiculeType = $_POST["vehicule"];
    $marque_vehicule = $_POST["marqueV"];
    $marque_roue = $_POST["marqueR"];
    $diametre = $_POST["diametre"];
    $hauteur = $_POST["hauteur"];
    $largeur = $_POST["largeur"];
    $dateDemande = $_POST["date"];
    $lieu=$_POST["lieu"];
    $id_demande = $_GET["id"];
    
    
    // Insertion des données dans la table "contact"
    $updateDemande = "UPDATE DEMANDE SET ID_VEHICULE_TYPE='$vehiculeType' , DATE_DEMANDE='$dateDemande' , MARQUE='$marque_vehicule' , MARQUE_ROUE='$marque_roue',DIAMETRE='$diametre' , HAUTEUR='$hauteur', LARGEUR='$largeur', LIEU='$lieu' WHERE ID_DEMANDE='$id_demande' ";
    if (mysqli_query($connect, $updateDemande))
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
//updateLavage
if(isset($_POST["editLavage"]))
{

    // Récupération des données du formulaire
    $vehiculeType = $_POST["vehicule"];
    $dateDemande = $_POST["date"];
    $lieu=$_POST["lieu"];
    $typeLavage=$_POST["type_lavage"];
    $id_demande = $_GET["id"];
    
    
    // Insertion des données dans la table "contact"
    $updateDemande = "UPDATE DEMANDE SET ID_VEHICULE_TYPE='$vehiculeType' , DATE_DEMANDE='$dateDemande', LIEU='$lieu', TYPE_LAVAGE='$typeLavage' WHERE ID_DEMANDE='$id_demande' ";
    if (mysqli_query($connect, $updateDemande))
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

?>