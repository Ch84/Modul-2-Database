<?php

    require_once('connect.php');

    // Hämta data från POST-Arrayen

    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    if(isset($_POST['name'])) {

        $name = $_POST['name'];

    }

    if(isset($_POST['telefon'])) {

        $telefon = $_POST['telefon'];

    }

    // Förbered en SQL-sats

    $sql = "INSERT INTO kontakt VALUES ('$name' , '$telefon')";

    // Exekvera (kör) SQL-satsen

    mysqli_query($connection , $sql) or die (mysqli_error($connection));

    echo "<h1>$name har nu lagts till i databasen</h1>";    

    // Gå till startsidan (index.php)

    header('Location: index.php');

?>