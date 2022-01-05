<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tutorial05</title>
</head>

<body>

    <?php
    if (file_exists("sample.txt")) { //check for the text file.
        include_once "sample.txt";
        echo "<br></br>";
    } //end of text file

    echo "This is CVS File. <br>";
    echo "<html><body><table border='1'>";
    $f = fopen("sample.csv", "r");
    while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "<tr>";
    }
    fclose($f);
    echo "</table></body></html><br>"; //end of text file.

    echo "This is Excel File. <br>";
    include("library/SimpleXLSX.php");
    if ($xlsx = SimpleXLSX::parse('sample.xlsx')) { //check for the excel file
        echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
        foreach ($xlsx->rows() as $r) {
            echo '<tr><td>' . implode('</td><td>', $r) . '</td></tr>';
        }
        echo '</table>';
    } else {
        echo SimpleXLSX::parseError();
    } //end of excel file

    /**
     * to get doc file
     * @param string $filename
     */
    function readWord($filename)
    {
        if (file_exists($filename)) {//filename already exists or not
            if (($fh = fopen($filename, 'r')) !== false) {//word file opens if the filename is equal
                $headers = fread($fh, 0xA00);
                $n1 = (ord($headers[0x21C]) - 1);
                $n2 = ((ord($headers[0x21D]) - 8) * 256);
                $n3 = ((ord($headers[0x21E]) * 256) * 256);
                $n4 = (((ord($headers[0x21F]) * 256) * 256) * 256);
                $textLength = ($n1 + $n2 + $n3 + $n4);

                $extracted_plaintext = fread($fh, $textLength);
                return $extracted_plaintext;
            }
        }
    }
    $filename = "sample.doc";
    echo readWord($filename); //end of document file
    ?>

</body>

</html>