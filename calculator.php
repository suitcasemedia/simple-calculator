<?php namespace App; 

class calculator{

	public  $equation  ;



	function __construct($mathString) {



	$value = $this->parseString($mathString);
	$valueInt = $this->convertNumbersToIntegers($value);
	$this->equation = $valueInt;
      
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

				$output  = $this->add( $parts[0] , $parts[2]) ;
				return $output;
			}

			elseif ($parts[1]   == '-'){

				$output = $this->subtract( $parts[0] , $parts[2]) ;
				return $output;
			}

			elseif ($parts[1]   == '/'){

				$subtotal = $this->divide( $parts[0] , $parts[2]);
				return $output;
			}
			elseif ($parts[1]   == '*'){

				$subtotal = $this->multiply( $parts[0] , $parts[2] );
				return $output;
			}




	}
    /**********************************************************************************************************
	Loop through array and perform tasks
	/*********************************************************************************************************/
	
	public function runThroughStack($parts){

		$length = count($parts) ;
		$x = 0;

		if($length == 3){

			return $this->lengthLessThan4($parts) ;

		}	







			/*for($x = 0. $x <= $length; $x++) {


					




				for($x = 0. $x <= 3; $x++) {

					
*/

					/*after first three element of the array */

					/*if ($x+1  == '+'){

					$subtotal = $this->add( $parts[$x] , $parts[$x+1]) ;
					$x = $x + 2;
					}

					elseif ($x+1  == '-'){

					$subtotal = $this->subtract( $parts[$x] , $parts[$x+1]) ;
					$x = $x + 2;
					}

					elseif ($x+1  == '/'){

					$subtotal = $this->divide( $parts[$x] , $parts[$x+1]) ;
					$x = $x + 2;
					}
					elseif ($x+1  == '*'){

					$subtotal = $this->multiply( $parts[$x] , $parts[$x+1]) ;
					$x = $x + 2;
					}
*/




				}

			

		
}
