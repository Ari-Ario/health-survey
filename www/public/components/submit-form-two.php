<?php

if (session_start() === PHP_SESSION_NONE){
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    header("location: /submission-info.php");
} else {
    header("location: /index.php");
}