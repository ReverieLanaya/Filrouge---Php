<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Lexend Deca' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <header >
        <div class="header"> <img src="../Pics/logo.png" alt="logo" width="200px" >
            <img src="/" alt="">
            
            <div class="link">

                <div class="menuh">
                    <button>À propos</button>
                    <button>Menu</button>
                    <button>Candy</button>
                    <button>Nous contacter</button>
                </div>
    
                <button class="reservation open-button" onclick="openForm()"> Réservation
                </button>


            </div>
            
            
            

                <div id="myForm" class="overlay">
                    <div class="form-popup" >

                        <form class="form-container">
    
                            <img src="../Pics/table.PNG" alt="table"  width="100%" height="120px">
                            <div class="chair">
                                <img src="../Pics/chair.png" width="15%" alt="table">
                                <h1>Réserver une table</h1>
                            </div>
                          
                      
                          <label for="Nom Prénom"></label>
                          <input type="text" placeholder="Nom Prénom" name="mom_resa" required>
                      
                          <label for="Adresse mail"></label>
                          <input type="text" placeholder="Adresse mail" name="mail_resa" required>
        
                          <label for="Numéro de téléphone"></label>
                          <input type="text" placeholder="Numéro de téléphone" name="tel_resa" required>  

    
                            <div class="cadre">
                                <label for="Date">Date:</label>
                                <input type="date" id="Date" name="date_resa" style="width: 150px; height: 30px;">
                           
                                <label for="heure">Heure:</label>
                                <select id="heure" name="heure_resa">
                                  <option value="11h30">11h30</option>
                                  <option value="12h">12h</option>
                                  <option value="12h30">12h30</option>
                                  <option value="13h">13h</option>
                                  <option value="13h30">13h30</option>
                                  <option value="14h">14h</option>
                                  <option value="19h">19h</option>
                                  <option value="19h30">19h30</option>
                                  <option value="20h">20h</option>
                                  <option value="20h30">20h30</option>
                                  <option value="21h">21h</option>
                                  <option value="21h30">21h30</option>

                                </select>
                            </div>

                            
                            <div class="cadre">
                                <label for="nbpers">Nombre de personnes:</label>
                                <select id="heure" name="nb_resa">
                                  <option value="1">1 personne</option>
                                  <option value="2">2 personnes</option>
                                  <option value="3">3 personnes</option>
                                  <option value="4">4 personnes</option>
                                  <option value="5">5 personnes</option>
                                  <option value="6">6 personnes</option>
                                  <option value="7">7 personnes</option>
                                  <option value="8">8 personnes</option>
                                </select>
                            </div>
                            <p class="pcontact">Si vous êtes plus de 8 personnes, veuillez contacter directement le restaurant : 05 01 50 45 78
                            </p>




                          
        
                          <input type="submit" class="btn" name="submit_resa">Confirmer la reservation</input>

                          <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
                        </form>
                      </div>

                </div>
               


            
        </div>


    </header>

    <div class=" intro">
        <img src="../Pics/crop_table.jpg" alt="table_chinese" width="100%">
        <div class="annonce">
            <h1>Cuisine asiatique <br> authentique</h1>
            <p>Venez manger des spécialités traditionnelles</p>
    
        </div>
    </div>
  
    <div class="propos">
        <h1> À propos</h1>
        <div>
            <img src="../Pics/chef.jpg" alt="" width="40%" height="40%">
            <p>
                Découvrez l'Asie en chaque bouchée au restaurant Reverie. Plongez dans une symphonie de saveurs venant de la Chine, du Japon, de la Thaïlande et plus encore. <br> <br>
                Notre menu diversifié propose des plats wok exquis et des spécialités authentiques. <br>  <br>
                Une expérience culinaire inoubliable dans un cadre accueillant vous attend chez Reverie.
            </p>

        </div>

    </div>

    <div class="special">
        <h2>Nos spécialités</h2>

        <div class="special1" >
            <div class="special2">
                <img src="../Pics/donkatsu.PNG" alt="good stuff" width="20%" height="20%">
                 <div class="prix">
                    <h1>Donkatsu cheese 13€</h1>

                    <p>Porc panné fourré avec du fromage
                    Accompagné avec du riz et du choux</p>

                 </div>
            </div>

            <div class="special2">
                <img src="../Pics/yakirori.jpg" alt="Brochettes" width="20%" height="20%">
                 <div class="prix">
                    <h1>Yakitoti cheese 7€</h1>
                    
                    <p>5 Brochettes de bœuf et fromage</p>

                 </div>
            </div>
            <button>Voir notre carte</button>



        </div>


    </div>

    <div class="moment">
        <h2>En ce moment</h2>

        <div class="moment1">
            <div>
                <img src="../Pics/yakisoba.jpg" alt="yakisoba" width="250vw" height="400vw">
                <p>Yakisoba <br>10€</p>
            </div>
            <div>
                <img src="../Pics/onigiri.PNG" alt="onigiri" width="250vw" height="400vw">
                <p>Onigiri Saumon <br>4€</p>
            </div>
            <div>
                <img src="../Pics/okonomiyaki.jpg" alt="okonomiyaki" width="250vw" height="400vw">
                <p>Okonomiyaki <br>8€</p>
            </div>

            <div>
                <img src="../Pics/matcha_cake.jpg" alt="matcha_cake" width="250vw" height="400vw">
                <p>Matcha Cake <br>4€</p>
            </div>
            <div>
                <img src="../Pics/bao.jpg" alt="bao" width="250vw" height="400vw">
                <p>Bao bun<br>3€</p>
            </div>
            
        </div>


    </div>

    <img src="../Pics/2bols.jpg" alt="2 bols" width="100%">

    <div class="find">
        <p>Venez nous voir au <br> 5 rue du Bonheur <br>31700 Toulouse</p>
        <img src="../Pics/map.PNG" alt="map" width="40%" height="40%">
    </div>

    <footer>
        
        <div class="footer">
            <div class="media">
                <div >
                    <img src="../Pics/instagram.png" alt="instagram" width="15%">
                    <img src="../Pics/facebook.png" alt="facebook" width="15%">
                </div>
                <div>
                    <button>À Propos</button> <br>
                    <button>Conditions Générales de Vente</button> <br>
                    <button>Notre politique de confidentialité</button> <br>
                     <button>Se connecter<button>
                    
                </div> 
            </div>
               
            <img  class="Flogo" src="../Pics/logo.png" alt="logo" width="20% " height="20%">

            <div>
                <p>
                    Restaurant Reverie <br>
                    15 rue du Bonheur  <br>
                    31700 Toulouse <br> <br>
                    05 01 50 45 78
                </p>
            </div>
        </div>
    </footer>

