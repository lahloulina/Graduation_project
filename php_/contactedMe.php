<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tow-fix</title>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/menu_button.js"></script>
    <script src="../js_/affichageForm.js"></script>
    <?php include("./header.php"); ?>
    
  </head>
  <body>
    <div class="bodyindex">
      <div class="bienvenue">
        Découvrez ici l'historique des messages que vous avez recu ! 
      </div>
        
    <?php
    include "Database.php";
        //affichage a partir de table contact
        $sql = "SELECT ID_CONTACT,NAME,EMAIL,MESSAGE FROM contact";
        $resultat = mysqli_query($connect, $sql);

        echo '<table class="tableContact" >';
        echo "<tr><th>ID</th><th>Nom</th><th>Email</th><th>Message</th><th>Action</th></tr>";
        if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="5">Aucun message n'est enregistré !</td>
          </tr>
          <?php
         }
         else{
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["ID_CONTACT"] . "</td>";
        echo "<td>" . $row["NAME"] . "</td>";
        echo "<td>" . $row["EMAIL"] . "</td>";
        echo "<td>" . $row["MESSAGE"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="deleteContact.php?id='.$row['ID_CONTACT'].'">Supprimer</a></td>';
        echo "</tr>";
        }}
        echo "</table>";

        ?>
        <script>
                  function DeleteConfirm() {
                    confirm("Are you sure to delete the record");
                  }
                </script>
        <?php include("../html_/footer.html"); ?>    
    </div>
  </body>
</html>