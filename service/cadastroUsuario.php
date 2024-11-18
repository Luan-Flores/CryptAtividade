<?php

require_once '../controller/UsuarioController.php';
require_once '../model/Usuario.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'cadastrar':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuarioController = new usuarioController();
            $usuarioController->cadastrar($_POST['nome'], $_POST['dataNsc'], $_POST['email'] ,$_POST['senha'], $_POST['cep']);
        } else {
            echo "Método de requisição inválido.";
        }
        break;
    
    default:
        include '../view/formUsuario.php';
}