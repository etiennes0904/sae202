
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
    <h1>Confirmation</h1>
    <br>
<?php

require_once 'admin/lib.inc.php';

// Vérifiez si l'utilisateur est connecté
if (isset($_SESSION['id_utilisateur'])) {
    // Vérifiez si l'ID du trajet a été transmis
    if (isset($_GET['id_trajet'])) {
        $id_trajet = $_GET['id_trajet'];
        $id_utilisateur = $_SESSION['id_utilisateur'];

        // Connexion à la base de données
        $mabd = connexionBD();

        // Effectuer la réservation
        $reservation_effectuee = reserver_trajet($mabd, $id_trajet, $id_utilisateur);

        if ($reservation_effectuee) {
            echo "<p>Votre réservation pour le trajet ID $id_trajet a été enregistrée avec succès.</p>";
            echo '<div><a href="reservation.php">voir mes réservation</a></div>'."\n";


        } else {
            echo "<p>Une erreur s'est produite lors de l'enregistrement de votre réservation.</p>";
        }

        // Fermer la connexion à la base de données
        deconnexionBD($mabd);
    } else {
        echo "<p>Erreur : ID du trajet non spécifié.</p>";
    }
} else {
    echo "<p>Erreur : Vous devez être connecté pour effectuer une réservation.</p>";
}
?>

<a href="index.php">Retour à l'accueil</a>
</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>