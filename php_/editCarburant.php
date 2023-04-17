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
        <form id="carburantForm" method="post" onSubmit="return checkform_Ravitaillement()" class="formulaireEdit">
        Type de véhicule <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule"
                  value="<?php echo $row['ID_VEHICULE_TYPE'] ?>">
                  <option value="1">Moto</option>
                  <option value="2" >Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select><br>
        Date de demande <input  type="date" id="date_Ravitaillement" name="date" min ='<?php echo date('Y-m-d');?>' name="dateDemande" value="<?php echo $row['DATE_DEMANDE'] ?>"><br>
        <div class="error-message" id="date_Ravitaillement-error-message"></div>
        Type de carburant<select title="Type de carburant"name="typeCarburant" value="<?php echo $row['TYPE_CARBURANT'] ?>">
                    <option value="Essence">Essence</option>
                    <option value="Diesel">Diesel</option>
                </select><br>
        Localisation d'intervention<input type="text" id="localisation_Ravitaillement" name="lieu" value="<?php echo $row['LIEU'] ?>"><br>
        <div class="error-message" id="localisation_Ravitaillement-error-message"></div>
        <input type='submit' name='editCarburant' name="submit_Ravitaillement_carburant" value="Valider"class="submits">
      </form>
      <?php
      }
      ?>
    </div>
      <div class="bodyindex">
      <?php include("../html_/footer.html"); ?></div>
    </body>
</html>