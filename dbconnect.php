<?php
    $conn = new mysqli('localhost', 'id12242794_papi', 'harshilpicopenis123', 'id12242794_papi');

    if ($conn->connect_error) {
        die("Could not connect: " . $conn->connect_error);
    }

    session_start();
?>