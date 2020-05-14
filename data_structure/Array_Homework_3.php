<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Array</h2>");
print("<h2>Homework_3</h2><br>");

function arr_func($arr_A){
	$min;
	$ans=0;
	for ($j=sizeof($arr_A)-1;$j>=0;$j--){
		for ($k=0;$k<=$j;$k++){
			$ans=0;
			for ($i=$k;$i<=$j;$i++){
				$ans+=$arr_A[$i];
			}
			$ans-=($j-$k+1);
		
			if(!isset($min)){
				$min=$ans;
			}
			else{
				if($ans<$min){
					$min=$ans;
				}
			}
		}
		
	}
	return $min;
}

function print_answer($arr,$answer){
	echo ("(".$arr[0]);
	
	for ($i=1;$i<sizeof($arr);$i++){
		echo (", ".$arr[$i]);
	}
	echo (") = ".$answer."<br>");
}

$arr_A = array(1,0,0,0,4);
print_answer($arr_A,arr_func($arr_A));

$arr_B = array(0,1,-4,0,4);
print_answer($arr_B,arr_func($arr_B));

$arr_C = array(-3,0,-1,0,-4);
print_answer($arr_C,arr_func($arr_C));

?>
</body>
</html>
