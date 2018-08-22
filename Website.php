<!DOCTYPE html>
<html>
<head>
    <title> Justins Website </title>
</head>
<body>



</body>
</html>

<?php

$Seiten = array('index' ,'Anmeldung', 'Register', 'umwandler' );

if(empty($_GET["seite"]) or !in_array($_GET["seite"], $Seiten))
  {
  	$seite = "index";
  }


if ($_GET["seite"] == "index" or $seite = "index")
   {
   echo "<h3>Wilkommen auf der Homepage von Justin Schaper!</h3> <br>" ;
   echo 'Falls sie sich anmelden wollen klicken sie auf diesen link <br>';
   echo "<a href=\"?seite=Anmeldung\" >Zur Anmeldung</a> <br>";
   echo "Falls sie sich Registrieren wollen klicken sie auf diesen link <br>";
   echo "<a href=\"?seite=Register\" >Zur Registration</a><br>  ";
   echo "Falls sie zum Umwandler wollen klicken sie diesne link <br>";
   echo "<a href=\"?seite=umwandler\" >Zum Umwandler</a>";
   }


if ($_GET["seite"] == "Anmeldung")
	{
	echo "Meldet euch hier an: <br>" ;

	echo '<form action="Anmeldung.php" method="post">

	      <br>Benutzername: <input type="text" name="benutzername" /><br />
          Passwort: <input type="Password" name="passwort" />
          <input type="Submit" value="Absenden" /><br />
          </form>';


	}
if ($_GET["seite"] == "Register")
   {
   	echo "Registrieren sie sich bitte hier";

    echo '<form action="Register.php" method="post">
          <br>Benutzername: <input type="text" name="benutzernameRegister" /><br />
          Passwort: <input type="Password" name="passwortRegister" /><br />
          Passwort erneut Angeben: <input type="Password" name="passwortRegister2" /><br />
          <input type="Submit" value="Absenden" /><br />
          </form>';
    echo "<a href=\"Website.php?seite=index\" >Zum Index</a>";


   }
  if ($_GET["seite"] == "umwandler")
  {
  	echo '<form action="function.php" method="post">

	      <br>Wie viele Meter?: <input type="text" name="M" /><br />
          Welche Einheit?: <input type="text" name="Einheit" />
          <input type="Submit" value="Absenden" /><br />
          </form>';
  }



?>

