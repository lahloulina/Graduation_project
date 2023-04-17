<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tow-fix</title>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/menu_button.js"></script>
    <script src="../js_/affichageForm.js"></script>
    <script src="../js_/utils.js"></script>
    <?php include("./header.php"); ?>
    
    
  </head>
  <body>
    <div class="bodyindex">
      <div class="bienvenue">
        Découvrez ici les utilisateurs qui sont inscrits dans votre plateforme ! 
      </div>
        
      <table class="tableStyle">
    <th> Nom de l'utilisateur</th>
    <th> téléphone de l'utilisateur</th>
    <th> Email de l'utilisateur</th>
    <th> CIN de l'utilisateur</th>
    <th>Action</th>
      <?php
    include "Database.php";
        //affichage a partir des demandes de lavage
        $sql = "SELECT u.EMAIL, c.NOM, c.PRENOM, c.NUM_TEL, c.CIN, u.ID_USER, c.ID_CLIENT
        FROM UTILISATEUR u, CLIENT c
        WHERE u.ID_CLIENT = c.ID_CLIENT AND u.email !='admin.towfix@gmail.com';";
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {
          echo("Aucune demande de ce type n'est enregistrée !");
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["NOM"] ." ". $row["PRENOM"]."</td>";
        echo "<td>" . $row["NUM_TEL"] . "</td>";
        echo "<td>" . $row["EMAIL"] . "</td>";
        echo "<td>" . $row["CIN"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="deleteUser.php?id_user='.$row['ID_USER'].'&id_client='.$row['ID_CLIENT'].'">Supprimer</a></td>';
        echo "</tr>";
        }
      }
      ?> </table>
        
        <?php include("../html_/footer.html"); ?>    
    </div>
  </body>
</html>