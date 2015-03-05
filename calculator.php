<?php namespace App; 

class calculator{

	public  $equation  ;
	public $answer ;

function __construct($mathString) {

		$valuesArray = $this->parseString($mathString);
		$this->equation  = $this->convertNumbersToIntegers($valuesArray);
		$this->answer = ($this->runThroughStack($this->equation));
	}

	/**********************************************************************************************************
	Parse string
	/*********************************************************************************************************/
	public function parseString($string) {
		$parts = preg_split('((\d+|\+|-|\(|\)|\*|/)|\s+)', $string, null, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
		$parts = array_map('trim', $parts);
		$intParts =$this->convertNumbersToIntegers($parts) ;
       	return $intParts;
   }


    /**********************************************************************************************************
	Turn numbers into integers
	/*********************************************************************************************************/
	public function convertNumbersToIntegers($parts){
			foreach ($parts as $value) {
			if(ctype_digit($value))

				intval($value);
		}
		return $parts;
		}

	/**********************************************************************************************************
	Do calcuation for equeations Length less then 4 e.g 1+1  or for first 2 parts of a long equations
	/*********************************************************************************************************/
	public function lengthLessThan4($parts){
		if ($parts[1]  == '+'){
			$output  = $parts[0] + $parts[2] ;
			return $output;
		}
		elseif ($parts[1]   == '-'){

			$output = $parts[0]  - $parts[2] ;
			return $output;
		}
		elseif ($parts[1]   == '/'){

			$subtotal = $parts[0] / $parts[2] ;
			return $subtotal;
		}
		elseif ($parts[1]   == '*'){

			$subtotal = $parts[0] * $parts[2] ;
			return $subtotal;
		}
	}
    /**********************************************************************************************************
	Loop through array  and perfom mathematical operations - 
	/*********************************************************************************************************/
	
	public function runThroughStack($parts){

		$length = count($parts) -1  ;
		if($length == 2 ){

			return $this->lengthLessThan4($parts) ;

		}	
		elseif ($length > 2) {
			$sliced_array = array_slice($parts, 0, 3) ;
			$subtotal = $this->lengthLessThan4($sliced_array) ;

			for($x = 2 ; $x < ($length - 1 ) ;  $x+=2) {
				if($parts[$x+1]  == '+'){
					$subtotal =  $subtotal +  $parts[$x+2] ;
				}
				elseif ($parts[$x+1]  == '-'){
					$subtotal =  $subtotal -  $parts[$x+2] ; 
				}
				elseif ($parts[$x+1]  == '/'){
					$subtotal =  $subtotal  / $parts[$x+2] ;
				}
				elseif ($parts[$x+1]  == '*'){
					$subtotal = $subtotal *  $parts[$x+2] ;
				}
			}
			$total = $subtotal;

			return $total;
	}
	}
}