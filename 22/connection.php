<?php

    $host = "localhost";
    $user = "admin";
    $pass = "admin12345";
    $db = "itbootcamp";

    $conn = new mysqli($host, $user, $pass, $db);
    if($conn->connect_error) {
        die("Nije uspela konekcija." . $conn->connect_error); // die prekida izvrsenje ostatka koda isto kao exit();
    }

?>