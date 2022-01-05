<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial03</title>
</head>

<body>
    <?php
    /**
     * to get age
     * @param string $dob date of birth
     */
    function getAge($dob)
    {
        $birthDay = new DateTime($dob);
        $today = new DateTime(date('m.d.y'));
        if ($birthDay > $today) {
            echo "Choose Again";
        }
        if ($birthDay < $today) {
            $diff = $today->diff($birthDay);
            echo 'Your age is: ' . $diff->y . ' Years';
        }
    }
    ?>
    <h3>Tutorial 03</h3>
    <form action="">
        <div class="input">
            <label>Date of Birth</label>
            <input type="date" name="dob">
            <input type="submit" value="Calculate">
        </div>
    </form>
    <?php
    if (isset($_GET['dob']) && $_GET['dob'] != '') { ?>
        <div class="result">
            <?php echo getAge($_GET['dob']); ?>

        </div>
    <?php } ?>
</body>

</html>