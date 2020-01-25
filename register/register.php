<?php
    require_once('../server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/png">
</head>
<body id="register">
<h1>Register</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Username" class="input">
        <input type="password" name="password" placeholder="Password" class="input">
        <input type="submit" value="Register" name="register" class="button">
    </form>
</body>
</html>