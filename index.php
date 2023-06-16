    <!-- Par Etienne SAUTIVET & MOUAD EL KHALIFI ONLY -->
<!DOCTYPE html>
<html>
<head>
  <title>MMitinéraire</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" type="image/png" href="images/green.svg"/>
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

  <main>
    <!-- Contenu principal -->
    <center>
  <h1>Vous cherchez un co-voiturage ?</h1>
  <h1> Nous avons ce qu'il vous faut !</h1>
  <br>
  <br>
<br>
  <div id="gridimage">
  <img class="imagegrid" src="images/imagegal1.jpg" alt="monimage">
  <img class="imagegrid" src="images/imagegal2.jpg" alt="monimage">
  <img class="imagegrid" src="images/imagegal4.jpg" alt="monimage">
  <img class="imagegrid" src="images/imagegal5.jpg" alt="monimage">
</div>

<br>
<br>
<br>
<br>
        <center> <h2>Recherchez votre trajet !</h2></center>
        <style>
            .search-bar {
                display: flex;
                align-items: center;
                max-width: 400px;
                margin: 0 auto;
                padding: 15px;
                border-radius: 30px;
                background-color: #dfdfdf;
            }

            .search-bar input[type="search"] {
                flex: 1;
                padding: 8px;
                border: none;
                background: transparent;
                font-size: 16px;
                color: #333;
                outline: none;
            }

            .search-bar button {
                padding: 8px 16px;
                background-color: #78B9D2;
                color: #fff;
                border: none;
                border-radius: 30px;
                font-size: 16px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .search-bar button:hover {
                background-color: #95cfe4;
            }

            .validity {
                color: red;
                font-size: 12px;
                margin-top: 5px;
            }
            .search-form {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 20px;
            }

            .search-form label {
                font-weight: bold;
                margin-right: 10px;
            }

            .search-form input[type="text"],
            .search-form input[type="date"] {
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                margin-right: 10px;
            }

            .search-form button {
                padding: 8px 16px;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            .search-form button:hover {
                background-color: #45a049;
            }

        </style>

        <br>
        <br>
        <br>
        <form action="reponse_recherche.php" method="GET">
            <div class="search-form">
                <label for="depart">Départ:</label>
                <input type="text" id="depart" name="depart" placeholder="Ville de départ">

                <label for="arrivee">Arrivée:</label>
                <input type="text" id="arrivee" name="arrivee" placeholder="Ville d'arrivée">

                <label for="date">Date:</label>
                <input type="date" id="date" name="date">

                <button type="submit">Rechercher</button>
            </div>
        </form>


<br>
<br>
<br>
<br>

</center>
  </main>
  <hr>
  <br>
  <center><h2>Pourquoi choisir le co-voiturage ?</h2></center>
<br>
<br>
<div class="ecology-info">
  <p>Le covoiturage est une pratique qui contribue à la protection de l'environnement de plusieurs manières. Voici quelques informations sur l'écologie des covoiturages :</p>

  <ul>
    <li>Réduction des émissions de CO2 : Le covoiturage permet de réduire le nombre de voitures sur la route en encourageant le partage de trajets. Cela entraîne une diminution des émissions de dioxyde de carbone (CO2), principal gaz à effet de serre responsable du changement climatique.</li>
    <li>Utilisation plus efficace des ressources : Le covoiturage permet d'optimiser l'utilisation des véhicules en les remplissant davantage. Au lieu d'avoir plusieurs voitures avec un seul occupant, le covoiturage permet de partager un véhicule entre plusieurs passagers, ce qui réduit la consommation de carburant et les émissions de polluants.</li>
    <li>Réduction de la congestion routière : En encourageant le partage de trajets, le covoiturage contribue à réduire le nombre de véhicules sur les routes. Cela peut aider à atténuer les problèmes de congestion routière, ce qui se traduit par une diminution du temps passé dans les embouteillages et une meilleure fluidité du trafic.</li>
    <li>Moins de besoins en stationnement : Le covoiturage réduit la demande de places de stationnement, car plusieurs passagers partagent un même véhicule. Cela peut aider à réduire la pression sur les espaces de stationnement, notamment dans les zones urbaines où le stationnement est limité.</li>
    <li>Encouragement des véhicules partagés et des transports en commun : Le covoiturage peut être associé à d'autres modes de transport, tels que les transports en commun. Il peut encourager les personnes à utiliser les transports publics pour les trajets plus longs, puis à partager un véhicule avec d'autres passagers pour les déplacements plus spécifiques ou les derniers kilomètres.</li>
    <li>Sensibilisation à l'impact environnemental : Le covoiturage favorise une prise de conscience de l'impact environnemental des déplacements individuels. En encourageant les gens à partager des trajets, il contribue à sensibiliser à la nécessité de réduire les émissions de CO2 et à adopter des modes de transport plus durables.</li>
  </ul>
</div>
<br>
<br>


<br>
  <?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>
