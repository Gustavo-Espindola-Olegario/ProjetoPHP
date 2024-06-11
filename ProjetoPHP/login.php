<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo-login.css">
</head>
<body>
    <main> 
        <h1 class="titulo">Login</h1>
        <p class="subtitulo">Complete as informações</p>
        <form method="post">
            <div class="input-field">
                <input type="text" name="login" id="nome" placeholder="Nome Completo" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>            <div class="underline"></div>
            </div>
            <input type="submit" name="acao" value="Enviar">
        </form>
        <div class="footer">
            <span>Se conecte com as redes sociais</span>
            <div class="social-fields">
                <div class="social-field facebook">
                    <a href="#"><i class="fab fa-facebook"></i>login com o Facebook</a>
                </div>
                <div class="social-field twitter">
                <a href="#"><i class="fab fa-twitter-square"></i></i>login com o Twitter</a>
            </div>
            </div>
        </div>
    </main>
</body>
</html>