<?PHP
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login/login.css">
    <title>Faça seu Login</title>
</head>

<body>
    <div class="container">

        <header>

            <div class="desc">
                <h1>Aproveite para desfrutar das funcionalidades do nosso Site!</h1>
            </div>

        </header>

            <form action="../../controller/loginQuery.php" method="post">
                   
                <div class="img-center">
                    <img src="../../img/Security On-amico.svg">
                </div>

                <div class="inf">
                    <h2>Informe seu E-mail e Senha para se Autenticar.</h2>
                </div>

                <div class="form-signin">
				    <?php
					    if(isset($_SESSION['msg'])){
						    echo $_SESSION['msg'];
						    unset($_SESSION['msg']);
					    }
					    if(isset($_SESSION['msgcad'])){
						    echo $_SESSION['msgcad'];
						    unset($_SESSION['msgcad']);
					    }   
                    ?>
                </div>
                
            <div class="login">

                <label for="email">
                    <input type="text" placeholder="Email" name="email"  id="email" required>
                </label>
                    
                <label for="senha">
                    <input type="password" placeholder="Senha" name="senha"  id="senha" required>
                </label>

                <div class="redf">
                    <a href="redefinicao.php">Redefinir Senha</a>
                </div>

                <div class="button">
                 <input type="submit" name="cadastrar" id="Entrar" value="Entrar">
                </div>
            </div>
        </form>
        <div class="footer"></div>
    </div>
</body>

</html>