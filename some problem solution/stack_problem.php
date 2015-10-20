<?php
	class Stack{
		private $stackArray=array();
		private $index=-1;
		
		 public function push($element)
		 {
			$this->index++;
			array_push($this->stackArray,$element);
		
		}	
		
		public function pop()
		{
		
			if(!$this-> isEmpty())
			{
				return $this->stackArray[$this->index--];
			}
			echo "empty stack";
		
		}
		
		public function isEmpty()
		{
			if($this->index==-1)
			{
				return true;
			}
			else
				return false;
		}		
      
    } 
			
		
		$myStack=new Stack;
		
		$myStack->push(1);
		$myStack->push(4);
		$myStack->push(5);
		echo $myStack->pop(),"<br>";
		$myStack->push(5);
		echo $myStack->pop(),"<br>";
		$myStack->pop();

?>