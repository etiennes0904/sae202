<?php
require 'lib.inc.php';
$email = $_POST['email'];
$mdp = $_POST['mdp'];

// Check if email is valid
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['erreur'] = '<h1 class="erreur">L\'adresse e-mail saisie est incorrecte.</h1>';
    header('location: connexion.php');
    exit();
}

$mabd = connexionBD();
$req = 'SELECT * FROM utilisateurs WHERE mail_utilisateur LIKE "' . $email . '"';
$resultat = $mabd->query($req);
$lignes_resultat = $resultat->rowCount();

if ($lignes_resultat > 0) {
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);
    if (password_verify($mdp, $ligne['mdp_utilisateur'])) {
        $_SESSION['utilisateur'] = $ligne['utilisateur'];
        $_SESSION['id_utilisateur'] = $ligne['id_utilisateur'];
        header('location: ../index.php');
    } else {
        $_SESSION['erreur'] = '<h1 class="erreur">Le mot de passe saisi est incorrect.</h1>';
        header('location: connexion.php');
    }
} else {
    $_SESSION['erreur'] = '<h1 class="erreur">L\'adresse e-mail saisie est incorrecte.</h1>';
    header('location: connexion.php');
}

deconnexionBD($mabd);
?>
