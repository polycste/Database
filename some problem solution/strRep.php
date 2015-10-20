<?php

	function getMatchIndex($orig,$find)
	{
		$origLen = strlen($orig);
		$findLen = strlen($find);
		for($i=0;$i<$origLen;$i++){
			for($j=0;$j<$findLen;$j++)
			{
				if($i+$j<$origLen)
				{
					if($orig[$i+$j]==$find[$j])
					{
						if($j==$findLen-1)
						{
							return $i;
						}
					}	
				}
				else
				{
					break;
				}
			}
		}
		return -1;
	}

	function replaceString($orig,$find,$rep,$index)
	{
		$origLen = strlen($orig);
		$findLen = strlen($find);
		$finalString = "";
		for($i=0;$i<$index;$i++)
		{
			$finalString = $finalString.$orig[$i];
		}
		$finalString = $finalString.$rep;
		for($i=$index+$findLen;$i<$origLen;$i++)
		{
			$finalString = $finalString.$orig[$i];
		}
		return $finalString;
	}
	
	function myStrRep($orig,$find,$rep)
	{
		$index = getMatchIndex($orig,$find);
		if($index == -1)
		{
				echo "$find not found in $orig";
		}
		else
		{
				echo replaceString($orig,$find,$rep,$index);
		}
	}

	myStrRep("hello","el","lo");

?>