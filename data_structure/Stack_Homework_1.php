<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Stack</h2>");
print("<h2>Homework_1</h2><br>");

class Stack {
    /** @var array stack element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize stack element
    }

    /**
    * insert an element
    * @param string num
    */
    public function push($ele)
    {
        $this->elements[] = $ele;
    }

    /**
    * delete top element
    */
    public function pop()
    {
        if (!$this->isEmpty()) { //check if stack is not empty
            unset($this->elements[sizeof($this->elements) - 1]); // unset use to destroy a variable (https://www.php.net/manual/en/function.unset)
        }
    }

    /**
    * get top element
    * @return string
    */
    public function top()
    {
        if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1];
        }

        return null;
    }

    /**
    * check stack is empty or not
    * @return boolean
    */
    public function isEmpty()
    {
        return empty($this->elements);
    }
}

function game($list){
	$output=array();
	if(empty($list)){
		return "Expression is empty.";
	}
	
	$stack_A=new Stack();
	for ($i=sizeof($list)-1;$i>-1;$i--){
		$stack_A->push($list[$i]);
	}
		
	$stack_B=new Stack();
	for ($i=0;$i<sizeof($list);$i++){
		$stack_B->push($list[$i]);
	}
	
	while(!$stack_A->isEmpty() && !$stack_B->isEmpty()){
	
		$delta_AB=$stack_A->top() - $stack_B->top();
		if($delta_AB>0){
			$output[]=1;
			$stack_B->pop();
		}
		elseif($delta_AB<0){
			$output[]=2;
			$stack_A->pop();
		}
		else{
			$output[]=0;
			$stack_A->pop();
			$stack_B->pop();
		}
	}
	
	print("Input:[ ");
	for ($i=0;$i<sizeof($list);$i++){
		print($list[$i]." ");
	}
	print("]<br>");
	
	print("Output:[ ");
	for ($i=0;$i<sizeof($output);$i++){
		print($output[$i]." ");
	}
	print("]<br>");
}
print("Game1:<br>");
$input_1=array(1,2,3);
game($input_1);
print("Game2:<br>");
$input_2=array(2,1,3,2);
game($input_2);

?>
</body>
</html>
