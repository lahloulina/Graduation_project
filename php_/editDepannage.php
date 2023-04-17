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
        <form method='post' class="formulaireEdit" id="depannageForm" onSubmit="return checkform_Depannage()">
        Type de véhicule <select 
                  name="vehicule"
                  title="Saisissez le type de votre véhicule" value="<?php echo $row['ID_VEHICULE_TYPE'] ?>">
                  <option value="1">Moto</option>
                  <option value="2" >Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select><br>
        Date de demande <input  type="date" id="date" name="date" min ='<?php echo date('Y-m-d');?>'  value="<?php echo $row['DATE_DEMANDE'] ?>"><br>
        <div class="error-message" id="date_dem-error-message"></div>
        Specification de panne<select
                name="listeServices"
                title="Choisissez le service de dépannage"
                value="<?php echo $row['LISTE_SERVICES_DEPANNAGE'] ?>">
                <option value="moteur">Réparation de moteur</option>
                <option value="frein">Réparation du système de freinage</option>
                <option value="climatiseur">Réparation du système de climatisation</option>
              </select> <br>
        Description de panne <input type="text" name="description" id="description_Panne" value="<?php echo $row['DESCRIPTION'] ?>"><br>
        <div class="error-message" id="description_Panne-error-message"></div>
        Localisation d'intervention <input type="text" id="localisation_dep" name="lieu" value="<?php echo $row['LIEU'] ?>"><br>
        <div class="error-message" id="localisation_dep-error-message"></div>
        <input type='submit' name='editDepannage' name="submit_depannage" value="Valider"class="submits">
      </form>
      <?php
      }
      ?>
    </div>
      <div class="bodyindex">
      <?php include("../html_/footer.html"); ?></div>
    </body>
</html>