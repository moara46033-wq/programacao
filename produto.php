<?php
class Produto{
    public $nome;
    public $preco;
    public $quantidadeEstoque;

    public function remover(){
    return "Adicionar produto ao estoque";
    }

    public function adicionar(){
        return "Remover produto do estoque";
    }
}
$produto = new Produto();

$produto-> nome = "Creme de cabelo";
$produto-> preco = "70";
$produto-> quantidadeEstoque = "5";

echo "Nome: " . $produto->nome . "<br>";
echo "Preço: " . $produto->preco . " reais <br>";
echo "Quantidade em estoque: " . $produto->quantidadeEstoque . "<br>";
echo $produto->adicionar()."<br>";
echo $produto->remover()."<br>";


?>