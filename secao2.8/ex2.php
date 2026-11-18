<?php

class Conversor {
    public static function dolarParaReal($valor) {
        return $valor * 5.00;
    }
}

// Opção A
$v1 = new Conversor();
echo $v1->dolarParaReal(10);

echo "<br>";

// Opção B
echo Conversor::dolarParaReal(10);

?>