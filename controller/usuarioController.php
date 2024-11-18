<?php

require_once '../config/database.php';
require_once '../model/Usuario.php';

class usuarioController {
    public function cadastrar($nome, $dataNsc, $email, $senha, $cep) {
        $conexao = new Banco();
        $bd = $conexao->conectar();

        $usuario = new Usuario($bd);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = password_hash($senha, PASSWORD_DEFAULT); // Hash da senha
        $usuario->dataNsc = $dataNsc;
        $usuario->cep = $cep;

        if ($usuario->cadastrar()) {
            $bd->close();
            header('Location: ../view/formUsuario.php');
            exit; 
        } else {
            echo "Erro ao cadastrar usuario";
        } 
    }
}