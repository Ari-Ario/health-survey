<?php

if (session_status() === PHP_SESSION_NONE){
    session_start();
} // Start or resume the PHP session

// Set session variables
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    // $_SESSION['q5'] =$_POST['q5'];
    $_SESSION['q6'] =$_POST['q6'];
    $_SESSION['q7'] =$_POST['q7'];
    $_SESSION['q8'] =$_POST['q8'];
    $_SESSION['q9'] =$_POST['q9'];
    $_SESSION['q10'] =$_POST['q10'];

     header("location: /report.php");
} else {
    header("location: /index.php");
}

?>