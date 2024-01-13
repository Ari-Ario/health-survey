<?php

if (session_status() === PHP_SESSION_NONE){
    session_start();
} // Start or resume the PHP session


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>First form</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
<section id="form1" class="form" >
  <section class="form-content" role="document">
      
    <section class="">
        <section class=""><span class="close" onclick="closeForm()">&times;</span></section>
    </section>

    <section class="form-section-one">
      <form action="/components/form-one-to-two.php" method="POST">
        <label for="input1">Field 1:</label>
        <input type="text" id="input1" name="input1">
        <input name="inp1" type="text" placeholder="first input">
        <input type="text" placeholder="second input">
        <input type="text" placeholder="third input">
        <input type="text" placeholder="fourth input">
        <input type="text" placeholder="fifth input">
        <input type="submit" value="Next" >
      </form>
    </section>

  </section>
</section>
</body>
</html>

