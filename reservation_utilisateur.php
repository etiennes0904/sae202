<?php
session_start();
require_once 'admin/lib.inc.php';

if (isset($_SESSION['id_utilisateur']) && isset($_GET['id_trajet'])) {
    $id_utilisateur = $_SESSION['id_utilisateur'];
    $id_trajet = $_GET['id_trajet'];

    $mabd = connexionBD();
    $resultat = reserver_trajet($mabd, $id_trajet, $id_utilisateur);

    if ($resultat) {
        // Réservation effectuée avec succès
        header('location: confirmation_reservation.php?id_trajet=' . $id_trajet);
        exit();
    } else {
        // Erreur lors de la réservation
        $_SESSION['erreur'] = 'Erreur lors de la réservation';
        header('location: confirmation_reservation.php');
        exit();
    }
} else {
    // Utilisateur non connecté ou 'id_trajet' non défini
    header('location: connexion.php');
    exit();
}
?>
