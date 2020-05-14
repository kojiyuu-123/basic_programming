<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>LinkedList</h2>");
print("<h2>Homework_1</h2><br>");

class Node {
    /** @var int */
    private $data;
    /** @var Node */ 
    private $next; 

    /**
    * Constructor Node class
    */
    public function __construct($data = 0, $next = null)  // default value of $data is 0, $next is null
    {
        $this->data = $data; // initial $data
        $this->next = $next;  // initial $next
    }

    /**
    * get data
    * @return int
    */
    public function getData()
    {
        return $this->data;
    }

    /**
    * set data
    * @param int $data
    */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
    * get next
    * @return Node
    */
    public function getNext()
    {
        return $this->next;
    }

    /**
    * set next
    * @param Node $next
    */
    public function setNext($next)
    {
        $this->next = $next;
    }
    
} 

class LinkedList { 
    /** @var Node  head node */
    private $head;

    /**
    *@param int $data
    */
    public function insert($data)
    {
        $newNode = new Node($data); // create a Node
        if ($this->head == null) {
            // if the head is null, that mean linked list is empty, so the first node is head
            $this->head = $newNode;
        } else {
            // if linked list is not null, new node will be add to end of list
            // find the last node
            $last = $this->head; 
            while ($last->getNext() != null) { 
                $last = $last->getNext();
            }
            // insert new node to at last node
            $last->setNext($newNode);
        }
    }
    
	public function delete($data)
	{
	    if ($this->head == null) { // linked list is empty
	        echo "List is empty.<br>";
	        return;
	    }
	    
	    if ($this->head->getNext()==null){
	    	if($this->head->getData()==$data){
	    		echo "List is empty.<br>";
	    	}
	    	$this->head=null;
	    	return;
	    }
	    
	    $current1 = $this->head->getNext();//先を行くポインタ
	    $current2 = $this->head;//後をいくポインタ
	    
	    while($current1 != null){

	    	if($current1->getData()==$data){
	    		if($current1->getNext()!=null){
	    			//見つけたときに値を飛ばす。
	    			$current2->setNext($current1->getNext());
	    			$current1=$current1->getNext();
	    		}
	    		else{
	    			$current2->setNext(null);
	    			break;
	    		}
	    		
	    	}
	    	else{
		    	$current1=$current1->getNext();
		    	$current2=$current2->getNext();
	    	}
	    }
	    if($this->head->getData()==$data){
	    	//頭に探していた値があったときの処理
	    	$this->head=$this->head->getNext();
	    	if($this->head==null){
	    		echo "List is empty.<br>";
	        	return;
	    	}
	    }
        
	}

    /**
    * traversal linked list
    */
    public function visit()
    {
        $currNode = $this->head; // start from head node

        echo "Linked List: ";

        while ($currNode != null) {
            echo $currNode->getData() . " ";
            $currNode = $currNode->getNext();
        }
    }
}

$list = new LinkedList(); // init linked list: $head = null

//$list->insert(3);
//$list->insert(1);
//$list->insert(1);
//$list->insert(3);
//$list->insert(1);
//$list->insert(10);
//$list->insert(3);
//$list->insert(3);
//$list->insert(3);
//$list->insert(3);
//$list->insert(3);

$list->insert(2);
$list->insert(2);
$list->insert(2);
$list->insert(4);
$list->insert(1);
$list->insert(2);
$list->insert(2);
$list->insert(2);
$list->insert(2);
$list->insert(5);
$list->insert(2);
$list->insert(3);
$list->insert(3);
$list->insert(2);
$list->insert(2);
$list->insert(2);


$list->delete(2);

$list->visit(); // visit linked list

?>
</body>
</html>
