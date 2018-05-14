<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>salaries.php</title>

 </head>
 <body>

 <?php
 $employee_salary=array(Emma=>70000,Steven=>90000,Robby=>50000,Kyle=>45000,Marisa=>80000,Brandon=>120000, Danielle=>500000);
 echo "<h4>Before sorting: </h4>";
 foreach($employee_salary as $employee => $salary){
   print ("$employee makes $salary <br>");
 }

 asort($employee_salary);
 echo "<h4>After asort: </h4>";
 foreach($employee_salary as $employee => $salary){
   print ("$employee makes $salary <br>");
 }

 ksort($employee_salary);

 echo "<h4>After ksort: </h4>";
 foreach($employee_salary as $employee => $salary){
   print ("$employee makes $salary <br>");
 }
 ?>



 </body>
</html>
