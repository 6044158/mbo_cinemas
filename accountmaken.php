<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Maken</title>
    <link rel="stylesheet" href="./css/stylesheet.css">
    
</head>
<body class="accountmaken">
    <section>
        <form method="post">
    
            <label for="Naam">Naam: </label>
            <input type="text" name="naam" id="naam">

            <label for="Email">Email: </label>
            <input type="email" name="email" id="Email">

            <label for="Password">wachtwoord: </label>
            <input type="password" name="password" id="Password">

            <input type="submit" name="submit" value="submit">

            <a href="#">Bent u uw wachtwoord vergeten?</a>
            
        </form>
    </section>
</body>

</html>



<?php
// verbinding maken met db 
if(isset($_POST["submit"])){
    if(!empty($_POST["naam"] && $_POST["email"] && $_POST["password"] )){
            // stap1
        $sever = "localhost";// $host
        $dbNaam = "mbo_cinemas";
        $gebruiker = "root";
        $wachtwoord = "";

        try{
            $conn = new mysqli($sever,$gebruiker,$wachtwoord,$dbNaam);
        }catch(Exception $e){
            $e->getMessage();
            echo   $e->getMessage();
        }
        // stap 2 query uitvoeren
        $klant_naam = $_POST["naam"];
        $klant_email = $_POST["email"];
        $klant_wachtwoord = $_POST["password"];

        $sql = "INSERT INTO klant (klant_naam,klant_email,klant_wachtwoord) 
                VALUES('$klant_naam','$klant_email','$klant_wachtwoord')";
        // stap 3 en 4 overslaan omdat het insert niet select
        try{
            $conn->query($sql);

            $conn->close();
            echo"gebruiker is toegevoegd";
        }catch(Exception $e){
            echo "niet goed query";
            echo $e->getMessage();
        }



    }else{
    echo"Vul alle velden.";
    }
}



?>