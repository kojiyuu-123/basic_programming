<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Set</h2>");
print("<h2>Homework_2</h2><br>");

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
    		$word=ucfirst($input_array[$i]);
	        if (!$this->isExist($word)) { // we have to check if element is existed before adding
	            $this->elements[] = $word; // because the order is any so we can add to the end or beginning
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
$dictionary=new Set;
$date1=array("hello","hi","good morning","good night");
$dictionary->add_array($date1);
//print_r($dictionary);

$date2=array("hi","name","age");
$dictionary->add_array($date2);
//print_r($dictionary);

$date3=array("good morning","how are you","fine","thank");
$dictionary->add_array($date3);

print_r($dictionary);

?>
</body>
</html>
