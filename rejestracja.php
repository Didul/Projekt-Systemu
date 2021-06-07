<?php
    if(@isset($_COOKIE['login']) && @isset($_COOKIE['pass'])) {
        header('Location: main.php');
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gry komputerowe</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
    </head>
    <body style="background: url('bg.jpg'); background-repeat: no-repeat; background-size: cover;">
    <?php include 'menu2.html';?>
        <div style="min-width: 100vw;">
            <div style="margin: 0 auto; width: 20vw;">
                <form action="controler.php" method="post" class="pure-form pure-form-stacked" style="margin: 0 auto;">
                    <legend style="color: white;">Rejestracja</legend>
                        <input type="text" name="login" placeholder="Podaj login">
                        <input type="password" name="pass" placeholder="Podaj hasło">
                    <input type="submit" value="Stwórz konto!" class="pure-button pure-button-primary"/>
                </form>
            </div>
        </div>
    </body>
</html>