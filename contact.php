<!DOCTYPE html>
<html>
<head>
    <title>MMitinéraire</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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

        #formcontact .form-submit {
            display: flex;
            justify-content: center;
        }

        #formcontact button[type="submit"] {
            padding: 10px 20px;
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        #formcontact button[type="submit"] img {
            width: 32px;
            height: 32px;
        }

        #formcontact button[type="submit"]:hover img {
            opacity: 0.8;
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
    <form id="formcontact" action="traitements/envoie_mail.php" method="post">
        <h2>Contactez-nous</h2>
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
            <label for="message">Message<span>*</span></label>
            <textarea name="message" placeholder="Votre message" required></textarea>
        </div>
        <div class="form-submit">
            <button type="submit">
                <img src="images/message.png" alt="Envoyer">
            </button>
        </div>
    </form>
</main>
<?php
// Appel du Pied de Page
require ('footer.php');
?>

</body>
</html>
