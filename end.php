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
  <link rel="stylesheet" href="styleend.css">
</head>

<body>
  <audio controls autoplay>
    <source src="loose.mp3" type="audio/ogg">
  </audio>

  <h1>YOU LOOSE</h1>

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


    echo "<h2>THE WORD WAS: $final</h2>"; ?>
  <form action="begin.php">
    <input type="submit" value="Retry">
  </form>
</body>

</html>
