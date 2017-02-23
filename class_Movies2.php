<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Name: Deepti Rajput
   UIN: 660136229
   Chapter 10 Assignment -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Movies Class Tester</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Movies</h1>

<?php
echo "<h3>Minimum age Limit=1 & Maximum age Limit=80</h3>";
echo "</br>";

if(isset($_POST['submit']))
{
$age=$_POST['owed'];
require_once("class_Movies3.php");
$a=new Movies;	
$a->SetAge($age);
$a->error($age);
echo "</br>";
echo "Price:".$a->GetPrice()."</b>";

}

echo "<p>\n";


?>
<a href="Movies.html">return to homepage</a>
</body>
</html>

