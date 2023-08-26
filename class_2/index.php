<?php

echo "ধর,  তোমার বাসায় 10w এর  ২টা ফেন আছে, 100w এর ৫টা এসি আছে, 150W এর ২টা ফ্রিজ আছে।<br>
1w বিদ্যুতের দাম 14টাকা হলে টোটাল কত টাকা বিদ্যুৎ বিল হয়েছে? এবং দৈনিক কত W বিদ্যুৎ খরচ হয়েছে?<br>"; 

$fan = 2;
$fan_W = 10;
$Ac = 5;
$Ac_W = 100;
$Fridge = 2;
$Fridge_W = 150;
$One_W = 14;

// total fan w W and Bill //

// fan W //
$fan = 2;
$fan_W = 10;
$mul_1 = $fan * $fan_W;
$fan_bill = $mul_1 * $One_W;

echo " <h3>Fan Watt And Bill History</h3>";
echo 'Total Fan Watt Is :- &nbsp'. $mul_1. '&nbsp W <br><br> <b>Total Fan Electricity is</b> :- &nbsp'.$fan_bill. '&nbsp Tk '; 


// Fan Watt And Bill Ends//

// Total Ac Watt NAd Bill //

 // Ac Watt // 
  $AC = 5;
  $Ac_W = 100;
  $mul_2 = $Ac * $Ac_W;
  $Ac_bill = $mul_2 * $One_W;

  echo " <h3>AC Watt And Bill History</h3>";
  print "Total Ac Watt Is &nbsp :-  &nbsp $mul_2 W <br><br> Total AC Electricity Bill Is &nbsp :- &nbsp  $Ac_bill Tk <br>";

// fridge Watt And Bill //

//  Fridge Watt and bill //


$Fridge = 2;
$Fridge_W = 150;
$mul_3 = $Fridge * $Fridge_W;
$Fridge_bill = $mul_3 * $One_W;

echo " <h3>Fridge Watt And Bill History</h3>";  

print "Total Fridge Watt Is &nbsp :- &nbsp  $mul_3 W <br><br> Total Fridge Electricity Bill Is &nbsp :-  &nbsp $Fridge_bill Tk <br> ";


// Total Fan, Ac, Fridge Watt is ??

$total_watt = $mul_1 + $mul_2 + $mul_3;
$Total_bill = $fan_bill + $Ac_bill + $Fridge_bill;

echo  "<h3>Total Fan, Ac, Fridge Watt And Bill.</h3>";


echo "Total Watt Is :- &nbsp $total_watt W <br> ";
echo "Total Bill Is :- &nbsp $Total_bill Tk";



//function //

// {
// fan = 10W
// Ac = 100w
// Fridge = 150W
// 1W = 14tk

// ----------------------//
//}

echo "<h3>Calculate Total Watt And Total Current Bill With Function</h3>";
function electricity(){

  $fan = 10*2;
  $Ac = 100*5;
  $Fridge = 150*2;
  $One_Watt_Cost = 14;
  
  $total_Watt = $fan + $Ac + $Fridge; 
  
  echo "Total watt :- &nbsp $total_Watt w <br>";
  
  $total_bill = $total_Watt * $One_Watt_Cost;
  
  echo "Total Electricity :- &nbsp $total_bill Tk ";
  
  }
  electricity();


// Dynamic Function //
echo "<h3>Dynamic Function</h3>";

function electricity_Dynamic($fan=0, $Ac= 0, $Fridge=0){
  $fan = $fan*2;
  $Ac = $Ac*5;
  $Fridge = $Fridge*2;
  $One_w = 14;

  $total_watt = $fan + $Ac + $Fridge;
  echo "Total Watt :- &nbsp $total_watt W <br>";
  $total_bill = $total_watt * $One_w;
  echo "Total Electricity bill :- &nbsp $total_bill";
}
electricity_Dynamic(25, 200, 250);

?>