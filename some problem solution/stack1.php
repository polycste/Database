<?php
   
   class Stack{
	   public $stackArray = array();
	   public $index = -1;
	   
	   public function __construct($arr)
		{
			//echo "My class is ",__class__,"<br>";
			$this->stackArray = $arr;
			 $this->index = count($arr)-1;
		}
		
	   public function push($element)
	   {
		   //array_push($this->stackArray,$element);
		   
		   $this->index++;
		   $this->stackArray[$this->index] = $element;
	   }
	   
	   public function getElement($position)
	   {
		  if($position <= $this->index+1)
		  {
			  $arrayPosition =  $this->index + 1 - $position;
			  return $this->stackArray[$arrayPosition];
		  }
		  echo "Invalid position","<br>";
	   }
	   
	   public function pop()
	   {
		  if(!$this->isEmpty())
		  {  
	          echo "My index is ",$this->index,"<br>";
			  /*$element = $this->stackArray[$this->index];
			  unset($this->stackArray[$this->index]);
			  $this->index--;
			  return $element;*/
			  return $this->stackArray[$this->index--];
		  }	
		  echo "There is no element in the stack array";
	    }
		
		public function isEmpty()
		{
			if($this->index == -1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
		public function first()
		{
			return $this->stackArray[$this->index];
		}
		
		public function last()
		{
			return $this->stackArray[0];
		}
   }
   
   $mys = new Stack(array(2,3,4,5));
   
   echo $mys->pop(),"<br>";
   echo $mys->pop(),"<br>";
   echo $mys->pop(),"<br>";
   echo $mys->pop(),"<br>";
   $mys->pop()
   
 /* $myStack = new Stack;
   
  $myStack->push(2);
  $myStack->push(4);
  $myStack->push(6);
  $myStack->push(8);
   
  echo $myStack->getElement(4),"<br>";
   echo "This first element ",$myStack->first(),"<br>";
   echo "The last element ",$myStack->last(),"<br>";
   
   echo $myStack->pop(),"<br>";
   echo $myStack->pop(),"<br>";
   echo $myStack->pop(),"<br>";
   echo $myStack->pop(),"<br>";
   $myStack->pop();*/
   
?>