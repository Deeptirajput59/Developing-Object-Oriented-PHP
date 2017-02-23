<?php
/*Name: Deepti Rajput
   UIN: 660136229
   Chapter 10 Assignment */
class Change {
     private $Denominations = array(
          array("name" => "\$50 Bill", "value" => 50), 
          array("name" => "\$20 Bill", "value" => 20), 
          array("name" => "\$10 Bill", "value" => 10), 
          array("name" => "\$5 Bill", "value" => 5), 
          array("name" => "\$1 Bill", "value" => 1), 
          array("name" => "Quarter", "value" => 0.25), 
          array("name" => "Dime", "value" => 0.1), 
          array("name" => "Nickel", "value" => 0.05), 
          array("name" => "Penny", "name_plural" => "Pennies", "value" => 0.01));
     private $DenominationCount;
     private $AmountOwed=0;
     private $AmountPaid=0;
     
     function __construct() {
          $this->DenominationCount=count($this->Denominations);
     }
     
     public function SetAmountOwed($Owed) {
          $this->AmountOwed=round($Owed,2);
     }
     
     public function SetAmountPaid($Paid) {
          $this->AmountPaid=round($Paid,2);
     }
     
     public function ShowChange() {
          $ChangeDue=($this->AmountPaid-$this->AmountOwed);
          echo "<p>\n";
          echo "The price of the transaction was \$" .
               trim(sprintf("%4.2f",$this->AmountOwed)) . 
               ".<br />\n";
          echo "The amount paid was \$" .
               trim(sprintf("%4.2f",$this->AmountPaid)) . 
               ".<br />\n";
          echo "The change due is \$" .
               trim(sprintf("%4.2f",$ChangeDue)) . 
               ".<br />\n";
          if ($ChangeDue<0) {
               echo "The customer still owes \$" .
                    trim(sprintf("%4.2f",(-1*$ChangeDue))) . 
                    ".<br />\n";
          }
          else if ($ChangeDue==0) {
               echo "The customer paid the exact amount, no change is due.<br />\n";
          }
          else {
               echo "Return the following denominations as change:<br />\n";
               $RemainingDue=$ChangeDue;
               for ($i=0; $i<$this->DenominationCount; ++$i) {
                    $CurrCount=floor($RemainingDue/$this->Denominations[$i]["value"]);
                    if ($CurrCount>0) {
                         $RemainingDue-=($CurrCount*$this->Denominations[$i]["value"]);
                         $RemainingDue=round($RemainingDue,2);
                         if ($CurrCount==1) {
                              echo " &nbsp; 1 " . $this->Denominations[$i]["name"] . "<br />\n";
                         }
                         else if (isset($this->Denominations[$i]["name_plural"])) {
                              echo " &nbsp; $CurrCount " . 
                                   $this->Denominations[$i]["name_plural"] . "<br />\n";
                         }
                         else {
                              echo " &nbsp; $CurrCount " . 
                                   $this->Denominations[$i]["name"] . "s<br />\n";
                         }
                    }
               }
          }
               
          echo "</p>\n";
     }
}
?>
