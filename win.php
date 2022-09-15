<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="stylewin.css">
</head>

<body>
  <audio controls autoplay>
    <source src="win.mp3" type="audio/ogg">
  </audio>
  <h1>CONGRATS YOU WIN!</h1>
  <div class='randomloose'>
    <h1>The word was:</h1>
    <?php
    if (isset($_SESSION["randomwoorden"])) {
        $final =  $_SESSION["randomwoorden"];
        foreach ($final as $key) {
            echo "<h1 >$key</h1>";
        }
    } elseif (isset($_SESSION['gekozenwoord'])) {
        $final = $_SESSION['gekozenwoord'];
        echo "<h1> $final</h1>";
    }

    ?>
  </div>

  <form action="begin.php">
    <input type="submit" value="Retry">
  </form>
</body>

</html>
