<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
        if(!isset($_SESSION['login'])){
            if(isset($_POST['acao'])){
                $login = 'gustavo';
                $senha = '12345';

                $loginForm = $_POST['login'];
                $senhaForm = $_POST['senha'];

                if($login == $loginForm && $senha == $senhaForm){
                    //logado com sucesso
                    $_SESSION['login'] = $login;
                    header('location: index.php');
                }else{
                    //Algum erro ocorreu
                    //echo 'Dados inválidos';
                }
            }

            include('login.php');
        }else{
            if(isset($_GET['logout'])){
                unset($_SESSION['login']);
                session_destroy();
                header('location: index.php');
            }
            include('home.php');
        }
    ?>
</body>
</html>