<?php
require_once "Fizzbuzz.php";
use PHPUnit\Framework\TestCase;
class FizzBuzzTest extends TestCase
{
    public function testMultipleDe3Fizz():void{
        //Arrange
        $fizzbuzz = new Fizzbuzz(3);
        //Act
         $result = $fizzbuzz->multipleDe3(12);
        //Assert
        $this->assertSame("Fizz", $result);
    }
    public function testMultipleDe5Buzz():void{
        //Arrange
        $fizzbuzz = new Fizzbuzz(3);
        //Act
        $result = $fizzbuzz->multipleDe5(10);
        //Assert
        $this->assertSame("Buzz", $result);
    }
    public function testMultipleDe3EtDe5Buzz():void{
        //Arrange
        $fizzbuzz = new Fizzbuzz(3);
        //Act
        $result = $fizzbuzz->multipleDe3EtDe5(30);
        //Assert
        $this->assertSame("Fizzbuzz", $result);
    }


}