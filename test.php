<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styletest.css">
</head>

<body>
    <form method="POST"><?php foreach ($_SESSION['alphabet'] as $letter) {
                            $check =  ((isset($_POST['letter']) && $_POST['letter'] == $letter) || array_search($letter, ($_SESSION['chosenLetters'])));
                            $attribute = $check ? 'disabled' : '';
                            echo "<button type='submit' value=$letter name='letter' $attribute>$letter</button>";
                        }
                        ?>
    </form>
</body>

</html>