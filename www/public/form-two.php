
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sencond form</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="styles-home.css">

</head>

<body>
<?php include_once "./components-home/header.php"; ?>
<?php include_once "./components-home/video-bg.php"; ?>


<section id="form2" class="container content">
  <section class="form-content" role="document">
      
  <?php include_once "./components-form/close.php"; ?>

    <section class="form-section-two">
      <form name="form2" id="formsecond" action="/components-form/submit-form-two.php" method="POST">

        <fieldset class="fieldset">
          <legend>Do you feel you do too little, just enough or way too much additional physical activity?</legend>
          <section class="field">
            <input type="range" name="q5" id="q5" min="0" max="100"  value="0">
          </section>
          <section class="field">
            <label for="q5">A little</label>
            <label for="q5">Just right</label>
            <label for="q5">Too much</label>
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals or snacks contain carbohydrates?</legend>
          <section class="field">
            <input type="number" name="q6" id="q6" placeholder="e.g: 2" >
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals or snacks contain protein?</legend>
          <section class="field">
            <input type="number" name="q7" id="q7" placeholder="e.g: 2" />
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals or snacks contain vegetables?</legend>
          <section class="field">
            <input type="number" name="q8" id="size_1" placeholder="e.g: 2"/>
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals or snacks contain fruit?</legend>
          <section class="field">
            <input type="number" name="q9" id="size_2" placeholder="e.g: 2" />
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals are microwaved or prepared?</legend>
          <section class="field">
            <input type="number" name="q10" id="size_1" placeholder="e.g: 2" >
          </section>
        </fieldset>

        <section class="fieldset">
        <section class="field">
          <input class="btn" type="button" value="Back" onclick="backToFirstForm()">

          <input class="btn" type="submit" value="Next" onclick="validateSecondForm()">
        </section>
      <section>

      </form>
    </section>

  </section>
</section>
<script src="script.js"></script>

<!-- <footer>
  <?php include_once "./components-home/footer.php"; ?>
  </footer> -->

</body>
</html>
