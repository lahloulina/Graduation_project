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
      <form id="vidangeForm" method="post" onSubmit="return checkform_Vidange()"class="formulaireEdit">
        Type de véhicule <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule" 
                  value="<?php echo $row['ID_VEHICULE_TYPE'] ?>">
                  <option value="1">Moto</option>
                  <option value="2" >Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select><br>
        Marque du véhicule <input type="text" id="marque" name="marque"value="<?php echo $row['MARQUE'] ?>"> <br>
        <div class="error-message" id="marque-error-message"></div>
        De quel service de vidange souhaitez-vous bénéficiez ?<select
                name="vidangeService"
                title="Sélectionnez le service que vous voulez"
                value="<?php echo $row['SERVICES_VIDANGE'] ?>">
                <option value="changerHuileMoteur">Remplacement de l'huile moteur</option>
                <option value="verificationHuileMoteur">Vérification du niveau d'huile</option>
                <option value="filtreHuile">Remplacement du filtre à huile</option>
                <option value="inspection">Inspection générale des différents composants du moteur</option>
                <option value="autres">Contrôle du niveau et de la qualité des autres fluides</option>
                </select> <br>
        Date de demande <input  type="date" name="date" id="date_Vidange" min ='<?php echo date('Y-m-d');?>' value="<?php echo $row['DATE_DEMANDE'] ?>"><br>
        <div class="error-message" id="date_Vidange-error-message"></div>
        Quelles sont les exigences de votre véhicule <br><textarea name="exigence" id="exigence" rows="8" value="<?php echo $row['DESCRIPTION'] ?>"></textarea><br>
        <div class="error-message" id="exigence-error-message"></div>
        Localisation d'intervention <input type="text" name="lieu"value="<?php echo $row['LIEU'] ?>"><br>
        <input type='submit' name='editVidange'value="Valider"class="submits">
      </form>
      <?php
      }
      ?>
    </div>
      <div class="bodyindex">
      <?php include("../html_/footer.html"); ?></div>
    </body>
</html>