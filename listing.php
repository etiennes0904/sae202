<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <link href="data:image/x-icon;base64,AAABAAEAEBAQAAAAAAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAgAAAAAAAAAAAAAAAEAAAAAAAAAAAP0cAAAAAACPQ6AAAhqEAAoeZADvo/wAAeZkAAGFuAAC2zwAio8UAENHrAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERERERERERERERERERERFmZmZmZmYRFoiIiIiIiGFlqqqqqqqohmUUGBQRNBdGZRQYFBMUEEZlFBEUGBQRRmUUFxQYFBeGZRQXFBMUGYZlFBkUETQahmVaqqoqqqqGFlVVVVVVVWERZmZmZmZmERERERERERERERERERERERH//wAA//8AAMADAACAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAAQAAwAMAAP//AAD//wAA" rel="icon" type="image/x-icon" />
        <meta name="viewport" content="width=device-width">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://fonts.cdnfonts.com/css/amazon-ember" rel="stylesheet">
        <link rel="stylesheet" type ="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        // Appel du bloc Header et du Menu>
        require ('header.php');
        ?>
    <main>
        <?php
        $mabd = new PDO('mysql:host=localhost;dbname=sae203Base;charset=UTF8;', 'sae203User', 'Mouad123456@');
        $mabd->query('SET NAMES utf8;');
        $req = "SELECT * FROM series_et_films INNER JOIN realisateur ON series_et_films.realisateur_id = realisateur.realisateur_id ";
        $resultat = $mabd->query($req);
        echo '<div class="container">'; // add a container div
        foreach ($resultat as $value) {
            echo '<div class="box">'; // add a box div
            echo '<img id="list" src="images/uploads/'.$value['serie_ou_film_photo'].'">';
            echo '<h3>'.$value['serie_ou_film_titre'] . '</h3>';
            echo '<p>Summary: ' . $value['serie_ou_film_resume'] . ' </p>';
            echo '<p>Casting: ' . $value['serie_ou_film_casting_principal'] . ' </p>';
            echo '<p class="page">' . $value['serie_ou_film_recompenses'] . ' </p>';
            echo '<p>Compositeur: ' . $value['serie_ou_film_compositeur_musique'] . ' </p>';
            echo '<p>Durée: ' . $value['serie_ou_film_duree'] . ' </p>';
            echo '<p class="auteur">  ' . $value['realisateur_nom'] . ' ' . $value['realisateur_prenom'] . '</p>';
            echo '</div>'; // close the box div
        }
        echo '</div>'; // close the container div

        ?>

    </main>
        <?php
        // Appel du Pied de Page
        require ('footer.php');
        ?>
    </body>

</html>