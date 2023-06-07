<?php
class CalcularNotas{
    private $valor;

    function __construct($valor)
    {
        $this->valor = $valor;
    }

    function getValor()
    {
        return $this->valor;
    }
}

$nota = 5;

if($nota >= 6) {
    echo "Enhorabuena, estás en Primera División";
} else if(($nota <= 5.9) && ($nota >= 4.5)) {
    echo "Estás en Segunda División";
} else if(($nota <= 4.4) && ($nota >= 3.3)) {
    echo "Estás en Tercera División";
} else if($nota < 3.3) {
    echo "A Junio o Septiembre";
} else {
    echo "Tú no estudias aquí";
}
?>