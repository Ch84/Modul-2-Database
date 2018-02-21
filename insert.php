<?php

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPwd = "root";
    $dbName = "telefonlista";
    $connection = mysqli_connect($dbHost, $dbUser, $dbPwd, $dbName);

        if(!$connection) {

            echo "Error: Unable to connect to MySQL<br>";
            echo "<br>Debugging error: " . mysqli_connect_error();
            exit;

        }
        // Tips: Lägg till denna rad för att lösa problem med svenska tecken.

        mysqli_set_charset($connection, "utf8");

        

// HÄMTA DATA VIA $_POST OCH SKICKA VIDARE TILL DATABASEN MED SQL

$namn = $_POST['name'];
$telefon = $_POST['telefon'];
$sql = "INSERT INTO kontakt VALUES ('$namn', '$telefon')";
mysqli_query($connection, $sql) or die(mysqli_error($connection));

// Gå till filen index.php

header('Location: index.php');

// HÄMTA DATA FRÅN DATABASEN

$query = "SELECT * FROM kontakt";
$table = mysqli_query($connection, $query)
         or die(mysqli_error($connection));
         
    echo "<table border='1'><tr>";
    echo "<th>Namn</th><th>Telefon</th></tr>";

    while($row = $table -> fetch_assoc()) {

        echo "<tr><td>" . $row['namn'] . "</td>";
        echo "<td>" . $row['telefon'] . "</td></tr>";

    }

    echo "</table>";

?>


