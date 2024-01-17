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
<section id="form1" class="container" >
  <section class="form-content" role="document">
      
    <?php include_once "./components-form/close.php"; ?>

    <section class="form-section-one">
      <form action="/components-form/form-one-to-two.php" method="POST">
      
      <fieldset class="fieldset">
        <legend>1- How healthy are you physically?</legend>
        <section class="field">
          <input type="range" name="q1" id="q1" value="" min="0" max="4" >
        </section>
        <section class="field">
          <label for="q1">Not at all</label>
          <label for="q1">Little</label>
          <label for="q1">Medium</label>
          <label for="q1">Healthy</label>
          <label for="q1">Very healthy</label>
        </section>
      </fieldset>

      <fieldset class="fieldset">
        <legend>2- Do you take nutritional supplements?</legend>
        <section class="field">
          <label for="q2" class="q2">
            <input type="radio" name="q2" id="q2" value="yes" />Yes
          </label>
          <label for="q2" class="q2">
            <input type="radio" name="q2" id="q2" value="no" />No 
          </label>
          <label for="q2" class="q2">
            <input type="radio" name="q2" id="q2" value="sometimes" />Sometimes 
          </label>
        </section>
      </fieldset>

      <fieldset class="fieldset">
        <legend>3- How important is physical activity to you?</legend>
        <section class="field">
          <input type="range" name="q3" id="q3" min="0" max="4"/>
        </section>
        <section class="field">
          <label for="q3">Not at all</label>
          <label for="q3">Little</label>
          <label for="q3">Medium</label>
          <label for="q3">Important</label>
          <label for="q3">Very important</label>
        </section>
      </fieldset>

      <fieldset class="fieldset" >
        <legend>4- What additional physical activity do you do most?</legend>
        <section class="field" id="fieldset4">
          <section class="q4-grid">
            <label for="q4" class="q4">
              No additional activity<input type="checkbox" name="q4" id="q4" value="Yes" /> 
            </label>
            <label for="q4" class="q4">
              Lifting weights <input type="checkbox" name="q4" id="q4" value="Yes" />
            </label>
            <label for="q4" class="q4">
              Walking <input type="checkbox" name="q4" id="q4" value="Yes" />
            </label>
          </section>

          <section class="q4-grid">
            <label for="q4" class="q4">
              Jogging <input type="checkbox" name="q4" id="q4" value="" />
            </label>
            <label for="q4" class="q4">
              Running <input type="checkbox" name="q4" id="q4" value="" />
            </label>
            <label for="q4" class="q4">
              Swimming <input type="checkbox" name="q4" id="q4" value="" />
            </label>
          </section>
          <!-- <section class="q4-grid"></section> -->
          <section class="q4-grid">
            <label for="q4" class="q4">
              Dancing <input type="checkbox" name="q4" id="q4" value="" />
            </label>
            <label for="q4" class="q4">
              Aerobics <input type="checkbox" name="q4" id="q4" value="" />
            </label>
            <label for="q4" class="q4">
              Pilates <input type="checkbox" name="q4" id="q4" value="" />
            </label>
          </section>

          <section class="q4-grid">
            <label for="q4" class="q4">
              Team sports <input type="checkbox" name="q4" id="q4" value="" />
            </label>
            <label for="q4" class="q4">
              Other <input type="checkbox" name="q4" id="q4" value="" />
            </label>
          <section>

        </section>
      </fieldset>

      <section class="fieldset">
        <section class="field">
        <input class="btn" type="button" value="Back" onclick="closeForm()">

        <input class="btn" type="submit" value="Next" >
        </section>
      <section>

      </form>
    </section>

  </section>
</section>
</body>
</html>

