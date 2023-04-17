<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tow-fix</title>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/menu_button.js"></script>
    <script src="../js_/affichageForm.js"></script>
    <script src="../js_/form_validation.js"></script>
    <?php include("./header.php"); ?>
    
  </head>
  <body>
  <div class="bodyindex">
    <table>
      <tr>
        <td>
      
    <form id="inscription" action="./Register.php" method="POST"  onSubmit="return checkform_inscription()">
        <b>Créer votre compte Tow-Fix </b>
        <div class="error-message">
        <?php
      if (isset($_SESSION['error'])) {
        echo $_SESSION["error"];
        unset($_SESSION['error']);
      }
      ?>
      </div>
      <input type="text" name="Prenom" id="firstname" placeholder="Prénom" />
		  <div class="error-message" id="firstname-error-message"></div>
      <input type="text" name="Nom" id="lastname" placeholder="Nom"/>
		  <div class="error-message" id="lastname-error-message"></div>
      <input
        type="text"
        name="N°_de_téléphone"
        placeholder="N° de téléphone"
        id="phone"
      />
		  <div class="error-message" id="phone-error-message"></div>
      <input type="text" name="CIN" placeholder="CIN" id="cin"/>
		  <div class="error-message" id="cin-error-message"></div>
      <input type="email" name="Email" id="email" placeholder="Email"/>
		  <div class="error-message" id="email-error-message"></div>
      <input type="password" name="mdp" id="mdp" placeholder="Mot de passe"/>
		  <div class="error-message" id="mdp-error-message"></div>
      <input
        type="password"
        name="pswrd"
        id="confirm-mdp"
        placeholder="Confirmation du mot de passe"
        title="Saisissez le même mot de passe que vous venez de saisir"
      />
		  <div class="error-message" id="confirm-mdp-error-message"></div>
      <input type="submit" name="submit" value="Créer mon compte TOW-FIX" />
      Vous êtes déjà inscrits ? <br>
      <a href="Se_connecter.php"> Connectez-vous à votre compte Tow-Fix</a>
    </form>
        </td>
        <td>
    <div class="avantages">
      <div class="firstPhrase">Benéficiez gratuitement des avantages de votre compte Tow-Fix <br></div>
      <b> &#10003; </b> Accès à un réseau de remorqueurs fiables et professionnels dans votre région.<br>
      <b> &#10003; </b> Possibilité de demander une assistance routière en tout temps, 24 heures sur 24 et 7 jours sur 7.<br>
      <b> &#10003; </b> Stockage et gestion de votre historique de remorquage pour un accès facile aux informations sur les services précédents.<br>
      <b> &#10003; </b> Possibilité de sauvegarder vos informations de paiement pour un paiement rapide et facile des services de remorquage.<br>
      <b> &#10003; </b> par SMS ou par e-mail pour des mises à jour de statut de votre demande de remorquage.<br>
      <b> &#10003; </b> Assistance pour les dépannages mineurs tels que les pneus crevés ou les pannes de batterie.<br>
      <b> &#10003; </b> Offres spéciales et réductions exclusives pour les membres du compte sur les services de remorquage et autres services connexes.<br>
    </div>
        </td></tr></table>
        <?php include("../html_/footer.html"); ?>
  </div>
  </body>
</html>
   