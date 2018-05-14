<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>sum.php</title>

 </head>
 <body>


 <?php
$sum= 0;
$integer=1;

while($integer <=100){
  $sum += $integer;
  $integer++;
}
echo 'While Loop Sum: ', $sum;

$forSum = 0;

for($i=1; $i<=100; $i++){
  $forSum+= $i;
}
echo '<br> For Loop Sum: ', $forSum;

$doSum = 0;
$doint = 1;

do{
  $doSum += $doint;
  $doint++;
} while ($doint<=100);

echo '<br> Do While Sum: ', $doSum;


 ?>



 </body>
</html>
