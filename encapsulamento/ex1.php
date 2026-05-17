<?php

class Produto {

    private $nome;
    private $preco;
    private $quantidade;

    public function setNome($nome) {
        $nome = trim($nome);

        if (!empty($nome)) {
            $this->nome = $nome;
        } else {
            echo "Nome inválido!<br>";
        }
    }

    public function setPreco($preco) {

        if (is_numeric($preco) && $preco > 0) {
            $this->preco = $preco;
        } else {
            echo "Preço inválido!<br>";
        }
    }

   
    public function setQuantidade($quantidade) {

        if (is_numeric($quantidade) && $quantidade >= 0) {
            $this->quantidade = $quantidade;
        } else {
            echo "Quantidade inválida!<br>";
        }
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function mostrarProduto() {

        echo "<h3>Dados do Produto</h3>";

        echo "Nome: " . $this->getNome() . "<br>";

        echo "Preço: R$ " .
        number_format($this->getPreco(), 2, ",", ".") . "<br>";

        echo "Quantidade em estoque: " .
        $this->getQuantidade() . "<br>";
    }
}



$produto = new Produto();

$produto->setNome("Notebook");
$produto->setPreco(3500.90);
$produto->setQuantidade(10);

$produto->mostrarProduto();

?>