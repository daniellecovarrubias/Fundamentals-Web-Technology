<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
 "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
 <head>
  <title>AvgMdn.php</title>

 </head>
 <body>
 <?php
function calculate($arr){
	//AVERAGE
	$sum=0;
	foreach($arr as $value){
		$sum += $value;
	}
	$count=count($arr);
	$average = $sum/$count;

	//MEDIAN
	sort($arr);
	$middle = floor(($count-1)/2);

	if($count % 2){
		$median = $arr[$middle];
	}

	else{
		$middle1=$arr[$middle];
		$middle2=$arr[$middle+1];
		$median=($middle1+$middle2)/2;
	}
	return array($average, $median);
}

$my_arr=array(7,9,2,1,8,12);

list($average, $median)=calculate($my_arr);
echo " The average is $average and the median is $median";

?>



</body>
</html>
