<?php
require_once '../config/database.php';

class Usuario {
    private $conexao;
    private $table = "usuario";

    public $id;
    public $nome;
    public $dataNsc;
    public $email;
    public $senha;
    public $cep;

    public function __construct($bd)
    {
        $this->conexao = $bd;
    }
    public function cadastrar(){

        $query = "INSERT INTO usuario(nome, dataNsc, email, senha, cep) VALUES ('{$this->nome}', '{$this->dataNsc}', '{$this->email}', '{$this->senha}', '{$this->cep}');";
        return $this->conexao->query($query);
    }
    public function logar(){

        

    }
}