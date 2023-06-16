<!DOCTYPE html>
<html>
<head>
  <title>MMitinéraire</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<?php
// Appel du bloc Header et du Menu>
require ('../header.php');
?>
<main>
  <center><h1>Merci de nous avoir contacté !</h1></center>
    <br>
    <br>
    <br>

 <h2>Statut : </h2>
<?php

if (count($_POST)==0) {
    header('location: ../contact.php');
}

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$message=$_POST['message'];
$email=$_POST['email'];


$prenom=ucfirst(mb_strtolower($prenom));
$nom=ucfirst(mb_strtolower($nom));



$subject='SAE202 : demande de '.$prenom.' '.$nom;
$headers['From']=$email;
$headers['Reply-to']=$email;
$headers['X-Mailer']='PHP/'.phpversion();
$email_dest="mmi22f11@mmi-troyes.fr";

if (mail($email_dest,$subject,$message,$headers)) {
echo "Mail de Contact OK / ";
}
else {
echo "Erreur d'envoi du mail de contact / ";
}


$subject='Confirmation de votre demande';
$headers['From']='mmi22f11@mmi-troyes.fr';
$headers['Reply-to']='no-reply@mmi-troyes.fr';
$headers['X-Mailer']='PHP/'.phpversion();
$headers['MIME-Version'] = '1.0';
$headers['content-type'] = 'text/html; charset=utf-8';
$messageretour="<html><body style='background-color:#F3F3F3;'>";
$messageretour .='<div style="width: 100%; text-align: center; font-weight: bold">Votre message a bien été transmis.</div>';
$messageretour .= '<h1>Site de SAE202</h1>';
$messageretour .= '<p>Merci de votre confiance et à une prochaine fois.</p>';
$messageretour .= '</body></html>';

if (mail($email,$subject,$messageretour,$headers)) {
echo ' Mail de Retour OK ';
}
else {
echo " Erreur d'envoi du mail de retour";
}

?>
</main>
<br>
<br>
<br>
<br>
<br>
<?php
// Appel du Pied de Page
require ('../footer.php');
?>

</body>
</html>