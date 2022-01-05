<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_02</title>
</head>

<body>
    <h3>Tutorial 02</h3>
    <?php
    $n = 6;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= (2 * $n)-1; $j++) {
            if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp";
            }
        }
        echo "<br>";
    }
    for ($i = $n; $i <= $n; $i--) {
        for ($j = 1; $j <= (2 * $n); $j++) {
            if ($j >= $n - ($i - 1) && $j <= $n + ($i - 1)) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp";
            }
        }
        echo "<br>";
    }
    ?>
</body>

</html>