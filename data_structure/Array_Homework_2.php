<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Array</h2>");
print("<h2>Homework_2</h2><br>");

function arr_sum($arr_A,$arr_B){
	$arr_C=array();
	for ($i=0;$i<sizeof($arr_A);$i++){
		array_push($arr_C,($arr_A[$i]+$arr_B[$i]));
	}
	return $arr_C;
}

//$arr_A = array(1,2,3,4,5);$arr_B = array(13,4,8,14,1);
$arr_A = array(1,2,3,4,5);$arr_B = array(4,5,3,2,10);
$arr_C=arr_sum($arr_A,$arr_B);
for ($i=0;$i<sizeof($arr_C);$i++){
	echo "index_".$i." = ". $arr_C[$i]."<br>";
}

?>
</body>
</html>