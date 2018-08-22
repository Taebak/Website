<?php
session_start();
    if (empty($_POST["benutzernameRegister"]) or empty($_POST["passwortRegister"]) or empty($_POST["passwortRegister2"]))
    {

    	echo "Bitte erneut Registrieren <br>";
        echo "<a href=\"Website.php?seite=Register\" >Zur Registration</a>";
    }   
    
    else
    {
    	$benutzernameRegister = $_POST["benutzernameRegister"];
        $passwortRegister = $_POST["passwortRegister"];
        $passwortRegister2 = $_POST["passwortRegister2"];
        $conn = new mysqli('localhost', 'root', '', 'test2');
    
        if ($conn->connect_error) {
                              die("Verbindung fehlgeschlagen: " . $conn->connect_error);
                              }
    


        if ($passwortRegister != $passwortRegister2 or empty($benutzernameRegister) or empty($passwortRegister) or empty($passwortRegister2))
           {
            echo "Bitte erneut Registrieren <br>";
            echo "<a href=\"Website.php?seite=Register\" >Zur Registration</a>";
           }
        else
           {
           $passwortSHA =password_hash($passwortRegister, PASSWORD_BCRYPT);

           $Passwoerter = $passwortSHA;
           $Benutzernamen = $benutzernameRegister;
        

           $sql    = "INSERT INTO users (Benutzernamen, Passwort, usergroups ) 
                      VALUES('$Benutzernamen', '$Passwoerter', 'user')";
        
           if ($conn-> query($sql) == TRUE)
              {
               echo "Erfolgreich Registriert!<br>";
               echo "<a href=\"Website.php?seite=start\" >Zur Anmeldung</a>";
               $_SESSION['usergroup'] = 'user';


              }
           else
              {
               echo "Fehler<br>";
               echo "<a href=\"Website.php?seite=Register\" >Zur Registration</a>";

              }

            $conn->close();

       

    
        
           }
    }



   
  


?>