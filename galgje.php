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
<link rel="stylesheet" href="stylegame.css">
</head>

<body>
<h1>Hang the Man</h1>

<div id="main">
<?php
$disabled = "''";

?>
<div id="input">
<form method="POST"><?php


if (isset($_POST['input'])) {
    $key = array_search($_POST['input'], $_SESSION['letters']);

    if (isset($key)) {
        unset($_SESSION["letters"][$key]);
    }
}

foreach ($_SESSION['letters'] as $letters) {
    $check =  ((isset($_POST['input']) && $_POST['input'] == $letters) || array_search($letters, ($_SESSION['chosenLetters'])));
    $_SESSION['attribute'] = $check ? 'disabled' : '';


    echo "<button type='submit' value=$letters name='input'  >$letters</button>";
}
?>
</form>
</div>


<?php
$_SESSION['increment'] = 0;

$imageNumber = 0;
if (isset($_SESSION["randomwoorden"])) {
    $final = $_SESSION["randomwoorden"];
} elseif (isset($_SESSION["usechoice"])) {
    $final = $_SESSION["usechoice"];
}

$increment = count($final) - 1;

$match = 0;

if (isset($_POST["input"])) {
    foreach ($final as $i) {
        if ($i == $_POST["input"]) {
            $match = 1;
        }
    }





    if ($_SESSION["rights"] == 0) {
        $_SESSION["rights"] = $increment + 1;
    }
    if ($match == 1) {
        $_SESSION['increment']--;
        foreach ($final as $i) {
            $_SESSION['increment']++;

            if ($_POST["input"] == $i) {
                $_SESSION['rightlet'][$_SESSION['increment']] = @$_POST['input'];
                $_SESSION["rights"] = $_SESSION["rights"] - 1;
            }
        }
    }




    $imageNumber = $_SESSION["imageNumber"];

    if ($match == 0) {
        $_SESSION["imageNumber"] = $_SESSION["imageNumber"] + 1;
        $_SESSION['wronglet'][$imageNumber] =  @$_POST["input"];
    } else {
        $_SESSION["imageNumber"] = $_SESSION["imageNumber"];
    }



    if ($imageNumber == 5) {
        header("Location: end.php");
    }
    if ($_SESSION["rights"] == 0) {
        header("Location: win.php");
    }

    $rights = $_SESSION["rights"];
}

if ($match == 0) {
    echo '<body style="background-color:red">';
} else {
    echo '<body style="background-color:green">';
}



?>
<img src="<?php echo $_SESSION['imageNumber']?>.PNG">
<div id='box'></div>

</div>




<h1>
<?php
for ($i = 0; $i <= $increment; $i++) {
    print_r($_SESSION['rightlet'][$i]);
}
?></h1>


<h1>Wrong letters:<?php
if (isset($_POST['input'])) {
    for ($i = 0; $i <= $imageNumber; $i++) {
        echo $_SESSION['wronglet'][$i] . ",";
    }
}
?></h1>


</div>
</body>

</html>
