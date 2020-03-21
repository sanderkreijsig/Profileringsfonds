<?php
//variable initialize
$studentnr = "";
$achternaam = "";
$roepnaam = "";
$gdatum = "";
$adres = "";
$postcode = "";
$woonplaats = "";
$telnr = "";
$emailadres = "";
$bsn = "";
$iban = "";



if(!isset($_SESSION['user'])){
    array_push($errors, "U moet eerst inloggen");
    header('location: login.php');
}


?>