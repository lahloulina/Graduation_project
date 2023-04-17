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
        <form method='post' class="formulaireEdit" onSubmit="return checkform_Remorquage()">
        Type de véhicule <select 
                  name="vehicule"
                  title="Saisissez le type de votre véhicule" value="<?php echo $row['ID_VEHICULE_TYPE'] ?>">
                  <option value="1">Moto</option>
                  <option value="2" >Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select> <br>
        Date de demande <input  type="date" id="date_demande" min ='<?php echo date('Y-m-d');?>' name="date" value="<?php echo $row['DATE_DEMANDE'] ?>"><br>
        <div class="error-message" id="date-error-message"></div>
        Point de départ<input type="text" name="point_depart" id="localisation" value="<?php echo $row['POINT_DEPART'] ?>"><br>
        <div class="error-message" id="localisation-error-message"></div>
        Point d'arrivée <input type="text" name="point_arrivee" id="destination" value="<?php echo $row['POINT_ARRIVEE'] ?>"><br>
        <div class="error-message" id="destination-error-message"></div>
        <input type='submit' name='editRemorquage'value="Valider"class="submits">
      </form>
      <?php
      }
      ?>

    </div>
      <div class="bodyindex">
      <?php include("../html_/footer.html"); ?></div>
    </body>
</html>