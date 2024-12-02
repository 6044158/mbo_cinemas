<?php
// stap 1 connctie maken met db

$sever = "localhost";// $host
$dbNaam = "mbo_cinemas";
$gebruiker = "root";
$wachtwoord = "";


//try to : verbinding te maken met db // catch: anders catch error
try{
    $conn = new mysqli($sever,$gebruiker,$wachtwoord,$dbNaam);
}catch(Exception $e){
   $e->getMessage();
//    $foutmelding=  $e->getMessage();     echo  $foutmelding;
   echo"foutmelding: ". $e->getMessage();
}


