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
	Add method 
	/*********************************************************************************************************/
	
	public function add(){
	
	$sum  = $this->equation[0]  +  $this->equation[2] ;

	return $sum;
	}


	/**********************************************************************************************************
	Subtract method 
	/*********************************************************************************************************/
	

	public function subtract( )
	{
	
	return $this->equation[0]  -  $this->equation[2] ;
	}


	/**********************************************************************************************************
	Multiply method 
	/*********************************************************************************************************/
	

	public function multiply()
	{
	
	
	return $this->equation[0]  *  $this->equation[2] ;

	}


	/**********************************************************************************************************
	Divide method 
	*********************************************************************************************************/
	

	public function divide()
	{
	return $this->equation[0]  / $this->equation[2] ;
	}

	/**********************************************************************************************************
	Parse string
	/*********************************************************************************************************/
	public function parseString($string) {
        $parts = preg_split('((\d+|\+|-|\(|\)|\*|/)|\s+)', $string, null, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        $parts = array_map('trim', $parts);
        $intParts =$this->convertNumbersToIntegers($parts) ;
       // $this->extractOperator($parts);


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
	Length less then 4 e.g 1+1 
	/*********************************************************************************************************/
	public function lengthLessThan4($parts){
		
			if ($parts[1]  == '+'){

				$output  = $this->add() ;
				return $output;
			}

			elseif ($parts[1]   == '-'){

				$output = $this->subtract() ;
				return $output;
			}

			elseif ($parts[1]   == '/'){

				$subtotal = $this->divide();
				return $subtotal;
			}
			elseif ($parts[1]   == '*'){

				$subtotal = $this->multiply( );
				return $subtotal;
			}




	}
    /**********************************************************************************************************
	Loop through array and perform tasks
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
				// print_r($parts[$x+1]);
				/*after first three element of the array */

				if($parts[$x+1]  == '+'){
					// print_r($subtotal);
					$subtotal =  $subtotal +  $parts[$x+2] ;

					// print_r($subtotal);

					
				}

				elseif ($parts[$x+1]  == '-'){

					$subtotal =  $subtotal -  $parts[$x+2] ; ;
					
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
