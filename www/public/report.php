<?php

if (session_status() === PHP_SESSION_NONE){
    session_start();
} // Start or resume the PHP session

include_once "./components-form/questions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission data</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles-home.css">
</head>
<body>
<?php include_once "./components-home/header.php"; ?>
<?php include_once "./components-home/video-bg.php"; ?>
<section id="form2" class="container content">
  <section class="form-content" role="document">
      
    <?php include_once "./components-form/close.php"; ?>

    <section class="form-section-one">
      <form action="/index.php" method="post">
        <fieldset>
            <legend>Report</legend>
            <?php 
                print_r($_SESSION);
                ?>
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

<!-- <footer>
  <?php include_once "./components-home/footer.php"; ?>
  </footer> -->

</body>
</html>