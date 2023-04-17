<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Se connecter</title>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/menu_button.js"></script>
    <script src="../js_/affichageForm.js"></script>
    <script src="../js_/show_hidePassword.js"></script>
    <script src="../js_/form_validation.js"></script>
    <?php include("./header.php"); ?>
  </head>
    <body>

    <div class="bodyindex">
      <table>
        <tr>
          <td>
          
            <form class="connexion" action="Login.php" method="POST" onSubmit=" return checkform_Connexion()">
            <img src="../picture_/connexion.png" id="connexionImg"  >
                <b>Connecter-vous sur votre compte Tow-Fix </b><br>
                <?php
                  if (isset($_SESSION['erreur'])) {
                    echo $_SESSION["erreur"];
                    unset($_SESSION['erreur']);
                  }
                  ?>
                <input
                type="email"
                name="email"
                id="email_connexion"
                placeholder="Saisir votre adresse email"/>
                <div class="error-message" id="email_connexion-error-message"></div>
                <input type="password" id="password" name="password" placeholder="Saisir votre mot de passe" />
                <div class="error-message" id="password-error-message"></div>
                <img src="../picture_/showPassword.png" alt="Show/Hide Password" id="showPassword" onclick="togglePassword()">
               <input type="submit" name="submit" value="Se connecter" class="submits"/>
                Vous n'êtes pas inscrits ? <br>
              <a href="./sinscrire.php"> Inscrivez-vous dès maintenant en 2 minutes</a>
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
          </td>
        </tr>
      </table>      
      <?php include("../html_/footer.html"); ?>
    </div>
    </body>
  </html>