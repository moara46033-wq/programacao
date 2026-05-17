<?php

class Usuario {

    private $login;
    private $senha;

    public function setLogin($login) {

        if (strlen($login) >= 4) {
            $this->login = $login;
        } else {
            echo "Login inválido!<br>";
        }
    }

    public function setSenha($senha) {

        if (strlen($senha) >= 8) {
            $this->senha = $senha;
        } else {
            echo "Senha muito curta!<br>";
        }
    }

    public function autenticar($login, $senha) {

        if (
            $this->login == $login &&
            $this->senha == $senha
        ) {

            echo "Login realizado com sucesso!<br>";

        } else {

            echo "Login ou senha incorretos!<br>";
        }
    }
}



$usuario = new Usuario();

$usuario->setLogin("carlos");
$usuario->setSenha("12345678");

$usuario->autenticar("carlos", "12345678");

$usuario->autenticar("carlos", "senhaerrada");

?>