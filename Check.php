<?php

if (isset($_SESSION["randomchocie"])) {
    $choice = $_SESSION["randomchocie"];
    $letters = str_split($choice);
    print_r($letters);
}
