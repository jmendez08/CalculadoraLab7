<?php
    require_once (__DIR__.'/Calculadora.php');
    use \PHPUnit\Framework\TestCase;

    class CalculadoraTest extends TestCase
    {
        public function testSumar()
        {
            $calculadora= new Calculadora();
            $resultado_calculadora=$calculadora->sumar(3,3);
            $this->assertEquals(6,$resultado_calculadora);
//            $this->assertEquals(5,$resultado_calculadora);

        }

        public function testRestar()
        {
            $calculadora= new Calculadora();
            $resultado_calculadora=$calculadora->resstar(3,3);
            $this->assertEquals(0,$resultado_calculadora);
//            $this->assertEquals(5,$resultado_calculadora);

        }

        public function testMultuplicar()
        {
            $calculadora= new Calculadora();
            $resultado_calculadora=$calculadora->multiplicar(3,3);
            $this->assertEquals(9,$resultado_calculadora);
//            $this->assertEquals(5,$resultado_calculadora);

        }

        public function testDividir()
        {
            $calculadora= new Calculadora();
            $resultado_calculadora=$calculadora->dividir(1,3);
//            $this->assertEqualsWithDelta(0.33,$resultado_calculadora,0.004);
            $this->assertEqualsWithDelta(0.33,$resultado_calculadora,0.003);

        }

        public function testGeneraArreglo()
        {
            $calculadora= new Calculadora();
//            $this->assertContains(5,$calculadora->generarArreglo());
//            $this->assertCount(5,$calculadora->generarArreglo());
            $this->assertEmpty($calculadora->generarArreglo());
        }
    }
    