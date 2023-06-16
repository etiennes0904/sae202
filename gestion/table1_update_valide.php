<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des informations</h1>
<h2>Vous venez de modifier les informations</h2>
<hr>
<?php
$num=$_POST['num'];
$titre=$_POST['titre'];
$id=$_POST['Id'];
$map=$_POST['map'];




$mabd = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8;', 'sae202user', 'sae202EF4');
$mabd->query('SET NAMES utf8;');



$req = 'UPDATE parkings SET id_parking="'.$id.'",titre_parking="'.$titre.'", map_parking="'.$map.'" WHERE id_parking='.$num ;

        

echo 'juste pour le debug: '. $req;
$resultat = $mabd->query($req);

?>

</body>
</html>