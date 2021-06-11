<?php
    session_start(); 
    session_destroy(); // zamknięcie sesji

    header('Location: ../index.php');