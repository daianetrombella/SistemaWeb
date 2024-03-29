<?php

require_once 'conexao.php';

if(!isset($_SESSION)){
    session_start();
}

$id=$_SESSION['id_usuario'];
$sql="select *from usuarios where codigo ='$id'";

$resultado= mysqli_query($connect, $sql);

$dados= mysqli_fetch_array($resultado);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="dot" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="shortcut icon" href="images/programacao.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="images/banner.jpg">
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<strong><a class="navbar-brand px-2" href="index.html">SisTech</a></strong>
				<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="navigation">
					<ul class="navbar-nav ml-auto">
						<!-- <li class="nav-item">
							<a class="nav-link text-dark" href="venda.php">Vendas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="relatorios.php">Relatórios</a>
						</li> -->
						<!-- <li class="nav-item">
							<a class="nav-link text-dark" href="contact.html">Chamados abertos</a>
						</li> -->
						<li class="nav-item">
							<a href="#" class="nav-link text-dark"><?php echo $dados["nome"]; ?></a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="index.php">Sair</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- banner -->
		<div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 class="text-white mb-3">Controle de vendas de modo eficaz e eficiente!</h1>
					<p class="text-white mb-4">Faça vendas dos seus sistemas e ainda obtenha relatórios.</p>
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">O que deseja fazer agora?</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="venda.php" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Venda</h3>
						<!-- <p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p> -->
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="relatorios.php" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Relatório</h3>
						<!-- <p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p> -->
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a href="contact.php" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-package icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Suporte</h3>
						<!-- <p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p> -->
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->

	<!-- call to action -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section px-3 bg-white shadow text-center">
						<h2 class="mb-4">Em breve a versão do sistema em versão Desktop!</h2>
						<p class="mb-4">Além da versão web teremos a versão Desktop que poderá ser usada offline.</p>
						<!-- <a href="contact.html" class="btn btn-primary">Contate nos para saber mais</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /call to action -->

	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">
					<p class="mb-md-0 mb-4">Copyright © 2020 Designed and Developed by <a
							href="https://themefisher.com/">themefisher</a></p>
				</div>
				<div class="col-md-4 text-md-right text-center">
					<ul class="list-inline">
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-facebook"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-twitter-alt"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-github"></i></a>
						</li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
</body>

</html>
