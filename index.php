
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./view/css/login.css">
</head>
<body>
    <section id="login-box">
    <div id="login-h2">
        
    <h2>Login</h2>
    <br>
    </div>
    <div id="form-box">
    <form id="login-form" action="/cryptatividade/service/login.php?acao=login" method="post">
        <div id="entre">
        <label class="label-cl" for="email">Email</label>
        <input class="btn-input" type="text" name="email" id="email">
        <br><br>

        <label class="label-cl" for="senha">Senha</label>
        <input class="btn-input" type="password" name="senha" id="senha">
        <br><br>
        </div>
        <div id="final-btn">
        <input id="btn-login" type="submit" value="Fazer login">
        </div>
        <p>Não possui cadastro?</p>
        <ul id="clique-btn"> 
            <li><a href="/cryptatividade/view/formUsuario.php">Clique Aqui!</a></li>
        </ul>
    </form>
    </div>
    </section>
</body>