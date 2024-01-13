<?php

if (session_status() === PHP_SESSION_NONE){
    session_start();
} // Start or resume the PHP session

// Set session variables
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
     header("location: /form-two.php");
} else {
    header("location: /index.php");
}

?>