<!-- -------------P H P ------------- -->
<?php
$message = "basic message";

// ETAPE 1 : je vérifie que le formulaire a été envoyé au serveur

if(isset($_POST['submit_resa'])){

    // ETAPE 2 : Sécurité - Vérifier si les champs nécessaires sont bien remplis
    
    if(isset($_POST["nom_resa"]) && !empty($_POST["mail_resa"])
    && isset($_POST["tel_resa"]) && !empty($_POST["date_resa"]) 
    && !empty($_POST["heure_resa"]) && !empty($_POST["nb_resa"])){

        // ETAPE 3 : Sécurité - nettoyage des données

        $nom_resa = htmlentities(strip_tags(trim($_POST["nom_resa"])));
        $mail_resa = htmlentities(strip_tags(trim($_POST["mail_resa"])));
        $tel_resa = htmlentities(strip_tags(trim($_POST["tel_resa"])));
        $date_resa = htmlentities(strip_tags(trim($_POST["date_resa"])));
        $heure_resa = htmlentities(strip_tags(trim($_POST["heure_resa"])));
        $nb_resa = htmlentities(strip_tags(trim($_POST["nb_resa"])));

        // ETAPE 6 : Communication à la BDD - Connexion
        try{
            $bdd = new PDO("mysql:host=localhost;dbname=fil_rouge","root","",
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            // ETAPE 7 : Préparation de la requête
            $req = $bdd->prepare('INSERT INTO reservation (nom, email, numero, `date`, heure, nbpersonne) VALUES ("?","?","?","?","?","?")');

            // ETAPE 8 : Binding de Paramètre
            $req->bindParam(1,$nom_resa,PDO::PARAM_STR);
            $req->bindParam(2,$mail_resa, PDO::PARAM_STR);
            $req->bindParam(3,$tel_resa, PDO::PARAM_STR);
            $req->bindParam(4,$date_resa, PDO::PARAM_STR);
            $req->bindParam(5,$heure_resa, PDO::PARAM_STR); 
            $req->bindParam(6,$nb_resa, PDO::PARAM_INT);

            // ETAPE 9 : Execution de la requête
            $req->execute();

            // ETAPE 10 : Message confirmation
            $message = "Félicitations, votre réservation pour le : {$date_resa} à : {$heure_resa} a bien été prise en compte";
            echo "Envoi vers la BDD réussi";
        } catch(Exception $error){
            $message = $error->getMessage();
            echo "Échec de l'envoi vers la BDD";
        }
    } else {
        $message = "Remplissez correctement le formulaire";
    }
}

echo $message;
?>







    <script src="../Codes/script.js"></script>
</body>
</html>

