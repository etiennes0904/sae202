<!DOCTYPE html>
<html>
<head>
    <title>Admin MMitinéraire</title>
</head>
<body>
    <style>
        table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-bottom: 20px;
}

th {
  background-color: #333;
  color: #fff;
  font-weight: bold;
  padding: 10px;
  text-align: left;
  border: 1px solid #ddd;
}

td {
  background-color: #f9f9f9;
  border: 1px solid #ddd;
  padding: 10px;
}

tr:nth-child(even) td {
  background-color: #f2f2f2;
}

tr:hover td {
  background-color: #e6e6e6;
}

.caption {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

@media (max-width: 600px) {
  th, td {
    font-size: 14px;
    padding: 5px;
  }
  .caption {
    font-size: 16px;
  }
}
.btn {
  background-color: #e5e5e5;
  border: none;
  color: #555;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 25px;
  width: 150px;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #ccc;
  color: #fff;
}
        </style>
<a href="../index.php">retour au site</a>
    <hr>
<h1>Gestion table Parkings</h1>
<hr>
<br>
<button class='btn'><a href="table1_new_form.php">Ajouter un parking</a></button>
<br>
<br>
<table>
    <thead>
        <tr><td>Titre</td><td>Map</td><td>modifier</td><td>supprimer</td></tr>
    </thead>
    <tbody>
<?php
$mabd = new PDO('mysql:host=localhost;dbname=sae202;charset=UTF8;', 'sae202user', 'sae202EF4');
$mabd->query('SET NAMES utf8;');
$req = "SELECT * FROM parkings";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<tr>' ;
    echo '<td>'.$value['titre_parking'] . '</td>';
    echo '<td>' . $value['map_parking'] . '</td>';
    echo '<td> <a href="table1_update_form.php?num='.$value['id_parking'].'" > modifier </a> </td>';
    echo '<td> <a href="table1_delete.php?num='.$value['id_parking'].'"> supprimer </a> </td>';

    echo '</tr>';
}
?>

</tbody>
</table>
</body>
</html>