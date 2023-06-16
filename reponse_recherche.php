<!DOCTYPE html>
<html>
<head>
    <title>MMitinéraire</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/png" href="images/green.svg"/>
    <link rel="stylesheet" type ="text/css" href="style.css">
</head>
<body>
<?php
// Appel du bloc Header et du Menu
require 'header.php';
?>

<main>
    <br>
    <br>
    <h1>Résultat de votre recherche :</h1>
    <br>

    <div id="contenu">
        <?php
        $resultatget = $_GET['depart'];
        $resultatget2 = $_GET['arrivee'];
        require_once 'admin/secretxyz123.php';
        $mabd = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8', LUTILISATEUR, LEMOTDEPASSE);
        $mabd->query('SET NAMES utf8;');

        $requete = "SELECT * FROM trajets WHERE lieu_de_depart_trajet LIKE :resultatget AND lieu_d_arrivee_trajet LIKE :resultatget2";
        $stmt = $mabd->prepare($requete);
        $stmt->bindValue(':resultatget', '%' . $resultatget . '%', PDO::PARAM_STR);
        $stmt->bindValue(':resultatget2', '%' . $resultatget2 . '%', PDO::PARAM_STR);
        $stmt->execute();

        while ($unjeu = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="sectiontrajet">';
            echo '<h3>Direction : ' . $unjeu['lieu_d_arrivee_trajet'] . '</h3>';
            echo '<p>Départ : ' . $unjeu['lieu_de_depart_trajet'] . '</p>';
            echo '<p>Date : ' . $unjeu['date_de_depart'] . '</p>';
            echo '<p>Heure : ' . $unjeu['heure_de_depart'] . '</p>';
            echo '<p>Nombre de places : ' . $unjeu['nbr_place_dispo_trajet'] . '</p>';
            echo '<p>Durée : ' . $unjeu['duree_trajet'] . '</p>';
            echo '<div><a href="confirmation_reservation.php?id_trajet=' . $unjeu['id_trajet'] . '">Réserver</a></div>'."\n";

            echo '</div>';
            echo '<br><br>';
        }
        ?>
    </div>
</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>
