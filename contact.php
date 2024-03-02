<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Contate-nos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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

  <style>
    button#ah:hover{
      color: white;
      background-color:#0D0F75;
    }
  </style>
</head>

<body>
  <!-- header -->
  <header class="shadow-bottom sticky-top bg-white">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <strong><a class="navbar-brand" href="home.php" style="color: #0D0F75;">SisTech</a></strong>
                        <button class="btn btn-outline-dark" id="ah">
                            <a href="index.php" >Sair</a>
                        </button>
                </div>
            </div>
        </nav>
  </header>
  <!-- /header -->

  <!-- contact -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="section-title text-primary">Precisa de ajuda?</h2>
          <p>Nós podemos te ajudar! Abra um chamado e entraremos em contato com você para te auxiliar no que for preciso!</p>

          <form action="conexao.php" method="POST">
            <input type="text" id="nome" name="nome" placeholder="Nome completo" class="form-control mb-4 shadow rounded-0">
            <input type="email" id="email" name="email" placeholder="Email" class="form-control mb-4 shadow rounded-0">
            <input type="text" id="assunto" name="assunto" placeholder="Assunto"
              class="form-control mb-4 shadow rounded-0">
            <textarea name="obs" id="obs" placeholder="Observação"
              class="form-control mb-4 shadow rounded-0"></textarea>
            <input type="hidden" name="chamado" id="inserir" value="inserir">
            <input type="submit" value="Enviar" name="btn-contato" class="btn btn-primary">
            <a class="btn btn-primary" href="home.php">Voltar</a>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->



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