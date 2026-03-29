<?php
class Livro {
    public $titulo;
    public $autor;
    public $numeroPaginas;
    public $anoPublicacao;
   

}

$oladofeiodoamor= new Livro();

$oladofeiodoamor-> titulo = "O lado feio do amor";
$oladofeiodoamor-> autor = "Collen Hover";
$oladofeiodoamor-> numeroPaginas = "200";
$oladofeiodoamor-> anoPublicacao = "2019";

echo "Título:  " . $oladofeiodoamor->titulo . "<br>";
echo "Autor: " . $oladofeiodoamor->autor . "<br>";
echo "Número de páginas: " . $oladofeiodoamor->numeroPaginas . " páginas <br>";
echo "O livro foi publicado em:  " . $oladofeiodoamor->anoPublicacao . " <br>";



?>