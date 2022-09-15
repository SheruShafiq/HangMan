<?php

session_start();
$_SESSION["woorden"] = [
    "revoke",
    "technology",
    "mug",
    "reaction",
    "seek",
    "condition",
    "weigh",
    "unlawful",
    "performer",
    "unrest",
    "terms",
    "capture",
    "father",
    "office"
];

$randomnum = random_int(0, 13);
$gekozenrand = $_SESSION["woorden"][$randomnum];
$_SESSION["randomchocie"] = $gekozenrand;

if (isset($_SESSION["randomchocie"])) {
    $choice = $_SESSION["randomchocie"];
    $letters = str_split($choice);
    $_SESSION["randomwoorden"] = $letters;
}
header("Location: galgje.php");
