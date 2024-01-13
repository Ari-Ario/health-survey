
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sencond form</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<section id="form2" class="form">
  <section class="form-content" role="document">
      
    <section class="close-form">
        <section class="close"><span >&times;</span></section>
    </section>

    <section class="form-section-two">
      <form action="/components/submit-form-two.php" method="post">
        <fieldset>
          <legend>On a typical day, how many of your meals or snacks contain carbohydrates?</legend>
          <section class="field">
            <input type="number" name="size" id="size_1" value="small" >
            <input type="button" value="Ok">
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals or snacks contain protein?</legend>
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
          <legend>On a typical day, how many of your meals or snacks contain vegetables?</legend>
          <section class="field">
            <input type="range" name="size" id="size_1" value="small" />
            <label for="size_1">Small</label>
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals or snacks contain fruit?</legend>
          <section class="field">
            <input type="checkbox" name="size" id="size_2" value="medium" />
            <label for="size_2">Medium</label>
            <input type="radio" name="size" id="size_3" value="large" />
            <label for="size_3">Large</label>
          </section>
        </fieldset>

        <fieldset>
          <legend>On a typical day, how many of your meals are microwaved or prepared?</legend>
          <section class="field">
            <input type="range" name="size" id="size_1" value="small" >
            <label for="size_1">Small</label>
          </section>
        </fieldset>

        <input type="submit" value="SUBMIT DATA">
      </form>
    </section>

  </section>
</section>
</body>
</html>
