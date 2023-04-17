<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tow-fix</title>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/menu_button.js"></script>
    <script src="../js_/affichageForm.js"></script>
    <script src="../js_/show_hidePassword.js"></script>
    <script src="../js_/form_validation.js"></script>
    <?php include("./header.php"); ?>
  </head>
    <body>
    <?php include("./editDemande.php"); ?>
    <div class="bodyindex">
    <div class="bienvenue">Vous pouvez modifier vos informations ici </div>
    <?php
      include "Database.php";
      $id_demande = $_GET['id'];
      $query="SELECT * FROM DEMANDE 
      WHERE ID_DEMANDE=$id_demande ;";
      $result=mysqli_query($connect, $query);
      while ($row = mysqli_fetch_assoc($result)) {
      ?>
        <form method='post' class="formulaireEdit" id="reparation_rouesForm" onSubmit="return checkform_Reparation_Roue()">
        Type de véhicule<select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule"
                  value="<?php echo $row['ID_VEHICULE_TYPE'] ?>">
                  <option value="1">Moto</option>
                  <option value="2" >Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select> <br>
        Marque du véhicule<input type="text" id="marque_vehicule" name="marqueV" value="<?php echo $row['MARQUE'] ?>"><br>
        <div class="error-message" id="marque_vehicule-error-message"></div>
        Marque de la roue<input type="text" id="marque_roue" name="marqueR" value="<?php echo $row['MARQUE_ROUE'] ?>"><br>
        <div class="error-message" id="marque_roue-error-message"></div>
        Diamètre de la roue<input type="text"  id="diametre_roue" name="diametre" value="<?php echo $row['DIAMETRE'] ?>"><br>
        <div class="error-message" id="diametre_roue-error-message"></div>
        Hauteur de la roue<input type="text" id="hauteur_roue" name="hauteur" value="<?php echo $row['HAUTEUR'] ?>"><br>
        <div class="error-message" id="hauteur_roue-error-message"></div>
        Largeur de la roue<input type="text" id="largeur_roue" name="largeur" value="<?php echo $row['LARGEUR'] ?>"><br>
        <div class="error-message" id="largeur_roue-error-message"></div>
        Date de demande <input  id="date_Reparation_Roue" type="date" name="date" min ='<?php echo date('Y-m-d');?>' name="dateDemande" value="<?php echo $row['DATE_DEMANDE'] ?>"><br>
        <div class="error-message" id="date_Reparation_Roue-error-message"></div>
        Localisation d'intervention<input id="localisation_Reparation_Roue" type="text" name="lieu" value="<?php echo $row['LIEU'] ?>"><br>
        <div class="error-message" id="localisation_Reparation_Roue-error-message"></div>
        <input type='submit' name="submit_reparation_roues" name='editRoues' value="Valider"class="submits">
      </form>
      <?php
      }
      ?>

    </div>
      <div class="bodyindex">
      <?php include("../html_/footer.html"); ?></div>
    </body>
</html>