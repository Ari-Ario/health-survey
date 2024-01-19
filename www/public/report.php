<?php

if (session_status() === PHP_SESSION_NONE){
    session_start();
} // Start or resume the PHP session

include_once "./components-form/questions.php";

$totalPoints = 0;
$report = '';

foreach (QUESTIONS as $i => $data) { 
    $questionKey = $data["id"];

    foreach ($_SESSION as $key => $value){
      if (isset($_SESSION[$key])) {
        $userPost = $_SESSION[$key];
    }
    //
    $value = 0;
    switch($data["type"]) {
      case "range": // ----------------------------------------
          $value = $_SESSION[$key];
          break;
  
      case "radio": // ----------------------------------------
          if ($_SESSION === $data["healthy-value"]) $value = 1;
          else $value = 0;
          break;

      case "checkbox": // -------------------------------------
          $value = countSelectedCheckboxes($userPost);
          break;

      case "number": // ---------------------------------------
          $value = $_SESSION[$key];
          break;
      }
    }

    $points = pointsInRange($data, $value);

    $totalPoints = $totalPoints + $points;
    $questionNumber = substr($questionKey, 1);

    $report .= "<p>Question $questionNumber : points = $points according to your (input=$value)</p>";
}

function countSelectedCheckboxes($userPost) {
/*     $needle = "chbox-";
    $counter = 0;

    foreach($userPost as $key => $value) {
        if (str_contains($key, $needle)) $counter++;
    }

    return $counter; */
    return 1;
}

function pointsInRange($data, $value) {
    $healthyRange = $data["healthy-range"]; //  array(70, 100)
    $healthyPoints = $data["healthy-points"];

    if ($healthyRange[0] <= $value && $value <= $healthyRange[1]) {
        return $healthyPoints;
    }
    else return 0;
}

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
                $rep = '';
                if ($totalPoints<11){
                  $rep = "You have " .$totalPoints . " points. Try more for a better health.";
                } elseif ($totalPoints<22) {
                  $rep = "You have " .$totalPoints . " points. You are healthy, but able to do more.";
                }
                else { 
                  $rep = "You have ".$totalPoints . " points. You are doing too much, you must reduce some Activity.";
                }
                // print_r($_SESSION);
                echo "<p> <b> $rep </b></p>";
                echo "<p> $report </p>";
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