<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Queue</h2>");
print("<h2>Homework_1</h2><br>");

class Queue {
    /** @var array queue element */
    private $elements;

    public function __construct()
    {
        $this->elements = array(); //initialize queue element
    }

    /**
    * insert an element
    * @param string $ele
    * @return void
    */
    public function enqueue($ele)
    {
        array_unshift($this->elements, $ele); 
    }

    /**
    * delete front element
    * @return void
    */
    public function dequeue()
    {
        if (!$this->isEmpty()) { //check if queue is not empty
            unset($this->elements[sizeof($this->elements) - 1]); // same to pop function in stack
        }
    }

    /**
    * get front element
    * @return string
    */
    public function front()
    {
            if (!$this->isEmpty()) {
            return $this->elements[sizeof($this->elements) - 1]; // same to top function in stack
        }

        return null;
    }

    /**
    * check queue is empty or not
    * @return boolean
    */
    public function isEmpty()
    {
        return empty($this->elements);
    }
}

function task($N,$pri_task,$dep_list){
	$time=0;
	
	$que_pri=new Queue;// priority
	$que_dep=new Queue;// dependency
	for ($i=0;$i<$N;$i++){
		$que_pri->enqueue($pri_task[$i]);
		$que_dep->enqueue($dep_list[$i]);
	}
	
	while(!$que_pri->isEmpty()){
	
		if($que_pri->front() == $que_dep->front()){
			$time+=2;
			$que_dep->dequeue();
		}
		else{
			$time+=1;
			$que_pri->enqueue($que_pri->front());
		}
		$que_pri->dequeue();
	}
	return $time;
}

$N=3;
$priority=array(2,1,3);
$dependent=array(1,2,3);
echo ("Process Time = ".task($N,$priority,$dependent)."<br>");


?>
</body>
</html>
