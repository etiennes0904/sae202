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
    <br>
<h1>Mes Réservations</h1>

<?php
require_once 'admin/lib.inc.php';

// Vérifiez si l'utilisateur est connecté
if (isset($_SESSION['id_utilisateur'])) {
    $id_utilisateur = $_SESSION['id_utilisateur'];

    // Connexion à la base de données
    $mabd = connexionBD();

    // Récupérer les réservations de l'utilisateur
    $requete = "SELECT trajets.*, reservations.date_reservation FROM trajets INNER JOIN reservations ON trajets.id_trajet = reservations.id_trajet WHERE reservations.id_utilisateur = :id_utilisateur";
    $stmt = $mabd->prepare($requete);
    $stmt->bindParam(':id_utilisateur', $id_utilisateur);
    $stmt->execute();
    $reservations = $stmt->fetchAll(PDO::FETCH_ASSOC);


    if (count($reservations) > 0) {
        echo '<table>';
        echo '<tr><th>Direction</th><th>Départ</th><th>Date</th><th>Heure</th><th>Nombre de places</th><th>Durée</th><th>Date de réservation</th></tr>';
        foreach ($reservations as $reservation) {
            echo '<tr>';
            echo '<td>' . $reservation['lieu_d_arrivee_trajet'] . '</td>';
            echo '<td>' . $reservation['lieu_de_depart_trajet'] . '</td>';
            echo '<td>' . $reservation['date_de_depart'] . '</td>';
            echo '<td>' . $reservation['heure_de_depart'] . '</td>';
            echo '<td>' . $reservation['nbr_place_dispo_trajet'] . '</td>';
            echo '<td>' . $reservation['duree_trajet'] . '</td>';
            echo '<td>' . $reservation['date_reservation'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '<p>Aucune réservation trouvée.</p>';
    }

    // Fermer la connexion à la base de données
    deconnexionBD($mabd);
} else {
    echo "<p>Erreur : Vous devez être connecté pour voir vos réservations.</p>";
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
