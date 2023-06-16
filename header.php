<style>
    header {
        background-color: #fff9;        padding: 20px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
    }

    .menu li {
        margin-right: 20px;
    }

    .menu li:last-child {
        margin-right: 0;
    }

    .menu a {
        text-decoration: none;
        color: #333;
        background-color: #fff9;
        font-weight: bold;
        font-size: 16px;
        padding: 10px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .menu a:hover {
        background-color: #f2f2f2;
    }

    .menu img {
        margin-right: 5px;
        vertical-align: middle;
    }
</style>
<header>
    <nav id="navbar">
        <?php
        $logo = 'images/profil.png'; // Chemin de l'image PNG existante par défaut

        if (!empty($_SESSION['utilisateur'])) {
            require_once('admin/lib.inc.php');
            $mabd = connexionBD();
            $utilisateur = $_SESSION['utilisateur'];
            $req_image = "SELECT pdp_utilisateur FROM utilisateurs WHERE utilisateur = '$utilisateur'";
            $resultat_image = $mabd->query($req_image);

            if ($resultat_image && $resultat_image->rowCount() > 0) {
                $image_data = $resultat_image->fetch(PDO::FETCH_ASSOC);
                $image_nom = $image_data['pdp_utilisateur'];
                if (!empty($image_nom)) {
                    $logo = 'admin/' . $image_nom; // Concaténer avec le chemin relatif du dossier "admin/uploads"
                }
            }
        }
        ?>
        <a class="logo" href="index.php"><img src="images/logo_complet.svg" alt="monimage" width="200px"></a>
        <ul class="menu">
            <li>
                <a href="index.php"><img src="images/maison.png" width="30px"></a>
            </li>
            <li>
                <a href="parking.php" ><img src="images/parking.png" width="30px"></a>
            </li>
            <li>
                <a href="contact.php"><img src="images/fn.png" width="40px"></a>
            </li>
            <li>
                <?php
                require_once('admin/lib.inc.php');
                if (!empty($_SESSION['utilisateur'])) {
                    echo '<a href="admin/deconnexion.php"><img src="images/se-deconnecter.png" width="30px"></a>';
                } else {
                    echo '<a href="admin/connexion.php"><img src="images/profil.png" width="30px"></a>';
                }
                ?>
            </li>
            <li>
                <?php
                if (!empty($_SESSION['utilisateur'])) {
                    echo '<a href="admin/profil.php"><img src="'.$logo.'" width="30px"></a>';
                } else {
                    // Rien ne s'affichera ici
                }
                ?>
            </li>
        </ul>
    </nav>
</header>

