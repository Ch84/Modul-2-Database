<?php

    // Logga in i databasen

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "root";
    $dbName = "videobutik";

    $connection = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if(!$connection) {

        echo "<h1> Error! <br> " . mysqli_connect_error() . " Det gick inte att ansluta till
        databasen </h2> ";
        exit;

    }

?>