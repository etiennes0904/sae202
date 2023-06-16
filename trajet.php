<!DOCTYPE html>
<html>
<head>
<title>MMitinéraire</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="style.css">
<link rel="shortcut icon" type="image/png" href="images/green.svg"/>
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>

<main>
<center> <h2>Recherchez votre trajet !</h2></center>
<style>
.search-bar {
  display: flex;
  align-items: center;
  max-width: 400px;
  margin: 0 auto;
  padding: 15px;
  border-radius: 30px;
  background-color: #dfdfdf;
}

.search-bar input[type="search"] {
  flex: 1;
  padding: 8px;
  border: none;
  background: transparent;
  font-size: 16px;
  color: #333;
  outline: none;
}

.search-bar button {
  padding: 8px 16px;
  background-color: #78B9D2;
  color: #fff;
  border: none;
  border-radius: 30px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.search-bar button:hover {
  background-color: #95cfe4;
}

.validity {
  color: red;
  font-size: 12px;
  margin-top: 5px;
}
.search-form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

.search-form label {
    font-weight: bold;
    margin-right: 10px;
}

.search-form input[type="text"],
.search-form input[type="date"] {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 10px;
}

.search-form button {
    padding: 8px 16px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.search-form button:hover {
    background-color: #45a049;
}

</style>

    <br>
    <br>
    <br>
    <form action="reponse_recherche.php" method="GET">
        <div class="search-form">
            <label for="depart">Départ:</label>
            <input type="text" id="depart" name="depart" placeholder="Ville de départ">

            <label for="arrivee">Arrivée:</label>
            <input type="text" id="arrivee" name="arrivee" placeholder="Ville d'arrivée">

            <label for="date">Date:</label>
            <input type="date" id="date" name="date">

            <button type="submit">Rechercher</button>
        </div>
    </form>

    <br>




   <br>
   <br>
   <br>
   <br>
   <br>
   <br>


</main>


<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>