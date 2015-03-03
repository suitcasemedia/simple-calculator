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
	$c = New Calculator;
	$result = $c->add($string);
	$this->assertEquals(25, $result);
	


	}
	/**********************************************************************************************************
	Subtract method test
	/*********************************************************************************************************/
	

	public function testSubstract()
	{
	$string = "50-20";
	$c = new Calculator;
	$result = $c->subtract($string);
	$this->assertEquals(30, $result);

	}

	/**********************************************************************************************************
	Multiply method test
	/*********************************************************************************************************/
	

	public function testMultiply()
	{
	$string = "2*2" ;
	$c = new Calculator;
	$result = $c->multiply( $string);
	$this->assertEquals( 4 , $result) ;
	}


	/**********************************************************************************************************
	Divide method test
	/*********************************************************************************************************/
	

	public function testDivide()
		{
		$string = "6/2" ;
		$c = new Calculator;
		$result = $c->divide($string);
		$this->assertEquals( 3 , $result) ;
		}


	/**********************************************************************************************************
	Parse string test
	/*********************************************************************************************************/
	
	public function testParseString()
	{

	$token = array(0 => 1, 1 => "+" , 2 => 1) ;
	$c = new Calculator;
	$result = $c->parseString('1+1');
	$this->assertEquals($token , $result) ;
	}

	public function testConvertNumbersToIntegers()
	{

	$int = 6 ;
	$input =  array('0' => '6','1' => '+','2' => '6', );
	$c = new Calculator;
	$result = $c->convertNumbersToIntegers($input);
	$this->assertEquals($int , $result[0]) ;
	}

}
