<?php
    require_once('dbconnect.php');

    $user_id = $_SESSION['user']['id'];
    $message = $conn->real_escape_string($_POST['message']);
    $date = gmdate('Y-m-d H:i:s');

    $sql2 = "INSERT INTO messages (user_id, message, date) VALUES ('$user_id', '$message', '$date')";

    $conn->query($sql2);

    require_once('retrieve.php');
?>