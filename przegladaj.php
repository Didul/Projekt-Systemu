<?php
    session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gry komputerowe</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <script type="text/javascript" src="skrypty/script.js"></script>
    </head>
    <body class="bg" style="background-repeat: repeat-y;">
        <?php
            if(isset($_SESSION['login']) && isset($_SESSION['pass'])) { //sprawdzenie czy użytkownik jest zalogowany i wyświetlenie odpowiedniego menu
                include ('szablony/menu.html');
            } else {
                include ('szablony/menu2.html');
            }
        ?>
        <div style="margin: 2em;">
            <div class="pure-g">
                <div class="pure-u-1-3 click" style="cursor: pointer; margin: 5em auto; width: 30em; height: 30em; background: url('obrazy/0.jpg'); background-repeat: no-repeat;">
                    <h1 style="color: white;">Gra 1</h1>
                </div>
                <div class="pure-u-1-3 click" style="cursor: pointer; margin: 5em auto; width: 30em; height: 30em; background: url('obrazy/1.jpg'); background-repeat: no-repeat;">
                    <h1 style="color: white;">Gra 2</h1>
                </div>
                <div class="pure-u-1-3 click" style="cursor: pointer; margin: 5em auto; width: 30em; height: 30em; background: url('obrazy/2.jpg'); background-repeat: no-repeat;">
                    <h1 style="color: white;">Gra 3</h1>
                </div>
            </div>
        </div>
        <div id="platnosc" class="noview" style="position: absolute; top: 0; left: 0; margin: 0; padding: 0; min-width: 100vw; min-height: 100vh; background: rgba(100,100,100,0.8)">
            <div class="pure-g" style="width: 50vw; margin:0 auto;">
                    <div class="pure-u-1-3">
                    <button><a href="#" style="max-width: 50%; min-height: 15em;"><img src="obrazy/karta.png" style="cursor: pointer; max-width: 50%; min-height: 15em;"></a></button>
                    </div>
                <div class="pure-u-1-3">
                    <button><a href="https://blik.com/" style="max-width: 50%; min-height: 15em;"><img src="obrazy/blik.png" style="cursor: pointer; max-width: 50%; min-height: 15em;"></a></button>
                </div>
                <div class="pure-u-1-3">
                    <button><a href="https://www.pkobp.pl/" style="max-width: 50%; min-height: 15em;"><img src="obrazy/przelew.png" style="cursor: pointer; max-width: 50%; min-height: 15em;"></a></button>
                </div>
                <button id="anuluj" class="pure-button click" style="margin: 20em auto;">Anuluj</button>
            </div>
        </div>
        <?php 
            session_start();
            if (isset($_SESSION['login']) && isset($_SESSION['pass'])) { // sprawdzenie czy użytkownik jest zalogowany, jeśli nie to następuje przekierowanie do okna rejestracji
                echo ('<script type="text/javascript">view();</script>'); // wyświetlenie ekranu płatności
            } else {
                echo ('<script type="text/javascript">redirect();</script>'); // przekierowanie na stronę rejestracji
            }
        ?>
    </body>
</html>