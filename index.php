<?php
    session_start();
?>

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
            if (isset($_SESSION['login']) && isset($_SESSION['pass'])) {//sprawdzenie czy użytkownik jest zalogowany i wyświetlenie odpowiedniego menu
                include ('szablony/menu.html');
            } else {
                include ('szablony/menu2.html');
            }
        ?>
        <div class="main">
            <h1 class="hello">Witamy w internetowym centrum gier!</h1>
            <p style="margin: 3em; color: white;">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus feugiat lorem sit amet sagittis ultricies. Integer quis eros at sapien dapibus facilisis in sit amet neque. Nam nec felis rhoncus, varius ex vitae, semper massa. Pellentesque sollicitudin ipsum lacinia urna ullamcorper tristique. Mauris aliquam, justo at feugiat dapibus, nibh lacus porta augue, finibus dignissim orci enim tristique sapien. Suspendisse ultricies augue et eros scelerisque, auctor bibendum dolor porttitor. Suspendisse tincidunt quam ac ex imperdiet iaculis ut bibendum tortor. Ut egestas enim ut felis sodales euismod. Fusce eget ultrices mi, eu rhoncus nunc. Ut venenatis dictum semper. Integer at ipsum vitae nulla pulvinar pellentesque non non diam.
            Sed a augue felis. Ut maximus vulputate odio, a mollis nulla imperdiet vel. Mauris nec sem at lacus imperdiet faucibus. Donec vitae purus ut lacus luctus blandit a vitae leo. Proin finibus dapibus libero sit amet pretium. Curabitur convallis ac diam ut condimentum. Sed nisi metus, ultrices laoreet maximus et, vestibulum in neque. Sed ante neque, consectetur ut dapibus at, ullamcorper vitae urna. Suspendisse consequat orci et nulla gravida ultrices at ac neque. Etiam nec imperdiet odio, quis tempus ipsum. Donec iaculis orci a pulvinar pulvinar. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
    </body>
</html>