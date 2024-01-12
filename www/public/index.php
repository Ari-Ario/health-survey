<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
  <link rel="stylesheet" href="styles.css">

</head>

<body>
  <main>
    <button onclick="openPopUp()">Survey</button>
    <?php include_once "./popups/popupFirst.php" ?>
    <?php include_once "./popups/popupSecond.php" ?>
  </main>

  <script src="script.js"></script>
</body>

</html>