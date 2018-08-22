<!DOCTYPE html>
<html><script src="JavaScript.js"></script></html>


<?php
session_start();

$Type = basename($_FILES['uploaded_file']['type']);
$allowedTypes = array('jpeg', 'png');


if(!empty($_FILES['uploaded_file']) and in_array($Type, $allowedTypes) ) {
    $pfad = "uploads/";
    $pfad = $pfad . basename($_FILES['uploaded_file']['name']);
    if (file_exists($pfad)) {
        echo 'Sorry the file already exists!';
        echo '<br><button onclick="redirect3()">Zurück zum Dashboard</button>';
    }else{
        move_uploaded_file($_FILES['uploaded_file']["tmp_name"],$pfad);
        echo "The file ". basename( $_FILES["uploaded_file"]["name"]). " has been uploaded.";
        $_SESSION['pfad'] = $pfad;
        echo '<script>window.location.replace("/Dashboard.php")</script>';
    }

}
else {
    echo 'Falsche Datei!';
    echo '<br><button onclick="redirect3()">Zurück zum Dashboard</button>';
}

?>