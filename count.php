<html>

<head>
    <title>Counter</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 1;
        echo "<h1>Dit is de eerste keer dat je de pagina bezoekt.</h1>";
    } else {
        ++$_SESSION['count'];
    }
    ?>
    <h1>Bezocht: <?= $_SESSION['count'] ?> keer.</h1>
</body>

</html>