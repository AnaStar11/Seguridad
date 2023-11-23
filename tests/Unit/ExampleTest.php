<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    public function testConcatenar()
    {
        $resultado = (new \App\Http\Controllers\Controller)->concatenar('Hola', 'Mundo');

        $this->assertEquals('HolaMundo', $resultado);
        $this->assertIsString($resultado);
        $this->assertNotEmpty($resultado);
        $this->assertStringContainsString('Mundo', $resultado);
        $this->assertSame(10, strlen($resultado));
    }

    public function testLongitudCadena()
    {
        $resultado = (new \App\Http\Controllers\Controller)->longitudCadena('Laravel');

        $this->assertIsInt($resultado);
        $this->assertGreaterThan(0, $resultado);
        $this->assertEquals(7, $resultado);
        $this->assertIsNotString($resultado);
        $this->assertLessThanOrEqual(10, $resultado);
    }

    public function testArraySuma()
    {
        $resultado = (new \App\Http\Controllers\Controller)->arraySuma([1, 2, 3, 4, 5]);

        $this->assertEquals(15, $resultado);
        $this->assertIsInt($resultado);
        $this->assertGreaterThanOrEqual(10, $resultado);
        $this->assertLessThanOrEqual(20, $resultado);
        $this->assertNotEquals(20, $resultado);
    }

    public function testEsPar()
    {
        $esPar = (new \App\Http\Controllers\Controller)->esPar(10);

        $this->assertTrue($esPar);
        $this->assertIsBool($esPar);
        $this->assertNotFalse($esPar);
        $this->assertFalse((new \App\Http\Controllers\Controller)->esPar(7));
        $this->assertNotTrue((new \App\Http\Controllers\Controller)->esPar(7));
    }

    public function testArrayInvertir()
    {
        $resultado = (new \App\Http\Controllers\Controller)->arrayInvertir([1, 2, 3, 4, 5]);

        $this->assertEquals([5, 4, 3, 2, 1], $resultado);
        $this->assertNotEquals([1, 2, 3, 4, 5], $resultado);
        $this->assertIsArray($resultado);
        $this->assertCount(5, $resultado);
        $this->assertContains(3, $resultado);
    }


}
