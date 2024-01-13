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
      
    <section class="close-form">
        <section class="close"><span >&times;</span></section>
    </section>

    <section class="form-section-one">
      <form action="/components/form-one-to-two.php" method="POST">
      
      <fieldset>
        <legend>How healthy are you physically?</legend>
        <section class="field">
          <input type="range" name="size" id="size_1" value="small" >
          <label for="size_1">Small</label>
        </section>
      </fieldset>

      <fieldset>
        <legend>Do you take nutritional supplements?</legend>
        <section class="field">
          <input type="radio" name="size" id="size_2" value="medium" />
          <label for="size_2">Medium</label>
        </section>
        <section class="field">
          <input type="radio" name="size" id="size_3" value="large" />
          <label for="size_3">Large</label>
        </section>
      </fieldset>

      <fieldset>
        <legend>How important is physical activity to you?</legend>
        <section class="field">
          <input type="range" name="size" id="size_1" value="small" />
          <label for="size_1">Small</label>
        </section>
      </fieldset>

      <fieldset>
        <legend>What additional physical activity do you do most?</legend>
        <section class="field">
          <input type="checkbox" name="size" id="size_2" value="medium" />
          <label for="size_2">Medium</label>
          <input type="radio" name="size" id="size_3" value="large" />
          <label for="size_3">Large</label>
        </section>
      </fieldset>

      <fieldset>
        <legend>Do you feel you do too little, just enough or way too much additional physical activity?</legend>
        <section class="field">
          <input type="range" name="size" id="size_1" value="small" >
          <label for="size_1">Small</label>
        </section>
      </fieldset>

        <input type="submit" value="Next" >
      </form>
    </section>

  </section>
</section>
</body>
</html>

