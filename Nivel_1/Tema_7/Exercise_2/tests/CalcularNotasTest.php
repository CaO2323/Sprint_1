<?php
include "src/CalcularNota.php";
use PHPUnit\Framework\TestCase;

class CalcularNotasTest extends TestCase
{
    public function testConstructor()
    {
        $nota = new CalcularNotas(60);
        $this->assertEquals($nota->getValor(), 60);

        $nota = new CalcularNotas(59);
        $this->assertEquals($nota->getValor(), 59);

        $nota = new CalcularNotas(45);
        $this->assertEquals($nota->getValor(), 45);

        $nota = new CalcularNotas(33);
        $this->assertEquals($nota->getValor(), 33);
    }
}
?>