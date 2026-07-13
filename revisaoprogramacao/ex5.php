<?php

abstract class Pagamento {

    public function __construct(
        protected float $valor,
        protected string $descricao
    ){}

    abstract public function processar(): string;

    public function recibo(): string{
        return "Recibo: {$this->descricao} - R$ {$this->valor}";
    }
}

class PagamentoCartao extends Pagamento{

    public function __construct(
        float $valor,
        string $descricao,
        private int $parcelas
    ){
        parent::__construct($valor,$descricao);
    }

    public function processar(): string{
        return "Cartão processado em {$this->parcelas}x: R$ {$this->valor}";
    }
}

class PagamentoPix extends Pagamento{

    public function processar(): string{
        return "PIX processado: R$ {$this->valor}";
    }
}

$p = new PagamentoPix(150.0,"Compra online");

echo $p->processar() . PHP_EOL;
echo $p->recibo();