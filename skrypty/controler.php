<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        session_start();

        if ($_POST['login'] == 'admin' && $_POST['pass'] == 'admin') { //sprawdzenie danych przesłanych formularzem
            $_SESSION["login"]  = $_POST['login'];
            $_SESSION["pass"]  = $_POST['pass'];

            header('Location: ../index.php');
        } else {
            header('Location: ../logowanie.php');
        }
    } else {
        header('Location: ../logowanie.php');
    }