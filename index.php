<?php
    require_once('server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="favicon.png" type="image/png">
</head>
<body>
    <div class="outer">
        <video id="vid" style="position:fixed; top:-1rem; width:100%" autoplay loop muted>
            <source src="memes.mp4" type="video/mp4" />
            <audio id="music" loop preload="auto">
                <source src="music.mp3" type="audio/mp3">
            </audio>
        </video>
        <div class="middle">
            <div class="inner">
                <div class="card">
                    <h1>Dispacicord</h1>
                </div>
                <div class="main">
                    <h2>Login</h2>
                    <br><br>
                    <form method="post" id="form">
                        <input type="text" name="username" placeholder="Username" class="input">
                        <br><br>
                        <input type="password" name="password" placeholder="Password" class="input">
                        <br><br>
                        <input type="submit" value="Login" name="login" class="button">
                    </form>
                    <br><br>
                    <a href="register" class="link">Don't have an account?</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var timezone = (Intl.DateTimeFormat().resolvedOptions().timeZone);

        console.log(timezone);
        
        var form = document.getElementById("form");
        
        form.addEventListener("submit", function() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'settimezone.php?timezone=' + timezone, true);
        
            xhr.send();
        });
    </script>
    <script>
        var music = document.getElementById("music");
        document.addEventListener("mouseover", function() {
            music.play();
        });
    </script>
</body>
</html>