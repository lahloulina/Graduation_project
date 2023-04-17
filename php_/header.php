<?php
session_start();
$user_id= isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
$is_admin= isset($_SESSION['is_admin']) ? $_SESSION['is_admin'] : null;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <script src="../js_/menu_button.js"></script>
    <link rel="stylesheet" href="../css_/index.css" />
    <script src="../js_/affichage.js"></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo">
          <img class="logo" src="../picture_/LOGO.png" alt="logo" />
        </div>

        <ul class="menu">
        <?php 
            if(isset($user_id)==false):
          ?>
          <li><a href="./Se_connecter.php">Se connecter</a></li>
          <li><a href="./sinscrire.php">S'inscrire</a></li>
          <?php 
            elseif(isset($user_id)==true):
          ?>
          <li ><a href="./editProfile.php">Modifier mon compte</a></li>
          <li><a href="./Logout.php">Se déconnecter</a></li>
          <?php
          endif;
          ?>
        </ul>
      </nav>
    </header>
    <div id="leftMenu">
      <a href="javscript:void(0)" class="btn-area" onclick="closeBtn()">×</a>
      <div class="mainNav">
        <a href="../php_/index.php">home</a>
        <a href="../php_/index.php#remorquage">Remorquage</a>
        <a href="../php_/index.php#depannage">Dépannage</a>
        <a href="../php_/index.php#ouverture_portes">Déverouillage de portes</a>
        <a href="../php_/index.php#reparation_roues">Réparation et changement de roues</a>
        <a href="../php_/index.php#recharge_batterie">Recharge de batterie</a>
        <a href="../php_/index.php#ravitaillement">Ravitaillement en carburant</a>
        <a href="../php_/index.php#vidange">Vidange</a>
        <a href="../php_/index.php#lavage">Lavage</a>
        
        
        <?php if(isset($user_id)==true && $is_admin==true): ?>
              <a href="./historiqueAdmin.php">
                <div class="idAdmin">Historique des demandes des clients</div></a> 
                <a href="./contactedMe.php">
                  <div class="idAdmin">Historique des messages des clients</div>
                </a>
                <a href="./users.php">
                  <div class="idAdmin">Gestion des utilisateurs</div>
                </a>
        <?php
                        elseif(isset($user_id)==true && $is_admin==false):
              ?>
              <a href="./historiqueClient.php"$>
                <div id="mesDemandes">Mon historique de demandes</div></a>
                <a href="../php_/Rdvperso.php">
                <div id="rdv">Rendez-vous personnalisé</div>
                </a>
              <?php
                  endif;
        ?>
      </div>
        
    </div>
    <span onclick="openBtn()">☰ Menu</span>
  </body>
</html>
