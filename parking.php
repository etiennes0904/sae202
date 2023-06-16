<!DOCTYPE html>
<html>
<head>
    <title>MMitinéraire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/png" href="images/green.svg"/>
    <style>
        .parking-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .parking-item {
            width: calc(40% - 20px);
            background-color: #f5f5f5;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .parking-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .parking-description {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .parking-address {
            font-size: 14px;
            color: #888;
        }

        .parking-image {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
    <!-- Contenu principal -->

    <h1>Les parkings de rendez-vous</h1>
    <br>
    <br>
    <div class="parking-container">
        <?php
        // Connexion à la base de données
        require_once 'admin/secretxyz123.php';
        require_once 'admin/lib.inc.php';

        $madb = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8', LUTILISATEUR, LEMOTDEPASSE);
        $madb->query('SET NAMES utf8;');

        // Préparation de la requête
        $requete = "SELECT * FROM parkings";
        $parkings = $madb->query($requete);

        // Affichage
        foreach ($parkings as $parking) {
            echo '<article class="parking-item">';
            echo '<h2 class="parking-title">' . $parking['titre_parking'] . '</h2>';
            echo $parking['map_parking'];

            echo '</article>';
        }

        // Fermeture de la connexion à la base de données
        $madb = null;
        ?>
    </div>
</main>
<?php
// Appel du Pied de Page
require ('footer.php');
?>
</body>
</html>
