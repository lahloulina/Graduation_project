<?php
include "Database.php";

    session_start();
    
    if(isset($_POST["submit"])){
      $email=mysqli_real_escape_string($connect,$_POST['email']);
      $pass=md5($_POST['password']);
      $query="SELECT * FROM UTILISATEUR WHERE email='$email' ";
      $result= mysqli_query($connect,$query);

      if(mysqli_num_rows($result) == 0){
        $_SESSION['erreur'] = "Utilisateur introuvable";
        header("Location:Se_connecter.php");
    }
        
      else{
        $row = mysqli_fetch_array($result);
        if($row['MDP'] == $pass){
          $_SESSION['user_id']= $row[0];
          $_SESSION['email']=$row[2];
          if($row[2]=='admin.towfix@gmail.com'){
            $_SESSION['is_admin']=true;
          }
          else{
            $_SESSION['is_admin']=false;
          }
          header('Location:index.php');
        }
        else{
          $_SESSION['erreur'] = 'Le mot de passe est incorrect';
          header("Location:Se_connecter.php");
        }
      }
    }
      
?>