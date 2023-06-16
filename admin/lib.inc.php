<?php
if (!isset($_SESSION)) {
    session_start();
}

require 'secretxyz123.php';

function connexionBD()
{
    $mabd = null;

    try {
        $mabd = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8', LUTILISATEUR, LEMOTDEPASSE);
        $mabd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }

    return $mabd;
}

function deconnexionBD(&$mabd)
{
    $mabd = null;
}

function reserver_trajet($mabd, $id_trajet, $id_utilisateur)
{
    $dateReservation = date('Y-m-d'); // Récupère la date actuelle
    $requete = "INSERT INTO reservations (id_trajet, id_utilisateur, date_reservation) VALUES (:id_trajet, :id_utilisateur, :date_reservation)";
    $stmt = $mabd->prepare($requete);
    $stmt->bindParam(':id_trajet', $id_trajet);
    $stmt->bindParam(':id_utilisateur', $id_utilisateur);
    $stmt->bindParam(':date_reservation', $dateReservation);
    return $stmt->execute();
}
?>
