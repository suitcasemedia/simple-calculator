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

	$c = New Calculator;
	$result = $c->add(15, 10);
	$this->assertEquals(25, $result);
	


	}
	/**********************************************************************************************************
	Subtract method test
	/*********************************************************************************************************/
	

	public function testSubstract()
	{
	
	$c = new Calculator;
	$result = $c->subtract(50 , 20);
	$this->assertEquals(30, $result);

	}

	/**********************************************************************************************************
	Multiply method test
	/*********************************************************************************************************/
	

	public function testMultiply()
	{

	$c = new Calculator;
	$result = $c->multiply( 2, 2);
	$this->assertEquals( 4 , $result) ;
	}


	/**********************************************************************************************************
	Divide method test
	/*********************************************************************************************************/
	

	public function testDivide()
		{

		$c = new Calculator;
		$result = $c->divide( 6, 2);
		$this->assertEquals( 3 , $result) ;
		}


}
