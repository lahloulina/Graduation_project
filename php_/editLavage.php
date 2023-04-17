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
        <form id="lavageForm" method="post" onSubmit="return checkform_Lavage()" class="formulaireEdit">
        Type de véhicule <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule"
                  value="<?php echo $row['ID_VEHICULE_TYPE'] ?>">
                  <option value="1">Moto</option>
                  <option value="2" >Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select> <br>
        type de lavage<select
                name="type_lavage"
                title="Choisissez un type de lavage"
                value="<?php echo $row['TYPE_LAVAGE'] ?>">
                <option value="interne">Lavage interne</option>
                <option value="externe">Lavage externe</option>
                <option value="interne et externe">Lavage interne et externe</option>
              </select><br>
        Date de demande <input  type="date" id="date_Lavage" name="date" min ='<?php echo date('Y-m-d');?>' value="<?php echo $row['DATE_DEMANDE'] ?>"><br>
        <div class="error-message" id="date_Lavage-error-message"></div>
        Localisation d'intervention <input type="text" id="localisation_Lavage" name="lieu" value="<?php echo $row['LIEU'] ?>"><br>
        <div class="error-message" id="localisation_Lavage-error-message"></div>
        <input type='submit' name='editLavage' value="Valider" name="submit_Lavage" class="submits">
      </form>
      <?php
      }
      ?>

    </div>
      <div class="bodyindex">
      <?php include("../html_/footer.html"); ?></div>
    </body>
</html>