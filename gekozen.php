<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choice</title>
    <link rel="stylesheet" href="stylegekozen.css">
</head>

<body>

    <div id="main">
        <h1 id="txt">Kies een woord die je wilt gebruiken voor het spel</h1>
        <form method="post">
            <input type="text" name="gekozenwoord" id="gekozenwoord">
            <input type="submit" name="play" id="play" value="Start!">
        </form>
    </div>
    <?php

    if (isset($_POST['gekozenwoord'])) {
        $_SESSION['gekozenwoord'] = strtolower($_POST['gekozenwoord']);
        $_SESSION["chosen"] = $_POST['gekozenwoord'];
        $letters = str_split($_POST['gekozenwoord']);
        $_SESSION["usechoice"] = $letters;
        header("Location: galgje.php");
    }

    ?>
</body>

</html>