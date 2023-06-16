<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<title>ADMIN</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="../style.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
    <style>

.bouton {
  background-color: rgba(255, 255, 255, 0.5); /* couleur de fond */
  border: none; /* supprimer la bordure */
  color: white; /* couleur de texte */
  padding: 15px 32px; /* taille du rembourrage */
  text-align: center; /* centrage du texte */
  text-decoration: none; /* supprimer la décoration de texte */
  display: inline-block; /* afficher en tant que bloc en ligne */
  font-size: 16px; /* taille de police */
  margin: 4px 10px; /* marge autour du bouton */
  cursor: pointer; /* changer le curseur au survol */
  border-radius: 4px; /* arrondir les coins */
  transition-duration: 0.4s; /* ajouter une transition fluide */
}

.bouton:hover {
  background-color: rgba(212, 207, 207, 0.5); /* changer la couleur de fond au survol */
  color:white;
}
    </style> 
    <br>
    <br>
    <br>
<h1>Bienvenue sur la panneau de gestion Admin.</h1>
<br>
    <br>
<button class='bouton'><a href="table1_gestion.php">Gestion table Parkings</a></button>
<button class='bouton'><a href="statistiques.php">Statistiques</a></button>

<br>
<br>
<br>

</main>


<?php
// Appel du Pied de Page
require ('../footer.php');
?>

</body>
</html>