<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>mult_table.php</title>

 </head>
 <body>
   <table border="border">
     <caption>Multiplication table</caption>
     <tr algin = 'center'>
       <th>x</th>
 <?php
  for($header=1; $header<=15; $header++){
    print("<th align='center'>$header</th>");
  }
  print("</tr>\n <tr>");
  for($column=1; $column<=15; $column++){
    print("<th align='center'>$column</th>");
    for($row=1; $row<=15; $row++){
      $product=$column*$row;
      print("<td align='center'>$product</td>");
    }
    print("</tr>");
  }
 ?>
</table>


 </body>
</html>
