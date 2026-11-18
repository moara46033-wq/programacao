<?php

class AcessoSistema {

    private static $totalAcessos = 0;

    public function __construct() {
        self::$totalAcessos++;
    }

    public static function getAcessos() {
        return self::$totalAcessos;
    }
}

// Criando 4 objetos
$usuario1 = new AcessoSistema();
$usuario2 = new AcessoSistema();
$usuario3 = new AcessoSistema();
$usuario4 = new AcessoSistema();

// Exibindo o total de acessos
echo "Total de acessos: " . AcessoSistema::getAcessos();

?>