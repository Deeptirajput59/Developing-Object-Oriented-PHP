<?php
/*Name: Deepti Rajput
   UIN: 660136229
   Chapter 10 Assignment */
$ErrorMsgs = array();
$DBConnect = new mysqli("10.203.98.147", "drajp2", "Password123","online_stores");
//echo "Database Connected";
if ($DBConnect->connect_error)
   $ErrorMsgs[] = "The database server is not available. " .
               "Connect Error is " . $mysqli->connect_errno . 
               " " . $mysqli->connect_error . ".";
?>

