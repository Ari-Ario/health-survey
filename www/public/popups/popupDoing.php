<?php

if (session_status() === PHP_SESSION_NONE){
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    header("Location: ./popupSecond.php");
} else {
    header("location: /index.php");
}