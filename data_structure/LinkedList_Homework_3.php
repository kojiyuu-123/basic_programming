<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>LinkedList</h2>");
print("<h2>Homework_3</h2><br>");

const M = 3;

class FollowerNode{
	public $name;
	public $age;
	public $next;
	
	
	public function setData($name,$age){
		$this->name=$name;
		$this->age=$age;
	}
	public function setNext($next){
		$this->next = $next;
	}
	
	public function showData(){
		print("Name : ".$this->name."<br>");
		print("Age : ".$this->age."<br>");
	}
	
	public function getData(){
		return array($this->name,$this->age);
	}
	
	public function getNext(){
		return $this->next;
	}
}

class LinkedList_follow {
	private $head;
	private $name;
	private $age;
	private $follower_num;
	
	function construct(){
		$this->follower_num=0;
	}
	
	public function resister($name,$age){
		//make a new individual
		$newNode = new FollowerNode($name,$age);
		$this->name=$name;
		$this->age=$age;
		$this->head = $newNode;
	}
	
	public function follower_resister($person){
		if($person==$this){
			print("Can't follow yourself<br>");
			return;
		}
		$name=$person->name;
		$age=$person->age;
		
		//There is no list.
		if($this->head == null){
			echo "List is empty.";
			return;
		}
		$current = $this->head;
		while($current!=null){
			if($this->follower_num>=M){
				print("Too many followers : " .$name." " .$age. "<br>");
				return;
			}
			if($current->getNext()==null){
			
				$curdata=$current->getData();
				if($curdata[0]==$name && $curdata[1]==$age){
					echo "Already follower : ".$curdata[0]." ".$curdata[1]."<br>";
					break;
				}
				$current->setNext(new FollowerNode);
				$current->getNext()->setData($name,$age);
				$this->follower_num+=1;
				break;
			}
			else{
				$current=$current->getNext();
			}
		}
	}
	
	public function followerData(){
		$current = $this->head;
		
		if($current->getNext()==null){
			echo "Non Follower.<br>";
		}
		
		echo "[Follower]:<br>";
		$current=$current->getNext();
		while($current!=null){
			$current->showData();
			$current=$current->getNext();
		}
		//echo "Finished.<br>";
	}
}

//resister individuals
echo "maximun number of followers: ".M."<br>";
$person_1=new LinkedList_follow;
$person_1->resister("Ko",1);
$person_2=new LinkedList_follow;
$person_2->resister("A",2);
$person_3=new LinkedList_follow;
$person_3->resister("B",3);
$person_4=new LinkedList_follow;
$person_4->resister("C",4);
$person_5=new LinkedList_follow;
$person_5->resister("D",5);

//If the same name and age which one person has are resistered ,the person can't be follower. 
$person_1->follower_resister($person_2);
$person_1->follower_resister($person_2);
//$person_1->follower_resister($person_3);
$person_1->follower_resister($person_3);
$person_1->follower_resister($person_1);
$person_1->follower_resister($person_4);
$person_1->follower_resister($person_5);

$person_1->followerData();

//$person_5->follower_resister($person_2);
//$person_5->follower_resister($person_1);
//$person_5->follower_resister($person_5);
//$person_5->follower_resister($person_1);
//$person_5->followerData();

?>
</body>
</html>
