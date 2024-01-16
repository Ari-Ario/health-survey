

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
  <link rel="stylesheet" href="styles-home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="main-container">
  <header>
    <?php
  include_once "./components-home/header.php";
    ?>
  </header>
    <main>
      <?php
      include_once "./components-home/body.php";
      ?>
    </main>

</body>

</html>