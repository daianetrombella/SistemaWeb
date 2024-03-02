<?php

require_once 'conexao.php';

if (!isset($_SESSION)) {
    session_start();
}

$id = $_SESSION['id_usuario'];
$sql = "select *from usuarios where codigo ='$id'";

$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_array($resultado);

$grupo = listarVendas();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Relatórios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="images/programacao.png" type="image/x-icon">
    <!-- theme meta -->
    <meta name="theme-name" content="dot" />

    <!-- ** CSS Plugins Needed for the Project ** -->

    <!-- Bootstrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- Main Stylesheet -->
    <link href="assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <strong><a class="navbar-brand" href="home.php" style="color: #0D0F75;">SisTech</a></strong>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark">
                            <a href="venda.php">Adicionar venda</a>
                            <span class="badge bg-dark text-white ms-1 rounded-pill" id="carrinho"></span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
		<!-- banner -->
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 style="color: #0D0F75;">Vendas realizadas:</h1>
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
    <div class="container">
    
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Erp</th>
                    <th scope="col">Suporte</th>
                    <th scope="col">Acompanhamento</th>
                    <th scope="col">Treinamento</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Editar</th> 
                    <th scope="col">Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($grupo as $venda){ ?>
                <tr>
                    <th scope="row"><?=$venda["id"]?></th>
                    <td><?=$venda["erp"]?> </td>
                    <td><?=$venda["suporte"]?> </td>
                    <td><?=$venda["acompanhamento"]?> </td>
                    <td><?=$venda["treinamento"]?> </td>
                    <td><?=$venda["email"]?> </td>
                    <td><?=$venda["nome"]?> </td>
                    <td><?=$venda["endereco"]?> </td>
                    <td><?=$venda["telefone"]?> </td>
                    <td><?=$venda["cidade"]?> </td>
                    <td><?=$venda["valor"]?></td>
                    
                    <td>
                        <form name="alterar" action="alterarVenda.php" method="post">
                            <input type="hidden" name="id" value='<?=$venda["id"]?>'/>
                            <input type="submit" style="border-style: solid;" value="Editar" name="editar"/>
                        </form>
                    </td> 

                    <td>
                        <form name="excluir" action="conexao.php" method="post">
                            <input type="hidden" name="id" value='<?=$venda["id"]?>'/>
                            <input type="hidden" name="acao" value="excluir"/>
                            <input type="submit" style="border-style: solid;" value="Excluir" name="excluir"/>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>