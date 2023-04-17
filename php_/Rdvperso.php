<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8" />
    <title>Rendez-vous personnalisé</title>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/menu_button.js"></script>
    <script src="../js_/affichageForm.js"></script>
    <script src="../js_/form_validation.js"></script>
    <?php include("./header.php"); ?>
    </head>
  <body>
    <?php
  include 'insertionFormulaire.php';
  ?>
  <div class="bodyindex">
    <h1 class="question"> Veuillez spécifier le type de demande que vous souhaitez effectuer</h1>
    <div class="choix">
      <button class="btn" onclick="afficherremorquage()"action="historiqueAdmin.php" method="post" name="remorquage">Remorquage</button>
      <button class="btn" onclick="afficherdepannage()"action="historiqueAdmin.php" method="post" name="depannage">Dépannage</button>
      <button class="btn" onclick="afficherouverture()"action="historiqueAdmin.php" method="post" name="portes">Déverouillage de portes</button><br>
      <button class="btn" onclick="afficherroues()"action="historiqueAdmin.php" method="post" >Réparation et changement de roues</button>
      <button class="btn" onclick="afficherbatterie()"action="historiqueAdmin.php" method="post">Recharge de batterie</button><br>
      <button class="btn" onclick="affichercarburant()"action="historiqueAdmin.php" method="post">Ravitaillement en carburant</button>
      <button class="btn" onclick="affichervidange()"action="historiqueAdmin.php" method="post">Vidange</button><br>
      <button class="btn" onclick="afficherlavage()"action="historiqueAdmin.php" method="post">Lavage</button>
    </div> <br>
      <form id="remorquageForm" method="post" onSubmit="return checkform_Remorquage()">
        <fieldset>
          <legend>Remorquage</legend>
          <table>
            <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date_demande" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date-error-message"></div>
              </td>
            </tr>
          <tr>
            <td> Votre emplacement actuel:  </td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation" title="Localisation" />
              <div class="error-message" id="localisation-error-message"></div>
            <script src="../js_/map.js"></script>
            </td>
          </tr>
          <tr>
            <td> L'adresse de la destination souhaitée :  </td>
            <td>
              <input type="text" name="destination" id="destination" title="Localisation" />
              <div class="error-message" id="destination-error-message"></div>
              </td>
          </tr>
        </table>
      </fieldset>
      <br> <button class="bouttonForm" type="submit" value="Envoyer" name="submit_remorquage">Envoyer</button>
    </form>
    
    <form id="depannageForm" method="POST" onSubmit="return checkform_Depannage()">
      <fieldset>
        <legend> Dépannage</legend>
        <table>
          <tr>
            <td>Specification de panne</td>
            <td>
              <select
                name="listeServices"
                title="Choisissez le service de dépannage"
              >
                <option value="moteur">Réparation de moteur</option>
                <option value="frein">Réparation du système de freinage</option>
                <option value="climatiseur">Réparation du système de climatisation</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Donner une description de panne en question:</td>
            <td>
              <input type="text" name="descriptionPanne" id="description_Panne" title ="panne"/>
              <div class="error-message" id="description_Panne-error-message"></div>
            </td>
          </tr>
            <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date_dem-error-message"></div>
              </td>
            </tr>
            <tr>
            <td>Votre emplacement actuel:</td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation_dep" title="Localisation" />
              <div class="error-message" id="localisation_dep-error-message"></div>
              <script src="../js_/map.js"></script>
            </td>
          </tr>
         </table>
      </fieldset>
      <button type="submit" class="bouttonForm" value="Envoyer" name="submit_depannage">Envoyer</button>
    </form>
    <form id="portesForm" method="POST" onSubmit="return checkform_Deverouillage()">
      <fieldset>
        <legend>OUVERTURE DE PORTES</legend>
        <table>
        <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date_dev" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date_dev-error-message"></div>

              </td>
            </tr>
            <tr>
            <td>Votre emplacement actuel:</td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation_dev" title="Localisation" />
              <div class="error-message" id="localisation_dev-error-message"></div>
              <script src="../js_/map.js"></script>
            </td>
          </tr>
          </table>
      </fieldset>
      <button type="submit" class="bouttonForm" value="Envoyer" name="submit_déverouillage">Envoyer</button>
    </form>
    <form id="reparation_rouesForm" method="post" onSubmit="return checkform_Reparation_Roue()">
      <fieldset>
        <legend><b>RÉPARATIONS DE ROUES</b></legend>
        <table>
        <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>  
        <tr>
            <td>Marque du véhicule</td>
            <td>
              <input type="text" name="marque_vehicule" id="marque_vehicule" placeholder="Saisissez la marque de votre véhicule" />
              <div class="error-message" id="marque_vehicule-error-message"></div>
            </td>
          </tr>
          <tr>
            <td>Marque de la roue:</td>
            <td>
              <input type="text" name="marque_roue" id="marque_roue" placeholder="Marque de roue" />
              <div class="error-message" id="marque_roue-error-message"></div>
            </td>
          </tr>
          <tr>
            <td>Diamètre de la roue:</td>
            <td>
              <input type="text" name="diamètre" id="diametre_roue" placeholder="diamètre de roue" />
              <div class="error-message" id="diametre_roue-error-message"></div>
            </td>
          </tr>
          <tr>
            <td>Hauteur de la roue:</td>
            <td><input type="text" name="hauteur" id="hauteur_roue" placeholder="hauteur de roue" />
            <div class="error-message" id="hauteur_roue-error-message"></div>
          </td>
            
          </tr>
          <tr>
            <td>Largeur de la roue:</td>
            <td>
              <input type="text" name="largeur" id="largeur_roue" placeholder="largeur de roue" />
              <div class="error-message" id="largeur_roue-error-message"></div>
            </td>
          </tr>
          <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date_Reparation_Roue" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date_Reparation_Roue-error-message"></div>
              </td>
            </tr>
          <tr>
            <td>Votre emplacement actuel:</td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation_Reparation_Roue" title="Localisation" />
              <div class="error-message" id="localisation_Reparation_Roue-error-message"></div>
              <script src="../js_/map.js"></script>
            </td>
          </tr>
        </table>
      </fieldset>
      <br>
      <button type="submit" class="bouttonForm" value="Envoyer" name="submit_reparation_roues">Envoyer</button>
    </form>
    <form id="batterieForm" method="post" onSubmit="return checkform_Recharge_Batterie()">
      <fieldset>
        <legend>RECHARGE DE BATTERIE</legend>
        <table>
        <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date_recharge_batterie" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date_recharge_batterie-error-message"></div>
              </td>
            </tr>
            <tr>
            <td>Votre emplacement actuel:</td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation_recharge_batterie" title="Localisation" />
              <div class="error-message" id="localisation_recharge_batterie-error-message"></div>
              <script src="../js_/map.js"></script>
            </td>
          </tr>
        </table>
        </fieldset>
        <button type="submit" class="bouttonForm" value="Envoyer" name="submit_recharge_batterie">Envoyer</button>
      </form>
      <form id="carburantForm" method="post" onSubmit="return checkform_Ravitaillement()">
      <fieldset>
        <legend>RAVITAILLEMENT EN CARBURANT</legend>
        <table>
          <tr>
            <td>Type de carburant</td>
            <td>
                <select name="Carburant" title="Type de carburant">
                    <option value="Essence">Essence</option>
                    <option value="Diesel">Diesel</option>
                </select>
            </td>
          </tr>
          <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date_Ravitaillement" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date_Ravitaillement-error-message"></div>
              </td>
            </tr>
            <tr>
            <td>Votre emplacement actuel:</td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation_Ravitaillement" title="Localisation" />
              <div class="error-message" id="localisation_Ravitaillement-error-message"></div>

              <script src="../js_/map.js"></script>
            </td>
          </tr>
         </table>
      </fieldset>
      <button type="submit" class="bouttonForm" value="Envoyer" name="submit_Ravitaillement_carburant">Envoyer</button>
    </form>
  <form id="vidangeForm" method="post" onSubmit="return checkform_Vidange()">
      <fieldset>
        <legend><b>VIDANGE</b></legend>
        <table>
        <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>
          <tr>
            <td>Marque du véhicule</td>
            <td>
              <input type="text" name="marque" id="marque" placeholder="Saisissez la marque de votre véhicule" />
              <div class="error-message" id="marque-error-message"></div>
            </td>
          </tr>
          <tr>
            <td>De quel service de vidange souhaitez-vous bénéficiez ?</td>
            <td>
              <select
                name="vidangeService"
                title="Sélectionnez le service que vous voulez"
              >
                <option value="changerHuileMoteur">Remplacement de l'huile moteur</option>
                <option value="verificationHuileMoteur">Vérification du niveau d'huile</option>
                <option value="filtreHuile">Remplacement du filtre à huile</option>
                <option value="inspection">Inspection générale des différents composants du moteur</option>
                <option value="autres">Contrôle du niveau et de la qualité des autres fluides</option>
                </select>
            </td>
          </tr>
          <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date_Vidange" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date_Vidange-error-message"></div>
              </td>
            </tr>
          <tr>
            <td>Quelles sont les exigences de votre véhicule</td>
            <td>
              <textarea name="exigence" id="exigence" placeholder="Quelles sont vos exigences ?" rows="4" ></textarea>
              <div class="error-message" id="exigence-error-message"></div>
            </td>
          </tr>
          <tr>
            <td>Votre emplacement actuel:</td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation_Vidange" title="Localisation" />
              <div class="error-message" id="localisation_Vidange-error-message"></div>
              <script src="../js_/map.js"></script>
            </td>
          </tr>
        </table>
      </fieldset>
      <button type="submit" class="bouttonForm" value="Envoyer" name="submit_Vidange">Envoyer</button>
    </form>
    <form id="lavageForm" method="post" onSubmit="return checkform_Lavage()">
      <fieldset>
        <legend>LAVAGE</legend>
        <table>
        <tr>
             <td>Type de véhicule:</td>
              <td>
                <select
                  name="vehicule"
                  title="Saisissez le type de votre véhicule">
                  <option value="1">Moto</option>
                  <option value="2" selected>Voiture</option>
                  <option value="3">Camion ou bus</option>
                </select>
              </td>
            </tr>
         <tr>
            <td>Type de lavage</td>
            <td>
              <select
                name="type_lavage"
                title="Choisissez un type de lavage"
              >
                <option value="interne">Lavage interne</option>
                <option value="externe">Lavage externe</option>
                <option value="interne et externe">Lavage interne et externe</option>
              </select>
            </td>
          </tr>
          <tr>
              <td>Date de votre demande:</td>
              <td>
                <input type="date" name="date" id="date_Lavage" min ='<?php echo date('Y-m-d');?>'>
                <div class="error-message" id="date_Lavage-error-message"></div>
              </td>
            </tr>
          <tr>
            <td>Votre emplacement actuel:</td>
            <td>
              <input type="text" class="salam" name="localisation" id="localisation_Lavage" title="Localisation" />
              <div class="error-message" id="localisation_Lavage-error-message"></div>
              <script src="../js_/map.js"></script>
            </td>
          </tr>
        </table>
      </fieldset>
      <button type="submit"  class="bouttonForm" value="Envoyer" name="submit_Lavage">Envoyer</button>
    </form>
    <?php include("../html_/footer.html"); ?>
        </div>
    </body>
</html>