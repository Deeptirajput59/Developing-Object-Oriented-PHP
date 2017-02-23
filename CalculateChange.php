<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--Name: Deepti Rajput
   UIN: 660136229
   Chapter 10 Assignment -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Calculate Change</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<h1>Calculate Change</h1>
<?php
$AmountOwed="";
$AmountPaid="";
if (isset($_POST["submit"])) {
     $errors=0;
     if (isset($_POST["owed"])) {
          if (is_numeric($_POST["owed"])) {
               if (($_POST["owed"]>=0.01) && ($_POST["owed"]<=100)) {
                    $AmountOwed=trim(sprintf("%4.2f",$_POST["owed"]));
               }
               else {
                    echo "<p>The amount owed must be between 0.01 and 100.00.</p>\n";
                    ++$errors;
               }
          }
          else {
               echo "<p>The amount owed must be a number.</p>\n";
               ++$errors;
          }
     }
     else {
          echo "<p>You must enter the amount owed.</p>\n";
          ++$errors;
     }
     if (isset($_POST["paid"])) {
          if (is_numeric($_POST["paid"])) {
               if (($_POST["paid"]>=0.01) && ($_POST["paid"]<=100)) {
                    $AmountPaid=trim(sprintf("%4.2f",$_POST["paid"]));
               }
               else {
                    echo "<p>The amount paid must be between 0.01 and 100.00.</p>\n";
                    ++$errors;
               }
          }
          else {
               echo "<p>The amount paid must be a number.</p>\n";
               ++$errors;
          }
     }
     else {
          echo "<p>You must enter the amount paid.</p>\n";
          ++$errors;
     }
     if ($errors==0) {
          require_once("class_Change.php");
          $Change=new Change();
          $Change->SetAmountOwed($AmountOwed);
          $Change->SetAmountPaid($AmountPaid);
          echo "<h2>Calculation Results</h2>\n";
          $Change->ShowChange();
          echo "<br />\n";
          echo "<hr />\n";
          echo "<br />\n";
     }
}
?>

<a href="Change.html">click here to go back</a>
</body>
</html>

