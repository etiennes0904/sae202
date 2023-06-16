<!DOCTYPE html>
<html>
<head>
    <title>MMitinéraire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require ('../header.php');
?>

<main>
    <!-- Contenu principal -->

    <h1>Les parkings de rendez-vous</h1>
    <br>
    <br>
    <?php
    // Connexion à la base de données
    require_once '../admin/secretxyz123.php';
    require_once '../admin/lib.inc.php';

    $madb = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8', LUTILISATEUR, LEMOTDEPASSE);
    $madb->query('SET NAMES utf8;');

    // Préparation de la requête
    $requete = "SELECT * FROM parkings";
    $parkings = $madb->query($requete);

    // Affichage
    foreach ($parkings as $parking) {
        echo '<article class="parkings">';
        echo '<h2>'.$parking['titre_parking'].'</h2>';

        // Requête pour obtenir les statistiques sur les trajets réalisés
        echo '<article class="parkings">';
        // Requête pour obtenir les statistiques sur les trajets réalisés
        $requete_trajets = "SELECT COUNT(*) AS total_trajets FROM trajets WHERE lieu_de_depart_trajet = :titre_parking ";
        $stmt_trajets = $madb->prepare($requete_trajets);

// Exécution de la requête avec le titre du parking en cours comme paramètre lié
        $stmt_trajets->bindParam(':titre_parking', $parking['titre_parking']);
        $stmt_trajets->execute();


        // Récupération des résultats
        $resultat_trajets = $stmt_trajets->fetch(PDO::FETCH_ASSOC);

        // Affichage des statistiques
        echo '<p>Total trajets réalisés : '.$resultat_trajets['total_trajets'].'</p>';
        echo '</article>';
    }

    // Fermeture de la connexion à la base de données
    $madb = null;
    ?>





</main>
<?php
// Appel du Pied de Page
require ('../footer.php');
?>

</body>
</html><?php
