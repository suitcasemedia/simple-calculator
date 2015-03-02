<?php


require 'calculator.php';
use App\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function testAdd()
	{

	$c = New Calculator;
	$result = $c->add(15, 10);
	$this->assertEquals(25, $result);
	


	}

	public function testSubstract()
	{
	
	$c = new Calculator;
	$result = $c->subtract(50 , 20);
	$this->assertEquals(30, $result);

	}

	public function testMultiply()
	{

	$c = new Calculator;
	$result = $c->multiply( 2, 2);
	$this->assertEquals( 4 , $result) ;
	}

	public function testDivide()
		{

		$c = new Calculator;
		$result = $c->multiply( 6, 2);
		$this->assertEquals( 3 , $result) ;
		}


}
