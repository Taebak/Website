
<?php
session_start();
$passwort = $_POST["passwort"];
$Benutzername = $_POST["benutzername"];
function mysqli_get_var($conn,$query,$y=0){
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    mysqli_free_result($res);
    $rec = $row[$y];
    return $rec;
}
$conn = new mysqli('localhost', 'root', '', 'test2');
$query = "SELECT Passwort FROM users WHERE Benutzernamen = '" . $Benutzername . "'";
$passwordHASH = mysqli_get_var($conn, $query);


if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
} 


if (empty($Passwort) or empty($Benutzername))
   {
    echo "Bitte melden sie sich nocheinmal ein<br>";
    echo "<a href=\"Website.php?seite=start\" >Zur Anmeldung</a>";

   }

$sql = mysqli_query($conn, "SELECT * FROM users WHERE Benutzernamen = '$Benutzername'");
$row = mysqli_num_rows($sql);

if($row > 0 and password_verify($passwort, $passwordHASH))
  {
  $_SESSION['Benutzernamen'] = $Benutzername;
  $_SESSION['Passwort'] = $Passwort;
  $_SESSION['userid'] = $Benutzername ['id'];
  echo '<script> window.location.replace("/Dashboard.php"); </script>';
  } else
  {
  echo "Falsches passwort oder benutzername";
  }







?>





