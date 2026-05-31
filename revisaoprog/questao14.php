<?php
class Estoque {

    private $produtos = [];

    public function adicionarProduto($nome, $quantidade) {

        $this->produtos[] = [
            "nome" => $nome,
            "qtd" => $quantidade
        ];
    }

    public function listarProdutos() {

        foreach ($this->produtos as $p) {

            echo $p["nome"] .
                " - Quantidade: " .
                $p["qtd"] . "<br>";
        }
    }

    public function totalItens() {

        $total = 0;

        foreach ($this->produtos as $p) {
            $total += $p["qtd"];
        }

        return $total;
    }
}

$estoque = new Estoque();

$estoque->adicionarProduto("Mouse", 10);
$estoque->adicionarProduto("Teclado", 5);
$estoque->adicionarProduto("Monitor", 2);

$estoque->listarProdutos();

echo "Total de itens: " .
    $estoque->totalItens() .
    "<br><br>";
?>