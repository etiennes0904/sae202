
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>MMitinéraire</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="shortcut icon" type="image/png" href="images/green.svg"/>
</head>
<body>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    
    #formcontact {
      max-width: 500px;
      margin: 50px auto;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    
    #formcontact h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333333;
    }
    
    #formcontact label {
      display: block;
      margin-bottom: 5px;
      color: #333333;
      font-weight: bold;
    }
    
    #formcontact input[type="text"],
    #formcontact input[type="email"],
    #formcontact input[type="password"],
    #formcontact textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #dddddd;
      border-radius: 3px;
      font-size: 14px;
      margin-bottom: 10px;
    }
    
    #formcontact textarea {
      height: 120px;
    }
    
    #formcontact input[type="submit"] {
      padding: 10px 20px;
      background-color: #333333;
      border: none;
      color: #ffffff;
      border-radius: 3px;
      font-size: 16px;
      cursor: pointer;
    }
    
    #formcontact input[type="submit"]:hover {
      background-color: #555555;
    }
    
    #formcontact span {
      color: red;
    }
    
    #entete {
      display: flex;
      justify-content: space-between;
    }
    
    #entete div {
      width: 48%;
    }
    .nta{
        text-decoration: none;
        padding: 10px 20px;
        background-color: #333333;
        border: none;
        color: #ffffff;
        border-radius: 3px;
        font-size: 16px;
        cursor: pointer;
    }
  </style>
<?php require 'header.php'; ?>
<div id="contenu">
    <h1>Connexion</h1>
    <form id="formcontact"action="connexion_verif.php" method="POST">
        Adresse e-mail<br><br> <input type="text" name="email" /><br>
        <br>
        Mot de passe <br><br> <input type="password" name="mdp" /><br>
        <br>
        <br>
        <center><input type="submit" value="Se connecter"></center>
        <br>
        <p>Si vous n'avez pas de compte, veuillez vous <a class="nta" href="inscription.php">inscrire</a></p>
    </form>

    <?php
    if (!empty($_SESSION['erreur'])) {
        echo $_SESSION['erreur'];
        unset ($_SESSION['erreur']);
    }
    ?>


</div>
</body>
</html>
