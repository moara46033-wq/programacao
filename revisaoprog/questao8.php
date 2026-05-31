<?php
class Livro {

    private $titulo;
    private $autor;
    private $paginas;

    public function __construct($titulo, $autor, $paginas) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getPaginas() {
        return $this->paginas;
    }

    public function setPaginas($paginas) {
        $this->paginas = $paginas;
    }

    public function exibir() {
        echo "Título: {$this->titulo}<br>";
        echo "Autor: {$this->autor}<br>";
        echo "Páginas: {$this->paginas}<br><br>";
    }
}

$l1 = new Livro("Dom Casmurro", "Machado de Assis", 256);
$l2 = new Livro("O Pequeno Príncipe", "Saint-Exupéry", 96);

$l1->exibir();
$l2->exibir();
?>