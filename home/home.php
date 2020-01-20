<?php
    require_once('../server.php');
    require_once('../logincheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dispacicord</title>
    <link rel="stylesheet" href="home.css">
    <link rel="shortcut icon" href="../favicon.png" type="image/png">
</head>
<body id="login">
    <nav>
        <a href="../?logout=1">Logout</a>
        <a href="" style="float:left">URMG</a>
    </nav>
    <div class="main">
        <div id="result"></div>
        <div class="wrap">
            <input type="text" id="message" placeholder="Message" autocomplete="off">
        </div>
    </div>
    <script src="home.js"></script>
</body>
</html>