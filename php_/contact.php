<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Tow-fix </title>
            <link rel="stylesheet" href="../css_/index.css" />
            <script src="../js_/menu_button.js"></script>
            <script src="../js_/affichageForm.js"></script>
            <script src="../js_/form_validation.js"></script>
            <?php include("./header.php"); ?>
        </head>
        <body>
                        <?php
                            include "insertionFormulaire.php";
                        ?>
            <div class="bodyindex">
                    <div class="bienvenue" >
                    Contactez Tow-Fix
                    </div>
                        <img src="../picture_/imagehead.png" id="imgHeader"> <br>
                        <div class="avantagesContact">
                        Notre équipe est dédiée à offrir un service clientèle de qualité supérieure et à assurer que tous les besoins de nos clients sont satisfaits.<br> Que vous ayez une question concernant nos produits ou services, que vous souhaitiez signaler un problème technique, ou que vous cherchiez simplement des informations générales sur notre entreprise, n'hésitez pas à nous contacter.<br>
                        Nous comprenons que votre temps est précieux, c'est pourquoi nous nous engageons à répondre à toutes vos demandes dans les plus brefs délais.<br> Si vous préférez nous contacter par e-mail, nous vous garantissons une réponse rapide et précise à toutes vos questions.<br>
                        Nous sommes là pour vous, que vous soyez un client existant ou que vous souhaitiez simplement en savoir plus sur notre entreprise.<br>
                        Enfin, si vous préférez nous contacter en ligne, notre formulaire de contact est facile à utiliser et rapide à remplir. <br>Il vous suffit de nous laisser vos coordonnées et un bref message, et nous vous répondrons dès que possible.<br>
                        En résumé, notre équipe est là pour vous aider à toutes les étapes de votre expérience avec nous, et nous sommes impatients de répondre à toutes vos questions et demandes. <br>Contactez-nous dès aujourd'hui pour toute assistance nécessaire.
                        </div><br>
                        
                        <form class="contact"  method="POST" onSubmit="return checkform_Contact()">
                        <h3 class="zone">Contactez l'équipe Tow-Fix </h3><br>
                        
                        <input type="text" id="nomContact" name="nomContact" placeholder="Saisir votre nom" />
                        <div class="error-message" id="name-contact-error-message"></div>
                        <input type="email" name="email" placeholder="Saisir votre adresse email" id="mailContact"/>
                        <div class="error-message" id="mail-contact-error-message"></div>
                        <textarea name="contact"  placeholder="Saisir votre message" rows="10" id="messageContact"></textarea>
                        <div class="error-message" id="message-contact-error-message"></div>
                        <input type="submit" value="Envoyer" name="submit_contact"class="submits"/>
                        </form>
                        
                <?php include("../html_/footer.html"); ?>
            </div>
        </body>
    
    </html>
