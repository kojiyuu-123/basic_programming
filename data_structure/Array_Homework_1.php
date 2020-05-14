<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Array</h2>");
print("<h2>Homework_1</h2><br>");

function ave_sum_min_max($arr){
	if(empty($arr)){
		echo "This array is empty!<br>";
		return;
	}
	$sum=0;$min=$arr[0];$max=$arr[0];
	for($i=0;$i<sizeof($arr);$i++){
		$sum+=$arr[$i];
		if($min>$arr[$i]){
			$min=$arr[$i];
		}
		if($max<$arr[$i]){
			$max=$arr[$i];
		}
	}
	echo ("Average = ".($sum/sizeof($arr)).", Sum = ".$sum.", Min = ".$min.", Max = ".$max."<br>");
}

$arr = array(5,12,17,9,3);
ave_sum_min_max($arr);

$arr_2 = array(13,4,8,14,1);
ave_sum_min_max($arr_2);

$arr_3 = array(9,5,3,7,21);
ave_sum_min_max($arr_3);

$arr_4 = array();
ave_sum_min_max($arr_4);


?>
</body>
</html>