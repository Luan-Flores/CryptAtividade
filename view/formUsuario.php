
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="../service/cadastroUsuario.php?acao=cadastrar" method="post">
        
    <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="nome">Data de Nascimento:</label>
        <input type="date" id="dataNsc" name="dataNsc" required><br><br>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <label for="senha">Cep:</label>
        <input type="text" id="cep" name="cep" required><br><br>

        <input type="submit" value="Cadastrar Usuario">
    </form>
</body>
</html>
