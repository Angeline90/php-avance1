<?php
$name = $_POST["user_name"];
$firstname = $_POST["user_firstname"];
$email = $_POST["user_email"];
$phone= $_POST["user_phone"];
$about = $_POST["user_about"];
$message = $_POST["user_message"];
?>

<?= "Merci $firstname $name  de nous avoir contacté à propos de $about.

Un de nos conseillers vous contactera soit à l’adresse $email ou par téléphone au $phone dans les plus brefs 
délais pour traiter votre demande : $message."

?>