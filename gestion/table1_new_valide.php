<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>gestion de nos musiques</h1>
<h2>vous venez d'ajouter une musique</h2>
<hr>
<?php
$titre=$_POST['titre'];
$map=$_POST['map'];


$mabd = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8;', 'sae202user', 'sae202EF4');
$mabd->query('SET NAMES utf8;');



$req = "INSERT INTO parkings(titre_parking,map_parking) VALUES('".$titre."','".$map."')";
echo $req;
$resultat = $mabd->query($req);


?>
</tbody>
</table>
</body>
</html>