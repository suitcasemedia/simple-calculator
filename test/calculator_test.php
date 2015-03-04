<?php


require 'calculator.php';
use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{


	/**********************************************************************************************************
	Add method
	/*********************************************************************************************************/
	public function testAdd()
	{
	$string = "15+10";
	$c = New Calculator($string);
	$result = $c->add();
	$this->assertEquals(25, $result);

	


	}
	/**********************************************************************************************************
	Subtract method test
	/*********************************************************************************************************/
	

	public function testSubstract()
	{
	$string = "50-20";
	$c = new Calculator($string);
	$result = $c->subtract();
	$this->assertEquals(30, $result);

	}

	/**********************************************************************************************************
	Multiply method test
	/*********************************************************************************************************/
	

	public function testMultiply()
	{
	$string = "2*2" ;
	$c = new Calculator($string );
	$result = $c->multiply();
	$this->assertEquals( 4 , $result) ;
	}


	/**********************************************************************************************************
	Divide method test
	/*********************************************************************************************************/
	

	public function testDivide()
		{
		$string = "6/2" ;
		$c = new Calculator($string);
		$result = $c->divide();
		$this->assertEquals( 3 , $result) ;
		}


	/**********************************************************************************************************
	Parse string test
	/*********************************************************************************************************/
	
	public function testParseString()
	{

	$string = "1+1" ;
	$token = array('0' => '1' ,'1' => '+','2' => '1' ); ;
	$c = new Calculator($string);
	$result = $c->parseString($string);
	$this->assertEquals($token , $result) ;
	}

	public function testConvertNumbersToIntegers()
	{

	$int = 6 ;
	$input =  "6+6";
	$input2 =  array(0 => "6", 1=>"+", 2=>"6" );
	$c = new Calculator($input);
	$result = $c->convertNumbersToIntegers($input2);
	$this->assertEquals($int , $result[0]) ;
	}

	public function testRunThroughStack()
	{
	$arrayName = array( 0 => 2, 1 => '+' , 2 =>  5 );
	
	$c = New Calculator("2+5");
	$result = $c->RunThroughStack($arrayName) ;
	$this->assertEquals(7, $result);
	}

	public function testLengthLessThan4()
	{
	$arrayName = array( 0 => '2', 1 => '+' , 2 =>  '5' );
	$c = New Calculator("2+5");
	$result = $c->lengthLessThan4( $arrayName);
	$this->assertEquals(7, $result);
	}

}
