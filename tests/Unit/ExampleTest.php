<?php
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
class ExampleTest extends TestCase
{
    public function testSumar()
    {
        $resultado = (new \App\Http\Controllers\Controller)->sumar(5, 3);
        $this->assertEquals(8, $resultado); 
        $this->assertIsInt($resultado);
        $this->assertGreaterThan(0, $resultado); //mayor
        $this->assertLessThanOrEqual(10, $resultado); //menor
        $this->assertNotEquals(10, $resultado); //no es igual
    }
    public function testRestar()
    {
        $resultado = (new \App\Http\Controllers\Controller)->restar(5, 3);
        $this->assertEquals(2, $resultado);
        $this->assertIsInt($resultado);
        $this->assertNotEquals(0, $resultado);
        $this->assertLessThanOrEqual(5, $resultado);
        $this->assertGreaterThanOrEqual(2, $resultado);
    }
    public function testMultiplicar()
    {
        $resultado = (new \App\Http\Controllers\Controller)->multiplicar(2, 4);
        $this->assertEquals(8, $resultado);
        $this->assertIsInt($resultado);
        $this->assertGreaterThanOrEqual(0, $resultado);
        $this->assertLessThanOrEqual(10, $resultado);
        $this->assertNotEquals(10, $resultado);
    }
    public function testDividir()
    {
        $resultado = (new \App\Http\Controllers\Controller)->dividir(7, 2);
        $this->assertEquals(3.5, $resultado);
        $this->assertIsFloat($resultado);
        $this->assertNotEquals(0, $resultado);
        $this->assertLessThanOrEqual(5, $resultado);
        $this->assertGreaterThanOrEqual(2, $resultado);
    }
    public function testDividirPorCero()
    {
        $resultado = (new \App\Http\Controllers\Controller)->dividir(6, 0);
        $this->assertEquals('Error: División por cero', $resultado);
        $this->assertIsString($resultado);
        $this->assertStringContainsString('Error', $resultado);
        $this->assertNotEmpty($resultado);
        $this->assertNotEquals('División por cero', $resultado);
    }
}
