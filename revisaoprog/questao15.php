<?php
class Contato {

    private $nome;
    private $telefone;

    public function __construct($nome, $telefone) {
        $this->nome = $nome;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}

class Agenda {

    private $contatos = [];

    public function adicionarContato($nome, $telefone) {

        $contato = new Contato($nome, $telefone);

        $this->contatos[] = $contato;
    }

    public function listar() {

        foreach ($this->contatos as $c) {

            echo $c->getNome() .
                " - " .
                $c->getTelefone() .
                "<br>";
        }
    }
}

$agenda = new Agenda();

$agenda->adicionarContato("Ana", "99999-1111");
$agenda->adicionarContato("Carlos", "99999-2222");
$agenda->adicionarContato("Maria", "99999-3333");

$agenda->listar();
?>