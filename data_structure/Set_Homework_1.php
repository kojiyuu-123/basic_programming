<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Set</h2>");
print("<h2>Homework_1</h2><br>");

function print_array($arr){
	for ($i=0;$i<sizeof($arr);$i++){
		echo ($arr[$i] ." "); 
	}
	echo "<br>";
}

class Set {
    /** @var array */
    private $elements;

    /**
    * constructor
    */
    public function __construct()
    {
        $this->elements = array();
    }

    /**
    * add element to set
    * @param int $ele
    */
    public function add_array($input_array)
    {
    	for ($i=0;$i<sizeof($input_array);$i++){
	        if (!$this->isExist($input_array[$i])) { // we have to check if element is existed before adding
	            $this->elements[] = $input_array[$i]; // because the order is any so we can add to the end or beginning
	        }
        }
    }

    /**
    * get set
    * @return array
    */
    public function get()
    {
        return $this->elements;
    }


    /**
    * check if element is exist in set
    * @param int $ele
    * @return bool
    */
    public function isExist($ele)
    {
        return in_array($ele, $this->elements); // In php, in_array use to check an element is in array or not
    }
}

$input_array=array(1,2,3,4,5,2,-1,5,2,7,11,11,-5);
echo "Input_array : ";
print_array($input_array);

$set = new Set();
$set->add_array($input_array);
print_r($set->get());

?>
</body>
</html>
