<?php
session_start();
unset($_SESSION['SESSION_LOGGEDIN']);
unset($_SESSION['SESSION_USERNAME']);
unset($_SESSION['SESSION_CUSTOMERID']);
session_destroy();

header('Location: featureditems.php');

?>