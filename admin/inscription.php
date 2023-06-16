<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="shortcut icon" type="image/png" href="images/green.svg"/>
</head>
<body>
<?php require 'header.php'; ?>
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
        text-align: center; /* Ajout de la propriété text-align */
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
    #formcontact input[type="tel"],
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

    #formcontact button {
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
    form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    input[type="file"] {
        display: none;
    }

    .custom-button {
        display: inline-block;
        padding: 8px 16px;
        color: #fff;
        border-radius: 4px;
        cursor: pointer;
    }

    .file-input {
        display: none;
    }

    #preview {
        max-width: 200px;
        border-radius: 50%; /* Ajout de la bordure arrondie */
    }
    .formCenterBlock {
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>
<br>
<h1>Inscription</h1>
<!-- Formulaire de connexion -->


<!-- Formulaire d'inscription -->


<form id="formcontact" action="inscription_verif.php" method="POST" enctype="multipart/form-data">
    <!-- Champs pour les données de l'utilisateur -->
    <div class="formCenterBlock">
        <div class="formBlockTypePhotoProfil">
            <div class="formBlockLabel">
                <i class="fa-solid fa-camera"></i>
            </div>
            <div class="formBlockInputsBlock">
                <p>Photo de profil :</p>
                <label for="file-input" class="custom-button">
                    <i class="fa-solid fa-camera-retro"></i>
                    <img id="preview" src="../images/profil.png" alt="Aperçu de la photo de profil"
                         style="max-width: 100px;">
                    <input id="file-input" class="file-input" name="photo" type="file" accept="image/*"
                           onchange="previewImage(event)">
                </label>

            </div>
        </div>
    </div>
    <input type="text" name="nom" placeholder="Nom/Prénom" required>
    <input type="text" name="adresse" placeholder="Adresse" required>
    <input type="text" name="ville" placeholder="Ville" required>
    <input type="text" name="code_postal" placeholder="Code postal" required>
    <input type="email" name="email" placeholder="Adresse email" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <input type="tel" name="telephone" placeholder="Numéro de téléphone" required>

    <br>
    <br>
    <button type="submit">S'inscrire</button>
</form>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        var imageField = document.getElementById("preview");

        reader.onload = function () {
            if (reader.readyState === 2) {
                imageField.src = reader.result;
            }
        }

        reader.readAsDataURL(event.target.files[0]);
    }
</script>
</body>
</html>
