<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<a href="table1_gestion.php">retour au tableau de bord</a>
    <hr>
<h1>Gestion des Parkings</h1>
<p>modification d'information</p>

<?php
$num=$_GET['num'];
$mabd = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8;', 'sae202user', 'sae202EF4');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM parkings WHERE id_parking=".$num;
$resultat = $mabd->query($req);
$value = $resultat->fetch();
?>
<hr>
<form method="POST" action="table1_update_valide.php" enctype="multipart/form-data">
    <input type="hidden" name="num"  value="<?php echo $value['id_parking']; ?>">
    Id :<input type="text" name="Id" value="<?php echo $value['id_parking']?>"><br>
    Titre :<input type="text" name="titre" value="<?php echo $value['titre_parking']?>"><br>
    Map :<input type="text" name="map"  value="<?php echo $value['map_parking']?>"><br>

        <br>

    <br>
    <input type="submit" name="" value="Enregistrer">
</form>

</body>
</html>