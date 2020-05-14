<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Array</h2>");
print("<h2>Homework_4</h2><br>");

function ave_sum_min_max_twodimensions($arr){
	$sum=0;$min=$arr[0][0];$max=$arr[0][0];
	for ($i=0;$i<sizeof($arr);$i++){
		for ($j=0;$j<sizeof($arr[0]);$j++){
			$sum+=$arr[$i][$j];
			if($min > $arr[$i][$j]){
				$min=$arr[$i][$j];
			}
			if($max < $arr[$i][$j]){
				$max=$arr[$i][$j];
			}
		}
	}
	//echo (sizeof($arr)+sizeof($arr[0])."<br>");
	echo ("Average = ".($sum/(sizeof($arr)+sizeof($arr[0]))).", Sum = ".$sum.", Min = ".$min.", Max = ".$max."<br>");

}

$arr=array(array(5,12,17,9,13),array(13,4,8,14,1),array(9,5,3,17,21),);
ave_sum_min_max_twodimensions($arr);

?>
</body>
</html>
