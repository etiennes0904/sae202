<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
<hr> <h1>Gestion des Parkings</h1> <hr>

<?php
// recupérer dans l'url l'id de l'album à supprimer
$id_parking=$_GET['num'];

$mabd = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8;', 'sae202user', 'sae202EF4');
$mabd->query('SET NAMES utf8;');

// tapez ici la requete de suppression de l'album dont l'id est passé dans l'url
$req = 'DELETE FROM parkings WHERE id_parking='.$id_parking; 

// cette ligne sert juste pour le debug. à supprimer quand tout marche correctement
echo $req;
 
$resultat = $mabd->query($req); 

echo '<h2>Vous venez de supprimer le parking numéro : '.$id_parking.' </h2>';
?>

</body>
</html>