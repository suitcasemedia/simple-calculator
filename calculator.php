<?php namespace App; 

class calculator{


	public $input_numbers = array() ;



	/**********************************************************************************************************
	Add method 
	/*********************************************************************************************************/
	
	public function add( $string){
	$value = $this->parseString($string);
	$valueInt = $this->convertNumbersToIntegers($value);
	return $valueInt[0]  +  $valueInt[2] ;

	}


	/**********************************************************************************************************
	Subtract method 
	/*********************************************************************************************************/
	

	public function subtract( $input)
	{
	$value = $this->parseString($input);
	$valueInt = $this->convertNumbersToIntegers($value);
	return $valueInt[0]  -  $valueInt[2] ;
	}


	/**********************************************************************************************************
	Multiply method 
	/*********************************************************************************************************/
	

	public function multiply( $string)
	{
	$value = $this->parseString($string);
	$valueInt = $this->convertNumbersToIntegers($value);
	return $valueInt[0]  *  $valueInt[2] ;
	}


	/**********************************************************************************************************
	Divide method 
	/*********************************************************************************************************/
	

	public function divide( $string )
	{
	$value = $this->parseString($string);
	$valueInt = $this->convertNumbersToIntegers($value);
	return $valueInt[0]  /  $valueInt[2] ;
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
	Extract operator
	/*********************************************************************************************************/
	

}
