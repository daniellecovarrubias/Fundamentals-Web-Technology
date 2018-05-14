<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>my_birthday.php</title>
  <style type="text/css">
    span { font-weight: bold; color: red}
  </style>
 </head>
 <body>


 <?php
 date_default_timezone_set('UTC');
 $birthday = strtotime("26 October 1996");
 $time_passed = time()-$birthday;
 $minutes = $time_passed/60;
 $hours = $minutes/60;
 $days = $hours/24;
 $weeks = $days/7;
 $years = $weeks/52;
 echo "<p>Tell you a secret. My birthday is <span>". date('F jS Y', $birthday) ."</span> .</p>";
 echo '<p>Today is: '. date("d/m/Y") ."</p>";
 echo "<p> Since my birthday, ".
 round($time_passed) ." seconds,
 or ". round($minutes) ." minutes,
 or ". round($hours) ." hours,
 or ". round($days) ." days,
 or ". round($weeks) ." weeks,
 or ". round($years) ." years have passed.";
 ?>

 </body>
</html>
