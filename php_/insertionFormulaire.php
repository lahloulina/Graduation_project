<?php
    include "Database.php";
    //Contact form
    if(isset($_POST["submit_contact"]))
    {

        // Récupération des données du formulaire
        $nomContact = $_POST["nomContact"];
        $email = $_POST["email"];
        $contact = $_POST["contact"];
        
        // Insertion des données dans la table "contact"
        $query = "INSERT INTO contact (name, email, message) VALUES ('$nomContact', '$email', '$contact')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }

    
    if(isset($_POST["submit_remorquage"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $date = $_POST["date"];
        $localisation = $_POST["localisation"];
        $destination=$_POST["destination"];
        $id_type_demande=1;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE, DATE_DEMANDE, POINT_DEPART, POINT_ARRIVEE)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$date','$localisation','$destination')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }
    

    if(isset($_POST["submit_depannage"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $date = $_POST["date"];
        $listeServices=$_POST['listeServices'];
        $descriptionPanne=$_POST['descriptionPanne'];
        $localisation = $_POST["localisation"];
        $id_type_demande=2;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE, DATE_DEMANDE,LISTE_SERVICES_DEPANNAGE, DESCRIPTION, LIEU)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$date','$listeServices','$descriptionPanne','$localisation')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }

    if(isset($_POST["submit_déverouillage"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $date = $_POST["date"];
        $localisation = $_POST["localisation"];
        $id_type_demande=3;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE, DATE_DEMANDE, LIEU)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$date','$localisation')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }
   
    if(isset($_POST["submit_reparation_roues"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $marque_vehicule=$_POST['marque_vehicule'];
        $marque_roue=$_POST['marque_roue'];
        $diametre=$_POST['diamètre'];
        $hauteur=$_POST['hauteur'];
        $largeur=$_POST['largeur'];
        $date = $_POST["date"];
        $localisation = $_POST["localisation"];
        $id_type_demande=4;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE, MARQUE, MARQUE_ROUE, DIAMETRE, HAUTEUR, LARGEUR, DATE_DEMANDE, LIEU)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$marque_vehicule','$marque_roue','$diametre','$hauteur','$largeur','$date','$localisation')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }

    if(isset($_POST["submit_recharge_batterie"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $date = $_POST["date"];
        $localisation = $_POST["localisation"];
        $id_type_demande=5;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE, DATE_DEMANDE, LIEU)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$date','$localisation')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }

    if(isset($_POST["submit_Ravitaillement_carburant"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $carburant=$_POST["Carburant"];
        $date = $_POST["date"];
        $localisation = $_POST["localisation"];
        $id_type_demande=6;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE,TYPE_CARBURANT, DATE_DEMANDE, LIEU)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$carburant','$date','$localisation')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }

    if(isset($_POST["submit_Vidange"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $marque=$_POST["marque"];
        $vidangeService=$_POST["vidangeService"];
        $exigence=$_POST["exigence"];
        $date = $_POST["date"];
        $localisation = $_POST["localisation"];
        $id_type_demande=7;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE,MARQUE,SERVICES_VIDANGE,DESCRIPTION, DATE_DEMANDE, LIEU)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$marque','$vidangeService','$exigence','$date','$localisation')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }

    if(isset($_POST["submit_Lavage"]))
    {
        // Récupération des données du formulaire
        $id_user=$_SESSION["user_id"];
        $id_vehicule_type=$_POST["vehicule"];
        $type_lavage=$_POST["type_lavage"];
        $date = $_POST["date"];
        $localisation = $_POST["localisation"];
        $id_type_demande=8;

        // Insertion des données dans la table "contact"
        $query = "INSERT INTO DEMANDE (ID_TYPE_DEMANDE, ID_USER, ID_VEHICULE_TYPE,TYPE_LAVAGE, DATE_DEMANDE, LIEU)
        VALUES('$id_type_demande', '$id_user', '$id_vehicule_type','$type_lavage','$date','$localisation')";

        // Exécution de la requête sur l'objet de connexion MySQLi
        $result = mysqli_query($connect, $query);

        if ($result) 
        {
        // Affichage du message de succès
        echo '<div class="message success">Data inserted successfully!</div>';
        }  
        else 
        {
        // Affichage du message d'erreur
        echo '<div class="message error">Error inserting data: ' . mysqli_error($connect) . '</div>';
        }
    }
?>