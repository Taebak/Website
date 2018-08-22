<?php
$M = $_POST["M"];
(int)str_replace(' ', '', $M);
$Einheit2 = $_POST["Einheit"];




function m_changer($m, $Einheit) {
    $Einheiten = array('cm' , 'km', 'mm' );
	if (empty($m) or empty($Einheit) or !in_array($Einheit, $Einheiten) )
		echo "Bitte geben sie es noch einmal ein<br>";
        echo "<a href=Website.php?seite=umwandler >Zurück</a><br>";
	if ($Einheit == "m")
	   {
	   	strval($m);
	   	echo "{$m}m";
	   }
    else if ($Einheit == "km") {
    	$m = $m / 1000;
	   	strval($m);
        echo "{$m}km";
        }
    else if ($Einheit == "cm") {
    	$m = $m * 100;
	   	strval($m);
        echo "{$m}cm";
    	}
    else if ($Einheit == "mm") {
    	$m = $m * 1000;
	   	strval($m);
        echo "{$m}mm";
    	
    }




}


m_changer($M, $Einheit2)
?>