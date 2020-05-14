<!DOCTYPE html>
<html>
<body>
<?php
print("<h2>data-structure</h2>");
print("<h2>Tree</h2>");
print("<h2>Exercise</h2><br>");

/**
* A node of Binary Tree (BT)
*/
class Node {
    /** @var int */
    private $data;

    /** @var Node left subtree */
    private $left;

    /** @var Node right subtree */
    private $right;

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
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
    * get left
    * @return Node
    */
    public function getLeft()
    {
        return $this->left;
    }

    /**
    * set left
    * @param Node $left
    */
    public function setLeft($left)
    {
        $this->left = $left;
    }

    /**
    * get right
    * @return Node
    */
    public function getRight()
    {
        return $this->right;
    }

    /**
    * set right
    * @param Node $right
    */
    public function setRight($right)
    {
        $this->right = $right;
    }
}

/**
* Binary Tree Class
*/
class BT {
    /** @var Node */ 
    private $root;

    public function __construct($root = null)
    {
        $this->root = $root;
    }

    /**
    * get root
    * @return Node
    */
    public function getRoot()
    {
        return $this->root;
    }

    /**
    * set root
    * @param Node $root
    */
    public function setRoot($root)
    {
        $this->root = $root;
    }

}

function number_of_node($node){
	//‘S’Tõ
	if($node==null){
		return;
	}
	number_of_node($node->getLeft());
	print($node->getData()." ");
	number_of_node($node->getRight());
	
}

// three leaves
$left1 = new Node(4);
$left2 = new Node(9);
$left3 = new Node(15);
// parent nodes
$parent1 = new Node(5, $left1); //its child is 5 (left child)
$parent2 = new Node(7, null, $left2); //its child is 9 (right child)
$parent3 = new Node(10, $parent2, $left3); //its children are 7(left) and 15 (right)
//root
$root = new Node(6, $parent1, $parent3); //root node
//tree
$bt = new BT($root);

number_of_node($root);

?>
</body>
</html>
