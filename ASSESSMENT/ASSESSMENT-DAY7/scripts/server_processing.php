<?php
    $servername1 = "localhost";
    $servername2 ='localhost:3306';
    $username = "root";
    $password = "";
    $database = "datatable_example";
    $mysqli = new mysqli($servername2, $username, $password, $database);

    // Checking for connections
    if (!$mysqli){
        echo "Connection Unsuccessful!!!";
    }

    $query = "SELECT * FROM `authors`";
    $result = $mysqli -> query($query);
    $row = $result->fetch_all(MYSQLI_ASSOC);

    header("Content-type: aplication/json");
    echo json_encode($row);
?>