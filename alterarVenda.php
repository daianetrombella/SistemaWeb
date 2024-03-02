<?php

require_once 'conexao.php';

if(!isset($_SESSION)){
    session_start();
}

$id=$_SESSION['id_usuario'];
$sql="select *from usuarios where codigo ='$id'";

$resultado= mysqli_query($connect, $sql);

$dados= mysqli_fetch_array($resultado);

if(isset($_POST["id"])){
    $id = $_POST["id"];
};

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vendas</title>
        <!-- Favicon-->
        <link rel="shortcut icon" href="images/programacao.png" type="image/x-icon">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/style.css">
        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    </head>
    <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <strong><a class="navbar-brand" href="home.php" style="color: #0D0F75;">SisTech</a></strong>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" form="my-form" type="submit" name="submit" value="Enviar">
                            <i class="bi-cart-fill me-1"></i>
                            Carrinho
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
					<h1 style="color: #0D0F75;">Adicione os itens escolhidos pelo cliente:</h1>
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
        

        <!-- Section-->
        
        <form action="finalizarVendaAlt.php" method="POST" id="my-form">
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-1">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="images/venda1.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">E.R.P</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$9.000.00</span>
                                        $8.000.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><input type="button" value="Adicionar" name="erp" class="btn btn-outline-dark mt-auto" id="btn-erp"></div>
                                    <input type="hidden" name="addErp" id="addErp" value="false">
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="images/venda2.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Suporte</h5>
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$200.00</span>
                                        $170.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"> <input type="button" value="Adicionar" class="btn btn-outline-dark mt-auto" id="btn-suporte" name="suporte"></div>
                                    <input type="hidden" name="addSupor" id="addSupor" value="false">
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="images/venda3.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Acompanhamento especial</h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        $1000.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"> <input type="button" value="Adicionar" name="acomp" class="btn btn-outline-dark mt-auto" id="btn-acomp"></div>
                                    <input type="hidden" name="addAcomp" id="addAcomp" value="false">
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Promoção</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="images/venda4.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">Treinamento inicial</h5>
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through">$250.00</span>
                                        $200.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"> <input type="button" value="Adicionar" name="trein" class="btn btn-outline-dark mt-auto" id="btn-trein"></div>
                                    <input type="hidden" name="addTrein" id="addTrein" value="false">
                                </div>
                            </div>
                        </div>
                   
                </div>
            </div>
            <input type="hidden" name="acao" id="inserir" value="inserir">
            <input type="hidden" name="id" value='<?=$_POST["id"]?>'/>
            <!-- <input type="submit" name="submit" value="Enviar" class="bg-dark" style="color: white; padding:10px 20px"> -->
        </section>
        
        </form>
        <!-- Footer-->
        <footer class="py-5" style="background-color: #0D0F75;">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Daiane Destri 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<script>
    $(document).ready(function() {
        var count = 0;
        var trein = document.querySelector("#addTrein");
        var erp = document.querySelector("#addErp");
        var acomp = document.querySelector("#addAcomp");
        var supor = document.querySelector("#addSupor");
        var verd = "true";

        var badge = $('#carrinho');
        badge.text(count);
        $(document).on('click', '#btn-erp', function(e){
            e.preventDefault;
            count++;
            badge.text(count);
            erp.value = verd;
        });
        
        $(document).on('click', '#btn-suporte', function(e){
            e.preventDefault;
            count++;
            badge.text(count);
            supor.value = verd;
        });

        $(document).on('click', '#btn-trein', function(e){
            e.preventDefault;
            count++;
            badge.text(count)
            trein.value = verd;
        });
        $(document).on('click', '#btn-acomp', function(e){
            e.preventDefault;
            count++;
            badge.text(count);
            acomp.value = verd;
        });
    }) 
</script>
