
<?php
session_start();
session_destroy();

echo "Logout erfolgreich....";
sleep(2);
echo '<script> window.location.replace("/Website.php?seite="); </script>';
?>