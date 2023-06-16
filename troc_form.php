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
    <!-- Contenu principal -->
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
  </style>
</head>
<body>
  <form id="formcontact" action="traitements/envoie_mail2.php" method="post">
    <h2>Proposer un service contre ce trajet</h2>
    <div id='entete'>
      <div>
        <label for="prenom">Prénom<span>*</span></label>
        <input type="text" name="prenom" id="prenom" required>
      </div>
      <div>
        <label for="nom">Nom<span>*</span></label>
        <input type="text" name="nom" id="nom" required>
      </div>
    </div>
    <div>
      <label for="email">E-mail<span>*</span></label>
      <input type="email" name="email" id="emailform" placeholder="nom@domaine.fr" required>
    </div>
    <div id="messageform">
      <label for="message">Service<span>*</span></label>
      <textarea name="message" placeholder="Votre message" required></textarea>
    </div>
    <input type="submit" value="Envoyer">
  </form>
</main>


<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>