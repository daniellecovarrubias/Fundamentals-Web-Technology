<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>Table</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }

    .tdcolor{
      color: blue;
    }

  </style>
 </head>

 <body>


 <?php
 $salaryA="$1000";
 $salaryB="$1200";
 $salaryC="$1400";
  echo "
  <table>
  <tr>
    <td class='tdcolor'>Salary of Mr.A is</td>
    <td>$salaryA</td>
  </tr>
  <tr>
    <td class='tdcolor'>Salary of Mr.B is</td>
    <td>$salaryB</td>
  </tr>
  <tr>
    <td class='tdcolor'>Salary of Mr.C is</td>
    <td>$salaryC</td>
  </tr>
  </table>
  ";
 	?>

 </body>
</html>
