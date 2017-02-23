<?php
/*Name: Deepti Rajput
   UIN: 660136229
   Chapter 10 Assignment */
class Movies {
     private $age = 0;
     private $BasePrice = 10;
     
     public function SetAge($age) {
          $this->age=round($age);
     }
     
     public function GetPrice() {
          $retval=0;
          if ($this->age<5) 
               $retval=0;
          else if ($this->age<18) 
               $retval=($this->BasePrice/2);
          else if ($this->age>80)
               $retval="null";
          else if ($this->age>55) 
               $retval=($this->BasePrice-2);
          else 
               $retval=$this->BasePrice;
               
          return($retval);
     }
     
     public function error() {
     if ($this->age>80)
            echo "not allowed"; 
     }
}
?>
