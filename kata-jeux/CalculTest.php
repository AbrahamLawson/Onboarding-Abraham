<?php
require_once "Calcul.php";
use App\Entity\Product;
use PHPUnit\Framework\TestCase;
class CalculTest extends TestCase{
  // public function testAdittion():void{
  //   $calcul = new Calcul();
  //   $result = $calcul->addition(2,3);
  //   $this->assertSame(5,$result);
  // }
  // public function testSoustraction():void{
  //   $calcul = new Calcul();
  //   $result = $calcul->soustraction(15,5);
  //   $this->assertSame(10, $result);
  // }
  public function testDivision():void{
    $calcul = new Calcul();
    $result = $calcul->division(6,2);
    $this->assertSame(3, $result);
  }
  public function testDivisionZero():void{
    $calcul = new Calcul();
    $this->expectException(Exception::class);
    $this->expectExceptionMessage("Imposible de diviser un nombre par zero");

    $result = $calcul->division(6,0);
  }
}


