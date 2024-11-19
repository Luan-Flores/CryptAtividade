<?php

require_once '../controller/usuarioController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'cadastrar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuarioController = new usuarioController();
            $usuarioController->cadastrar($_POST['nome'], $_POST['dataNasc'], $_POST['email'], $_POST['senha'], $_POST['endereco']);
        } else {
            echo "Método de requisição inválido.";
        }
        break;
    
    default:
        include './view/formCadastro.php';
}