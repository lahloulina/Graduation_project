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
        <div class="bienvenue">Découvrez ici l'historique des demandes faites par vos clients ! </div>
        <div class="choix">
      <button class="btn" onclick="afficherHistoriqueremorquage()" >Remorquage</button>
      <button class="btn" onclick="afficherHistoriquedepannage()" >Dépannage</button>
      <button class="btn" onclick="afficherHistoriqueouverture()" >Déverouillage de portes</button><br>
      <button class="btn" onclick="afficherHistoriqueroues()"  >Réparation et changement de roues</button>
      <button class="btn" onclick="afficherHistoriquebatterie()" >Recharge de batterie</button><br>
      <button class="btn" onclick="afficherHistoriquecarburant()" >Ravitaillement en carburant</button>
      <button class="btn" onclick="afficherHistoriquevidange()" >Vidange</button><br>
      <button class="btn" onclick="afficherHistoriquelavage()" >Lavage</button>
    
      <!-- affichage des demandes remorquages -->
      <table id="remorquageHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Date de demande</th>
    <th> Point de départ</th>
    <th> Point d'arrivée</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes remorquages
        $sql = "SELECT d.DATE_DEMANDE, d.POINT_DEPART, d.POINT_ARRIVEE, vt.LABEL, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 1 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);

         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="5">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["POINT_DEPART"] . "</td>";
        echo "<td>" . $row["POINT_ARRIVEE"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemande.php?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a  href="editRemorquage.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>


    <!-- affichage des demandes depannage -->
    <table id="depannageHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Date de demande</th>
    <th> Specification de panne</th>
    <th> Description de panne</th>
    <th> Localisation d'intervention</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes depannage
        $sql = "SELECT d.DATE_DEMANDE, d.LIEU, vt.LABEL, d.LISTE_SERVICES_DEPANNAGE, d.DESCRIPTION, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 2 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="6">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["LISTE_SERVICES_DEPANNAGE"] . "</td>";
        echo "<td>" . $row["DESCRIPTION"] . "</td>";
        echo "<td>" . $row["LIEU"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemande.php?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a href="editDepannage.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>

      <!-- affichage des demandes de deverouillage portes -->
    <table id="portesHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Date de demande</th>
    <th> Localisation d'intervention</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes de deverouillage portes
        $sql = "SELECT d.DATE_DEMANDE, d.LIEU, vt.LABEL, d.LISTE_SERVICES_DEPANNAGE, d.DESCRIPTION, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 3 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND  d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="4">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["LIEU"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemande.php?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a href="editPortes.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>

    <!-- affichage des demandes de reparation de roues -->
    <table id="rouesHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Marque du véhicule</th>
    <th> Marque de la roue</th>
    <th> Dimensions de la roue</th>
    <th> Date de demande</th>
    <th> Localisation d'intervention</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes de reparation de roues
        $sql = "SELECT d.DATE_DEMANDE, d.LIEU, vt.LABEL, d.LISTE_SERVICES_DEPANNAGE, d.DESCRIPTION,d.MARQUE, d.MARQUE_ROUE, d.HAUTEUR, d.LARGEUR, d.DIAMETRE, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 4 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND  d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="7">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["MARQUE"] . "</td>";
        echo "<td>" . $row["MARQUE_ROUE"] . "</td>";
        echo "<td>" . $row["LARGEUR"] ." / " .$row["HAUTEUR"]. " R". $row["DIAMETRE"]."</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["LIEU"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemande.php?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a href="editRoues.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>

    <!-- affichage des demandes de recharge de batterie -->
    <table id="batterieHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Date de demande</th>
    <th> Localisation d'intervention</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes de recharge de batterie
        $sql = "SELECT d.DATE_DEMANDE, d.LIEU, vt.LABEL, d.LISTE_SERVICES_DEPANNAGE, d.DESCRIPTION, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 5 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND  d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="4">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["LIEU"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemande.php?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a href="editBatterie.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>


    <!-- affichage des demandes de ravitaillement en carburant -->
    <table id="carburantHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Type de carburant</th>
    <th> Date de demande</th>
    <th> Localisation d'intervention</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes de ravitaillement en carburant
        $sql = "SELECT d.DATE_DEMANDE, d.LIEU, vt.LABEL, d.LISTE_SERVICES_DEPANNAGE, d.DESCRIPTION, d.TYPE_CARBURANT, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 6 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND  d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="5">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["TYPE_CARBURANT"] . "</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["LIEU"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemandephp?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a href="./editCarburant.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>
    
    <!-- affichage des demandes de vidange -->
    <table id="vidangeHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Marque du véhicule</th>
    <th> Service de vidange</th>
    <th> Exigences du véhicule</th>
    <th> Date de demande</th>
    <th> Localisation d'intervention</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes de vidange
        $sql = "SELECT d.DATE_DEMANDE, d.LIEU, vt.LABEL, d.LISTE_SERVICES_DEPANNAGE, d.DESCRIPTION, d.TYPE_CARBURANT, d.MARQUE, d.SERVICES_VIDANGE, d.DESCRIPTION, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 7 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND  d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="7">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["MARQUE"] . "</td>";
        echo "<td>" . $row["SERVICES_VIDANGE"] . "</td>";
        echo "<td>" . $row["DESCRIPTION"] . "</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["LIEU"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemande.php?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a href="editVidange.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>

    <!-- affichage des demandes de lavage -->
    <table id="lavageHistorique" class="tableStyle">
    <th> Type de véhicule</th>
    <th> Type de Lavage</th>
    <th> Date de demande</th>
    <th> Localisation d'intervention</th>
    <th>Action</th>
    <?php
    include "Database.php";
        //affichage a partir des demandes de lavage
        $sql = "SELECT d.DATE_DEMANDE, d.LIEU, vt.LABEL, d.TYPE_LAVAGE, d.ID_DEMANDE
        FROM DEMANDE d, VEHICULE_TYPE vt
        WHERE d.ID_TYPE_DEMANDE = 8 AND d.ID_VEHICULE_TYPE = vt.ID_VEHICULE_TYPE AND  d.ID_USER =".$_SESSION['user_id'];
        
        $resultat = mysqli_query($connect, $sql);
         if (mysqli_num_rows($resultat)==0)
         {?>
          <tr>
            <td colspan="5">Aucune demande de ce type n'est enregistrée !</td>
          </tr>
          <?php
         }
         else {
        while ($row = mysqli_fetch_assoc($resultat)) 
        {
        echo "<tr>";
        echo "<td>" . $row["LABEL"] . "</td>";
        echo "<td>" . $row["TYPE_LAVAGE"] . "</td>";
        echo "<td>" . $row["DATE_DEMANDE"] . "</td>";
        echo "<td>" . $row["LIEU"] . "</td>";
        echo '<td><a onclick="DeleteConfirm()" href="./deleteDemande.php?id='.$row['ID_DEMANDE'].'">Supprimer</a><br> <a href="editLavage.php?id='.$row['ID_DEMANDE'].'">Modifier</a></td>';

        echo "</tr>";
        }
      }
      ?>
    </table>
  </div>
   <?php include("../html_/footer.html"); ?>
    </div>
    </body>
</html>    