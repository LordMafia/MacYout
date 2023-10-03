<?php
include('conexao.php');

if(isset($_POST['nome']) || isset($_POST['senha'])) {

    if(strlen($_POST['nome']) == 0) {
        echo "<p class=\"error\">Preencha seu Nome de Usuário</p>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<p class=\"error\">Preencha sua senha</p>";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "<p class=\"error\">Falha ao logar! Nome de Usuário ou Senha Incorretos</p>";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <link rel="stylesheet prefetch" href="font-awesome.min.css">
    <link rel="stylesheet" href="framework.css">

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilo.css">
    <script src="./relogio/script.js"></script>
    <script src="am.js"></script>
    <script src="java.js"></script>
    <title>Login</title>
</head>
<body>
<div class="spacer top-layer"></div>
<div class="wrapper">
        <div class="display">
            <div id="time">time</div>
<div class="spacer top-layer"></div>
</div>
</div>
<div id="login">
<form class="card" action="" method="POST">
<div class="card-header">
    

<h2>Login</h2>

</div>
    
        <div class="card-content">

                    <div class="card-content-area">

                        <label for="usuario">Usuário</label>
                        <input type="text" id="usuario" name="nome" autocomplete="off">

                    </div>

                    <div class="card-content-area">

                        <label for="password">Senha</label>
                        <input type="password" id="password" name="senha" autocomplete="off">

                    </div>


                <div class="buttonn">
                <input class="button" type="submit" id="submit-btn" name="submit" value="Login">
                <input class="button" type="submit" id="submit-btn" name="submit" value="Registro">

                    <a href="#" class="recuperar_senha">Esqueceu a senha?</a>
</div>
<a id="version">MacServer v0.0.2</a>
</div>
    </form>
</div>
<div class="card-google">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6 10.2273C19.6 9.51819 19.5364 8.83637 19.4182 8.18182H10V12.05H15.3818C15.15 13.3 14.4455 14.3591 13.3864 15.0682V17.5773H16.6182C18.5091 15.8364 19.6 13.2727 19.6 10.2273Z" fill="#4285F4"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0002 20C12.7002 20 14.9638 19.1045 16.6184 17.5772L13.3866 15.0681C12.4911 15.6681 11.3457 16.0227 10.0002 16.0227C7.39566 16.0227 5.19111 14.2636 4.40475 11.9H1.06384V14.4909C2.7093 17.7591 6.09112 20 10.0002 20Z" fill="#34A853"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M4.40455 11.8999C4.20455 11.2999 4.09091 10.659 4.09091 9.99994C4.09091 9.34085 4.20455 8.69994 4.40455 8.09994V5.50903H1.06364C0.386364 6.85903 0 8.38631 0 9.99994C0 11.6136 0.386364 13.1409 1.06364 14.4909L4.40455 11.8999Z" fill="#FBBC05"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.0002 3.97727C11.4684 3.97727 12.7866 4.48182 13.8229 5.47273L16.6911 2.60455C14.9593 0.990909 12.6957 0 10.0002 0C6.09112 0 2.7093 2.24091 1.06384 5.50909L4.40475 8.1C5.19111 5.73636 7.39566 3.97727 10.0002 3.97727Z" fill="#EA4335"></path></svg><a class="texto-google" href="www.google.com">  Continuar com o Google</a></div></div>
  </div>
  <script>
        function playAudio() {
            let x = document.getElementById("myAudio");
            x.play();
        }
        function pauseAudio() {
            let x = document.getElementById("myAudio");
            x.pause();
        }       
    </script>
</body>
</html>