<?php
require_once "../model/usuario.php";
require_once "../config/database.php";

class usuarioController{
    public $usuario;
    public $conexao;

    public function conectarBd() {
        $this->conexao = (new banco())->conectar();
        return $this->conexao;
    }

    public function cadastrar($nome, $dataNasc, $email, $senha, $endereco) {
        $usuario = new Usuario($this->conectarBd());
        $query = $usuario->cadastrar();

        $stmt = $this->conexao->prepare($query);
        $senhahash = password_hash($senha, PASSWORD_BCRYPT);
        $stmt->bind_param("sssss", $nome, $dataNasc, $email, $senhahash, $endereco);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Redireciona para login.php após o cadastro com sucesso
            header("Location: ../index.php"); 
            exit(); // Certifique-se de chamar exit() para garantir que o código posterior não seja executado
        } else {
            // Em caso de falha, redirecionar para uma página de erro ou mensagem
            echo "erro"; 
            exit();
        }

        $this->conexao->close();
    }
}