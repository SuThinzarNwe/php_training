<?php
$name = "user";
$password = "user";

session_start();

if (isset($_SESSION['name'])) {//statement for when user input name it will appear behind Welcome
    echo "<h2>Welcome " . $_SESSION['name'] . "</h2>";

    echo "<br><a href='logout.php'><input type=button value=logout name=logout></a>";
} else {
    if ($_POST['name'] == $name && $_POST['password'] == $password) {//statement for checking that the user input name and password are equal or not
        $_SESSION['name'] = $name;

        echo "<script>location.href='session.php'</script>";
    } else {
        echo "<script>alert('Incorrect')</script>";

        echo "<script>location.href='login.php'</script>";
    }
}
