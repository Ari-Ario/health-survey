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
  <?php
include_once "./components-home/header.php";
  ?>
  <main>
    <form action="./form-one.php" method="POST">
      <input type="submit" value="Survey">
      <input type="text" name="" id="">
      <button>just butt</button>
    </form>  

  <script src="script.js"></script>
</body>

</html>