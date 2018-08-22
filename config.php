<!DOCTYPE html>
<html><script src="JavaScript.js"></script></html>




<?php
session_start();

if (!isset($_SESSION['usergroup']) and !isset($_SESSION['userid'])){
    echo 'Sie haben keine berechtigung';
    sleep(2);
    echo '<script> window.location.replace("/Dashboard.php"); </script>';

}
else{
    echo 'Willkommen!';
    echo '<br><button onclick="redirect()">Logout</button>';


}

?>