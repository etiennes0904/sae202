<?php
// Vérification de sélection d'un fichier
// Récupération des attributs du fichier (nom, type, taille)
if (!empty($_FILES['photo'])) {
    $image_nom = $_FILES['photo']['name'];
    $image_type = $_FILES['photo']['type'];
    $image_taille = $_FILES['photo']['size'];
    $image_temporaire = $_FILES['photo']['tmp_name'];
    $image_error = $_FILES['photo']['error'];
} else {
    echo 'Vous devez sélectionner un fichier';
    exit(); // Terminer l'exécution du script si aucun fichier n'est sélectionné
}

// Début Vérification de la conformité
$affichage_erreurs = '';
$erreurs = 0;

// Test s'il n'y a pas d'erreur de sélection
if ($image_error == 0) {
    // Test du format du fichier en fonction de l'extension
    if ($image_type != 'image/jpeg') {
        $affichage_erreurs .= 'Le fichier n\'est pas au format jpeg ou extension invalide<br>';
        $erreurs++;
    }

    // Test du format du fichier avec la fonction exif_imagetype
    if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
        $affichage_erreurs .= 'Ce fichier n\'est pas une image jpeg<br>';
        $erreurs++;
    }

    // Test de la taille de l'image
    if ($image_taille > 500000) {
        $affichage_erreurs .= 'La taille de l\'image ne doit pas dépasser 500ko<br>';
        $erreurs++;
    }
} else {
    $affichage_erreurs = 'Impossible de télécharger le fichier, erreur de sélection<br>';
}

// Affichage des erreurs
if ($erreurs != 0) {
    echo $affichage_erreurs;
} else {
    echo 'Fichier conforme<br>';
}

if ($erreurs == 0) {
    // Si le fichier est conforme
    // On récupère le nombre de fichiers dans images/galerie
    $nbFichiers = -2; // Le dossier contient deux fichiers cachés . et ..
    $dossier = opendir("uploads/");
    while ($fichier = readdir($dossier)) {
        $nbFichiers++;
    }

    // On renomme le fichier - imageN.jpg
    $image_num = $nbFichiers + 1;
    $image_nom = 'image' . $image_num . '.jpg';

    // On fixe le nom complet de la destination (chemin relatif/imageN.jpg)
    $destination = $image_nom;

    // On déplace le fichier dans son emplacement définitif
    if (move_uploaded_file($image_temporaire, $destination)) {
        require 'lib.inc.php';
        $mabd = connexionBD();

        // Récupération des données du formulaire
        $utilisateur = $_POST['nom'];
        $adresse_utilisateur = $_POST['adresse'];
        $ville_utilisateur = $_POST['ville'];
        $code_postal_utilisateur = $_POST['code_postal'];
        $mail_utilisateur = $_POST['email'];
        $mdp_utilisateur = $_POST['mdp'];
        $mdp_utilisateur_hash = password_hash($mdp_utilisateur, PASSWORD_DEFAULT); // Hachage du mot de passe
        $num_utilisateur = $_POST['telephone'];

        // Requête d'insertion des données dans la table utilisateurs avec le chemin de l'image
        $req_insert = "INSERT INTO utilisateurs (utilisateur, adresse_utilisateur, ville_utilisateur, code_postale_utilisateur, mail_utilisateur, mdp_utilisateur, num_utilisateur, pdp_utilisateur, note_utilisateur, nbr_avis_utilisateur) VALUES ('$utilisateur', '$adresse_utilisateur', '$ville_utilisateur', '$code_postal_utilisateur', '$mail_utilisateur', '$mdp_utilisateur_hash', '$num_utilisateur', '$destination', 0, 0)";

        if ($mabd->query($req_insert)) {
            // Insertion réussie
            echo 'Inscription réussie !';
        } else {
            // Erreur lors de l'insertion
            echo 'Une erreur s\'est produite lors de l\'inscription. Veuillez réessayer.';
        }

        // Fermeture de la connexion à la base de données
        $mabd = null;
    } else {
        echo 'Erreur de téléchargement<br>';
    }
}

// Détermination du message à affichée après les tentatives d'envoi
$affichage_retour='Votre image a bien été téléchargée';

if ($erreurs != 0) {
    $affichage_retour='Echec de l\'envoi du message';
}
?>

</div>
<?php
if ($erreurs == 0) { // aucune erreur
    echo '<div id="reussite">' . "\n";
    echo '<p>' . $affichage_retour . '</p>' . "\n";
    echo '<form action="../index.php">' . "\n";
    echo '<button type="submit">Retour</button>' . "\n"; // on retourne sur la page d'accueil
    echo '</form>' . "\n";
    echo '</div>' . "\n";
} else { // Erreurs de saisie ou d'envoi du mail
    echo '<div id="echec">' . "\n";
    echo '<p>' . $affichage_retour . '</p>' . "\n";
    echo '<form action="connexion.php">' . "\n";
    echo '<button type="submit">Retour</button>' . "\n"; // on retourne sur la page d'accueil
    echo '</form>' . "\n";
    echo '</div>' . "\n";
}
?>
</div>
</main>
<?php
// Appel du Pied de Page
require('../footer.php');
?>
