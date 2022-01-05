<?php
$foldername = $_POST["foldername"];
$location = $foldername . "/";
$fileName = $_FILES["file"]["name"];
$tmp = $_FILES["file"]["tmp_name"];
$type = $_FILES["file"]["type"];

// filename from user input
if (isset($fileName)) { 
    $structure = "./" . $foldername;

    //user input file name is already exist or not
    if (!mkdir($structure)) {
        echo "Folder Already Existed.<br>";
    }

    //check for the filename empty or not
    if (!empty($fileName)) {
        if ($type = "jpg" || $type = "jpeg" || $type = "png") {
            
            //move user input file to destination path
            if (move_uploaded_file($tmp, $location . $fileName)) {
                echo "File Uploaded to " . $foldername;
            } else {
                echo "Not Uploaded  " . $foldername;
            }
        }
    }
}
