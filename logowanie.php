<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gry komputerowe</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body class="bg" style="background-repeat: no-repeat;">
        <?php
            include ('szablony/menu2.html');
        ?>
        <div style="min-width: 100vw;">
            <div style="margin: 0 auto; width: 20vw;">
                <form method="post" action="skrypty/controler.php" class="pure-form pure-form-stacked" style="margin: 0 auto;">
                    <legend style="color: white;">Logowanie</legend>
                        <input type="text" name="login" placeholder="Podaj login">
                        <input type="password" name="pass" placeholder="Podaj hasło">
                    <input type="submit" value="Zaloguj!" class="pure-button pure-button-primary"/>
                    <a href="rejestracja.php" class="pure-button pure-button-primary">Stwórz konto</a>
                </form>
            </div>
        </div>
    </body>
</html>