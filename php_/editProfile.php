<!DOCTYPE html> 
<html lang="fr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Tow-fix</title>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/menu_button.js"></script>
    <?php include("./header.php"); ?>
   
    
  </head>
  <body>
    <?php include("./editInfos.php"); ?>
      <div class="bodyindex">
      <div class="bienvenue">Vous pouvez modifier vos informations ici </div>
      <br><?php 
      include "Database.php";
      $user_id=$_SESSION['user_id'];
      $query="SELECT * FROM client c, utilisateur u 
      WHERE u.ID_USER=$user_id AND u.ID_CLIENT=c.ID_CLIENT;";
      $result=mysqli_query($connect, $query);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>  
      <form method='post' class="formulaire">
        
        Nom<br> <input type="text" value="<?php echo $row['NOM'] ?>" name="lastName"> <br>
        Prenom <br><input type="text" value="<?php echo $row['PRENOM'] ?>"name="firstName" ><br>
        Adresse email<br><input type="text" value="<?php echo $row['EMAIL'] ?>"name="mail"; <?php echo $_SESSION['is_admin']?"disabled":""?>><br>
        Numéro de téléphone<br> <input type="text" value="<?php echo $row['NUM_TEL'] ?>"name="phone"><br>
        CIN <br><input type="text" value="<?php echo $row['CIN'] ?>"name="cin"><br>
        <input type="hidden" value="<?php echo $row['ID_CLIENT'] ?>" name="idClient">
        <input type='submit' name='editInfos'value="Valider"class="submits">
      </form><br>
      <form method="post" class="formulaire">
        Entrez votre ancien mot de passe <input type="password" name="oldPswd"><br>
        Entrer votre nouveau mot de passe <input type="password"name="newPswd"><br>
        Veuillez confirmer votre nouveau mot de passe <input type="password"name="confirmNewPswd"><br>
        <input type='submit' name='editPWD' value="Valider"class="submits">
      </form>
      <?php
      }
      ?>
      
      </div><div class="bodyindex">
      <?php include("../html_/footer.html"); ?></div>
    </body>
</html>