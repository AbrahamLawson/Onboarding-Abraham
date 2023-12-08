<?php
require_once "Annee.php";
use PHPUnit\Framework\TestCase;
class AnneeTest extends TestCase{
    public function testAnneeIsBisextil(){
        //Arrange
        $annee = new Annee(2012);
        //Act
         $isBisextil = $annee->isBisextil();
        //Assert
        $this->assertSame(true, $isBisextil);
    }
    public function testAnneeIsNotBisextil(){
        //Arrange
        $annee = new Annee(2015);
        //Act
         $isBisextil = $annee->isBisextil();
        //Assert
        $this->assertSame(false, $isBisextil);
    }
    public function testIsAnneBisextilDivisibleParQuatre(){
        //Arrange
        $annee = new Annee(2014);
        //Act
         $isBisextil = $annee->isBisextil();
        //Assert
        $this->assertSame(false, $isBisextil);
    }
    public function testIsAnneBisextilPasDivisibleParQuatre(){
        //Arrange
        $annee = new Annee(2010);
        //Act
         $isBisextil = $annee->isBisextil();
        //Assert
        $this->assertSame(false, $isBisextil);
    }
    public function testAnneeIsNotBisextil2(){
        //Arrange
        $annee = new Annee(2100);
        //Act
         $isBisextil = $annee->isBisextil();
        //Assert
        $this->assertSame(false, $isBisextil);
    }
    public function testAnneeIsNotBisextil3(){
        //Arrange
        $annee = new Annee(2000);
        //Act
         $isBisextil = $annee->isBisextil();
        //Assert
        $this->assertSame(true, $isBisextil);
    }
}