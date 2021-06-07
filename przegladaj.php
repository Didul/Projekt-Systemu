<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gry komputerowe</title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" 
        crossorigin="anonymous">
        <style>
            .noview {
                visibility: hidden;
            }
        </style>
    </head>
    <body style="background: url('bg.jpg'); background-repeat: repeat-y; background-size: cover;">
        <?php 
            if(@$_COOKIE['login'] && @$_COOKIE['pass']) {
                include 'menu1.html';
            } else {
                include 'menu2.html';
            }
        ?>
        <div style="margin: 2em;">
            <div class="pure-g">
                <?php 
                    for ($i = 0; $i < 3; $i++) {
                        echo('<div  class="pure-u-1-3" style="cursor: pointer; margin: 5em auto; width: 30em; height: 30em; background: url(\''.$i.'.jpg\'); background-repeat: no-repeat;"><h1 style="color: white;">Gra '.($i+1).'</h1></div>');
                    }
                ?>
            </div>
        </div>

        <div id="platnosc" class="noview" style="position: absolute; top: 0; left: 0; margin: 0; padding: 0; min-width: 100vw; min-height: 100vh; background: rgba(100,100,100,0.8)">
                    <div class="pure-g" style="width: 50vw; margin:0 auto;">
                         <div class="pure-u-1-3">
                            <button><a href="#" style="max-width: 50%; min-height: 15em;"><img src="https://www.ing.pl/_fileserver/item/1128460.fedcba" style="cursor: pointer; max-width: 50%; min-height: 15em;"></a></button>
                         </div>
                        <div class="pure-u-1-3">
                            <button><a href="https://blik.com/" style="max-width: 50%; min-height: 15em;"><img src="https://www.aliorbank.pl/dam/jcr:5950c2d4-7908-47b8-bd57-0229b44b4901/blik.png" style="cursor: pointer; max-width: 50%; min-height: 15em;"></a></button>
                        </div>
                        <div class="pure-u-1-3">
                            <button><a href="https://www.pkobp.pl/" style="max-width: 50%; min-height: 15em;"><img src="przelew.png" style="cursor: pointer; max-width: 50%; min-height: 15em;"></a></button>
                        </div>
                        <button id="anuluj" class="pure-button" style="margin: 20em auto;">Anuluj</button>
                    </div>
                </div>
        <?php 
            if (@$_COOKIE['login'] && @$_COOKIE['pass']) {
                echo ('
                    <script type="text/javascript">
                        var platnosc = document.getElementById("platnosc");

                        var el = document.querySelectorAll(".pure-u-1-3");

                        for (var el of el) {
                            el.addEventListener("click", function() {
                                platnosc.classList.toggle("noview");
                            });
                        }

                        document.getElementById("anuluj").addEventListener("click", function() {
                            platnosc.classList.toggle("noview");
                        });
                    </script>
                ');
            }  else {
                echo ('
                    <script type="text/javascript">    
                        var el = document.querySelectorAll(".pure-u-1-3");   
                                     
                        for (var el of el) {
                            el.addEventListener("click", function() {
                                location.href="logowanie.php";
                            });
                        }
                    </script>
                ');
            }
        ?>
    </body>
</html>