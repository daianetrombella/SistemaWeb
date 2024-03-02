<?php

require_once 'conexao.php';

if (!isset($_SESSION)) {
  session_start();
}

$id = $_SESSION['id_usuario'];
$sql = "select *from usuarios where codigo ='$id'";

$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_array($resultado);
$erp = false;
$suporte = false;
$acomp = false;
$trein = false;
$valor = 0;
$vendaSelecionada;

if (isset($_POST["acao"])) {
  if ($_POST["addTrein"] == "true") {
    $trein = true;
  }
}

if (isset($_POST["acao"])) {
  if ($_POST["addErp"] == "true") {
    $erp = true;
  }
}

if (isset($_POST["acao"])) {
  if ($_POST["addSupor"] == "true") {
    $suporte = true;
  }
}

if (isset($_POST["acao"])) {
  if ($_POST["addAcomp"] == "true") {
    $acomp = true;
  }
}


if(isset($_POST["id"])){
  $id = $_POST["id"];
  $venda = selecionarClienteId($id);
};


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finalizar Venda</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="shortcut icon" href="images/programacao.png" type="image/x-icon">
</head>

<body>
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-8 text-center mx-auto">
        <h2 style="color: #0D0F75;"> Os produtos selecionados foram:</h2>
        <!-- <div class="rounded-circle table-danger" style="height: 20px; width:20px; margin:0px; padding:0px;"></div>Produto não selecionado
          <div class="rounded-circle bg-success" style="height: 20px; width: 20px; margin:0px; padding:0px;"></div> Produto selecionado -->
      </div>
    </div>

    <form action="conexao.php" method="POST">
    <table class="table table-bordered mt-4">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Produto</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
          if ($erp == false) {
            echo '<th scope="row" class="table-danger" id="erp">Erp</th>';
          } else if ($erp == true) {
            echo '<th scope="row" class="bg-success" style="color:white;" id="erp">Erp</th>';
            $valor = $valor + 8000;
          };
          ?>
        </tr>
        <tr>
          <?php
          if ($suporte == false) {
            echo '<th scope="row" class="table-danger" id="sp">Suporte</th>';
          } else if ($suporte == true) {
            echo '<th scope="row" class="bg-success" style="color:white;" id="sp">Suporte</th>';
            $valor = $valor + 170;
          }
          ?>
        </tr>
        <tr>
          <?php
          if ($acomp == false) {
            echo '<th scope="row" class="table-danger" id="ac">Acompanhamento Especial</th>';
          } else if ($acomp == true) {
            echo '<th scope="row" class="bg-success" style="color:white;" id="ac">Acompanhamento Especial</th>';
            $valor = $valor + 1000;
          }
          ?>
        </tr>
        <tr>
          <?php
          if ($trein == false) {
            echo '<th scope="row" class="table-danger" id="ti">Treinamento inicial</th>';
          } else if ($trein == true) {
            echo '<th scope="row" class="bg-success" style="color:white;" id="ti">Treinamento inicial</th>';
            $valor = $valor + 200;
          }
          ?>

        </tr>
      </tbody>
      <thead class="thead-dark">
        <tr>
          <th scope="col">R$<?= $valor; ?>,00</th>
        </tr>
      </thead>
    </table>
          <strong><h2 class="text-center">Informações do comprador:</h2></strong>
          <br>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" value="<?=$venda["email"]?>">
        </div>
        <div class="form-group col-md-6">
          <label>Nome completo</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Marcelo Junior" value="<?=$venda["nome"]?>">
        </div>
      </div>
      <div class="form-group">
        <label>Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua exemplo 1" value="<?=$venda["endereco"]?>">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label>Telefone</label>
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="9 9999-9999" value="<?=$venda["telefone"]?>">
        </div>
        <div class="form-group col-md-6">
          <label>Cidade</label>
          <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Toledo" value="<?=$venda["cidade"]?>">
        </div>
      </div>
      
      <input type="hidden" name="valor" id="valor" value="<?= $valor?>">
      <input type="hidden" name="erp" id="erp" value="<?= $erp ?>">
      <input type="hidden" name="supor" id="supor" value="<?= $suporte; ?>">
      <input type="hidden" name="acomp" id="acomp" value="<?= $acomp; ?>">
      <input type="hidden" name="trein" id="trein" value="<?= $trein; ?>">
      <input type="hidden" name="id" id="id" value="<?= $id; ?>">
      <input type="hidden" name="alterar" id="alterar" value="alterar">
      <input type="submit" value="Alterar venda" name="enviar" id="enviar" class="btn btn-dark" style="padding: 5px 25px; border-radius:0px;">
      <a href="venda.php" class="btn btn-dark" style="padding: 5px 25px; border-radius:0px;">Voltar</a>
    </form>
  </div>
</body>

</html>