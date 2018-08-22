<!DOCTYPE html>
<html><script src="JavaScript.js"></script>
</html>

<?php
session_start();



if(!isset($_SESSION['userid']) and isset($_SESSION['usergroup'])) {


    echo
    die('Bitte zuerst <a href="Website.php?seite=Register">Registrieren</a>');
}
else{
$userid = $_SESSION['userid'];
function mysqli_get_var($conn,$query,$y=0){
        $res = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($res);
        mysqli_free_result($res);
        $rec = $row[$y];
        return $rec;
    }
    $Benutzername = $_SESSION['Benutzernamen'];
    $conn = new mysqli('localhost', 'root', '', 'test2');
    $query = "SELECT usergroups FROM users WHERE Benutzernamen = '" . $Benutzername . "'";
    $usergroup = mysqli_get_var($conn, $query);
    $_SESSION['usergroup'] = $usergroup;




echo "Hallo User: ".$_SESSION['Benutzernamen'];
echo '<br><button onclick="redirect()">Logout</button>';
echo '<br>';
echo '<br><button onclick="redirect2()">Einstellungen(nur für admins)</button>';


echo '<form enctype="multipart/form-data" action="upload.php" method="POST">
      <p>Upload your file</p>
      <input type="file" name="uploaded_file"></input><br />
      <input type="submit" value="Upload"></input><br>';
if (!empty($_SESSION['pfad'])){
    $Filepfad = $_SESSION['pfad'];
    echo "Ihr letzter upload war: localhost/" . $Filepfad . "";
}

}

?>
