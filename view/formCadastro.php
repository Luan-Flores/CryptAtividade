<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Usuario</title>
    <link rel="stylesheet" href="../view/css/cadastro.css">
</head>
<body>
    <section id=sec-pai>
    <div id="cad-h2">
        
        <h2>Cadastrar Usuario</h2>
        <br>
        </div>
        <div id="form-box">
        <form id="cad-form" action="../service/cadastrar.php?acao=cadastrar" method="post">
            <div id="entre">
            <label for="nome">Nome</label>
            <input class="btn-input" type="text" name="nome" id="nome" required>
            <br><br>
            
            <label for="dataNasc">Data de Nascimento</label>
            <input class="btn-input" type="date" name="dataNasc" id="dataNasc" required>
            <br><br>

            <label for="email">Email</label>
            <input class="btn-input" type="email" name="email" id="email" required>
            <br><br>
            
            <label for="senha">Senha</label>
            <input class="btn-input" type="password" name="senha" id="senha" required>
            <br><br>
            
            <div id="separar">
            <label for="endereco">Endereço</label>
            <input class="btn-input" type="text" name="endereco" id="endereco" required>
            </div>
            </div>
            <br><br>
            <input id="final-btn" type="submit" value="Cadastrar Usuario">
        </form>
        </div>
    </section>
</body>
