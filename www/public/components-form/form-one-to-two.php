<?php

if (session_status() === PHP_SESSION_NONE){
    session_start();
} // Start or resume the PHP session

// Set session variables
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['q1'] =$_POST['q1'];
    $_SESSION['q2'] =$_POST['q2'];
    $_SESSION['q3'] =$_POST['q3'];
    $_SESSION['q4'] =$_POST['q4'];
    $_SESSION['q5'] =$_POST['q5'];
    header("location: /form-two.php");
} else {
    header("location: /index.php");
}

?>

