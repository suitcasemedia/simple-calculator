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
	$result = $c->answer;
	$this->assertEquals(25, $result);

	


	}
	/**********************************************************************************************************
	Subtract method test
	/*********************************************************************************************************/
	

	public function testSubstract()
	{
	$string = "50-20";
	$c = new Calculator($string);
	$result = $c->answer;
	$this->assertEquals(30, $result);

	}

	/**********************************************************************************************************
	Multiply method test
	/*********************************************************************************************************/
	

	public function testMultiply()
	{
	$string = "2*2" ;
	$c = new Calculator($string );
	$result = $c->answer;
	$this->assertEquals( 4 , $result) ;
	}


	/**********************************************************************************************************
	Divide method test
	/*********************************************************************************************************/
	

	public function testDivide()
		{
		$string = "6/2" ;
		$c = new Calculator($string);
		$result = $c->answer;
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

	/**********************************************************************************************************
	test function to change numeric characters to integers
	/*********************************************************************************************************/

	public function testConvertNumbersToIntegers()
	{

	$int = 6 ;
	$input =  "6+6";
	$input2 =  array(0 => "6", 1=>"+", 2=>"6" );
	$c = new Calculator($input);
	$result = $c->convertNumbersToIntegers($input2);
	$this->assertEquals($int , $result[0]) ;
	}

	/**********************************************************************************************************
	test function to  loop through the new array and process the mathematic equation
	/*********************************************************************************************************/

	public function testRunThroughStack()
	{
	$arrayName = array( 0 => 2, 1 => '+' , 2 =>  5 , 3 =>  '+', 4 => 2);
	
	$c = New Calculator("2+5+2");
	$result = $c->RunThroughStack($arrayName) ;
	$this->assertEquals(9, $result);
	}


	/**********************************************************************************************************
	Test equations of only one operator eg 1+2  or 5+5  (NOT 1+1+2)
	/*********************************************************************************************************/
	public function testLengthLessThan4()
	{
	$arrayName = array( 0 => '2', 1 => '+' , 2 =>  '5' );
	$c = New Calculator("2+5");
	$result = $c->lengthLessThan4( $arrayName);
	$this->assertEquals(7, $result);
	}


	/**********************************************************************************************************
	Test final input and output 1
	/*********************************************************************************************************/

	public function testCalulator()

	{
	$string = "2+5"; // calulator input
	$c = New Calculator($string);
	$d = $c->answer;
	$answer =  7; // calulator output
	$this->assertEquals( $answer, $d);


	}


	/**********************************************************************************************************
	Test final input and output 2
	/*********************************************************************************************************/

	public function testCalulator1()

	{
	$string = "2+3+1"; // calulator input
	$c = New Calculator($string);
	$d = $c->answer;
	$answer =  6; // calulator output
	$this->assertEquals( $answer, $d);


	}


	/**********************************************************************************************************
	Test final input and output 3
	/*********************************************************************************************************/

	public function testCalulator2()

	{
	$string = "2+3+1+4"; // calulator input
	$c = New Calculator($string);
	$d = $c->answer;
	$answer =  10; // calulator output
	$this->assertEquals( $answer, $d);


	}


	/**********************************************************************************************************
	Test final input and output 4
	/*********************************************************************************************************/

	public function testCalulator3()

	{
	$string = "2*2*2";  // calulator input
	$c = New Calculator($string);
	$d = $c->answer;
	$answer =  8; // calulator output
	$this->assertEquals( $answer, $d);


	}


	/**********************************************************************************************************
	Test final input and output 5
	/*********************************************************************************************************/
	public function testCalulator4()

	{


	$string = "2*2*2-1"; // calulator input
	$c = New Calculator($string);
	$d = $c->answer;
	$answer =  7;  // calulator output
	$this->assertEquals( $answer, $d);


	}


	/**********************************************************************************************************
	Test final input and output 6
	/*********************************************************************************************************/

	public function testCalulator5()

	{
	$string = "10/2"; // calulator intput
	$c = New Calculator($string);
	$d = $c->answer;
	$answer =  5; // calulator output
	$this->assertEquals( $answer, $d);


	}

}
