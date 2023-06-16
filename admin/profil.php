<!DOCTYPE html>
<html>
<head>
    <title>Mon Profil</title>
    <link rel="shortcut icon" type="image/png" href="images/green.svg"/>
    <link rel="stylesheet" type="text/css" href="../style.css">
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
        .formCenterBlock {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #entete {
            display: flex;
            justify-content: space-between;
        }
        .file-input {
            display: none;
        }
        #entete div {
            width: 48%;
        }
        #preview {
            max-width: 100px;
            border-radius: 50%;
        }
        .rounded-image {
            border-radius: 50%;
        }
    </style>
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require ('header.php');
?>
<br>
<br>
<h1>Bonjour <?php echo $_SESSION['utilisateur'] ?? ''; ?> !</h1>
<br>
<br>
<?php if (isset($errorMessage)): ?>
    <p><?php echo $errorMessage; ?></p>
<?php endif; ?>
<form id="formcontact" method="POST" enctype="multipart/form-data">
    <div class="formCenterBlock">
        <div class="formBlockTypePhotoProfil">
            <div class="formBlockLabel">
                <i class="fa-solid fa-camera"></i>
            </div>
            <div class="formBlockInputsBlock">
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
    <label for="nom">Nom complet:</label>
    <br>
    <input type="text" name="nom" value="<?php echo $userData['utilisateur'] ?? ''; ?>"><br>
    <br>
    <label for="email">Email:</label>
    <br>
    <input type="email" name="email" value="<?php echo $userData['mail_utilisateur'] ?? ''; ?>"><br>
    <br>
    <label for="newPassword">Nouveau mot de passe:</label>
    <br>
    <input type="password" name="newPassword" value=""><br>
    <br>
    <center>
        <input type="submit" value="Mettre à jour">
    </center>
</form>
<br>
<br>
<br>
<br>
<?php
// Appel du bloc Header et du Menu>
require ('../footer.php');
?>
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
        imageField.classList.add("rounded-image");
    }

</script>
</body>
</html>
