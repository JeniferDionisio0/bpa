<?php
 session_start();

    //conexao bd
    include_once('../connection/conexao.php');

    $email = mysqli_real_escape_string($conn, $_POST["email"]); 
    $senha = mysqli_real_escape_string($conn, $_POST["senha"]);

    // query para o banco
    $query = "SELECT * FROM usuario WHERE email = '$email' and senha = $senha";

    $result = mysqli_query($conn, $query);

    // checagem do numero de linhas retornadas
    if(mysqli_num_rows($result) > 0){
    // Leitura da resposta da Execução
    $retornoDoSelect = mysqli_fetch_array($result);
    // print_r($retornoDoSelect);
    echo("id = ".$retornoDoSelect['id']);
    echo("<br>email = ".$retornoDoSelect['email']);
    echo("<br>senha = ".$retornoDoSelect['senha']);

    $_SESSION['id'] = $retornoDoSelect['id'];
    $_SESSION['email'] = $retornoDoSelect['email'];
    $_SESSION['senha'] = $retornoDoSelect['senha'];

    header('location: ../../bpa/view/area-cliente/demanda.php');
    }else{
    $_SESSION['msg'] = "<div class='alert alert-danger'>E-mail ou Senha estão incorretos!</div>";
    header("Location: ../../bpa/view/login/login.php");
    }
    
    // fecha a conexão com BD
    mysqli_close($conn);
?>