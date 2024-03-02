<?php
    session_start();
    session_unset();
    session_destroy();
    echo session_id();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Icone -->
    <link rel="shortcut icon" href="images/programacao.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    .card-login {
      padding: 30px 0 30px 30px;
      width: 350px;
      margin: 0 auto;
    }
    
    .caixas{
        width: 300px;
        height: 50px;
    }
    body{
        background-image: url("img-1.jpg");
    }
    
  </style>
</head>
<body>
    <div class="text-center">
        <!-- <div class="row"> -->
            <!-- <div class="card border">  
                <div class="card-header text-center">
                    <h2 class="text-light" style="color: white;" >SisTech</h2>
                </div>
                <div class="card-body card-login">  
                    <form action="conexao.php" method="POST">
                        <input type="text" name="login" value="" placeholder="Usuário">
                        <br>
                        <br>
                        <input type="password" name="senha" value="" placeholder="Senha">
                        <br>
                        <br>
                        <button class="btn btn-dark" type="submit" name="btn-entrar">Entrar</button>
                    </form>
                </div>
            </div> -->
        <!-- </div> -->

            <main class="form-signin d-flex justify-content-center">
                <form action="conexao.php" method="POST">
                    <h1 class="h1 mb-3 mt-3">SisTech</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control caixas" placeholder="Usuário" name="login">
                    </div>
                    <div class="form-floating caixas">
                        <input type="password" class="form-control caixas" placeholder="Senha" name="senha">
                    </div>
                    <button style="width: 120px;" class="btn btn-dark mt-3" type="submit" name="btn-entrar">Entrar</button>
                </form>
            </main>

    </div>
</body>
</html>