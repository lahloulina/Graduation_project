<?php
include "Database.php";
session_start();

    if(isset($_POST["submit"])){
        $NOM=mysqli_real_escape_string($connect,$_POST['Nom']);
        $PRENOM=mysqli_real_escape_string($connect,$_POST['Prenom']);
        $NUM_TEL=mysqli_real_escape_string($connect,$_POST['N°_de_téléphone']);
        $CIN=mysqli_real_escape_string($connect,$_POST['CIN']);
        $EMAIL=mysqli_real_escape_string($connect,$_POST['Email']);
        $pass=md5($_POST['mdp']);
        $confirm_pass=md5($_POST['pswrd']);
        $query="SELECT * FROM UTILISATEUR WHERE EMAIL='$EMAIL' ";
        $result= mysqli_query($connect,$query);
        if(mysqli_num_rows($result) > 0){
            $_SESSION['error'] = "Utilisateur existant";
            header("Location:sinscrire.php");
        }
        elseif($pass != $confirm_pass){
            $_SESSION['error'] = 'Les mots de passe ne sont pas compatibles';
            header("Location:sinscrire.php");
        }
        else{
            $insertion_client = "INSERT INTO CLIENT(NOM,PRENOM,NUM_TEL,CIN) VALUES('$NOM','$PRENOM','$NUM_TEL','$CIN')";
            //vérification de la requête de création;
            if(mysqli_query($connect, $insertion_client)){
                $last_id= mysqli_insert_id($connect);
                $insertion_utilisateur= "INSERT INTO UTILISATEUR(ID_CLIENT,EMAIL,MDP) VALUES('$last_id','$EMAIL','$pass')";
                mysqli_query($connect,$insertion_utilisateur);
            }
            header('Location:Se_connecter.php');
        }
    }

?>