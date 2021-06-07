<?php

    if (isset($_POST)) {

        $login = $_POST['login'];
        $pass = $_POST['pass'];

        setcookie('login', $login);
        setcookie('pass', $pass);

        if(isset($_COOKIE['login']) && isset($_COOKIE['pass'])) {
            header('Location: main.php');
        } else {
            header('Location: logowanie.php');
        }
    } else {
        header('Location: logowanie.php');
    }