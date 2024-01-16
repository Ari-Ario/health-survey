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
    <title>Submission data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<section id="form2" class="container">
  <section class="form-content" role="document">
      
    <?php include_once "./components-form/close.php"; 
        print_r($_SESSION);
        echo $_SESSION['q1'];
        echo $_SESSION['q2'];
        echo $_SESSION['q3'];
        echo $_SESSION['q4'];
        echo $_SESSION['q5'];
        echo $_SESSION['q6'];
        echo $_SESSION['q7'];
        echo $_SESSION['q8'];
        echo $_SESSION['q9'];
        echo $_SESSION['q10'];

    ?>

    <section class="form-section-one">
      <form action="/index.php" method="post">
        <fieldset>
            <legend>Status</legend>
            <p>Your Data has been submited successfully!</p>
        </fieldset>

        <section class="fieldset">
          <section class="field">
            <input class="btn" class="btn" type="button" value="Survey" onclick="backToFirstForm()">

            <input class="btn" class="btn" type="submit" value="Home" >
          </section>
        <section>
      </form>
    </section>
  </section>
</section>
</body>
</html>