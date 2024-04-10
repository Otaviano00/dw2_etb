<?php 
    $conectar = mysqli_connect("localhost", "root", "", "loja355828");

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $sql_consulta = "SELECT login_fun, senha_fun FROM funcionarios
                    WHERE 
                        login_fun = '$login'
                    AND
                        senha_fun = '$senha'
                    AND
                        status_fun = 'Ativo'";

    $resultado_consulta = mysqli_query($conectar, $sql_consulta);

    $linhas = mysqli_num_rows($resultado_consulta);

    if ($linhas == 1) {
        echo "<script>
                location.href = ('administrador.php')
            </script>";
    } 
    else {
        echo "<script>
                alert ('Login ou Senha incorretos! Digite Novamente!')
            </script>";
        echo "<script> location.href = ('index.php') </script>";
    }

?>

<!-- 
    Passo a passo
    1° Conectar no B.D
    2° Receber o login e senha
    3° Verificar no B.D se "bate" o login e senha e o status "ativo"
    se "bater"
        * vai para administracao.php
    se nao
        * msg de erro
        * volta para index.php

-->