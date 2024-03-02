<?php
    session_start();
    
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="copel";
    
    $connect= mysqli_connect($servername, $username, $password, $db_name);

    function abrirBanco(){
        $conexao= new mysqli("localhost","root","","copel");
        return $conexao;
    }
    

    if(isset($_POST["chamado"])){
        if($_POST["chamado"]=="inserir"){
            if($_POST["btn-contato"]){
                inserirChamado();
            }
        }
    } else if(isset($_POST["venda"])){
        if($_POST["venda"] == "venda"){
            if($_POST["erp"] == 1){
                $erp = "true";
            }else{
                $erp = "false";
            }
            if($_POST["supor"] == 1){
                $sup = "true";
            }else{
                $sup = "false";
            }
            if($_POST["acomp"] == 1){
                $acomp = "true";
            }else{
                $acomp = "false";
            }
            if($_POST["trein"] == 1){
                $trein = "true";
            }else{
                $trein = "false";
            }
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $cidade = $_POST["cidade"];
            // echo 'erp: ', $erp, '- sup ', $sup, '- acomp ', $acomp, '- trein ', $trein, '- nome ',$nome, '- email ', $email, '- endereco ', $endereco, '- telefone ', $telefone, '- cidade ', $cidade;
            adicionarVenda($erp, $sup, $acomp, $trein);
        }
    }
    if(isset($_POST["alterar"])){
        if($_POST["alterar"] == "alterar"){
            if($_POST["erp"] == 1){
                $erp = "true";
            }else{
                $erp = "false";
            }
            if($_POST["supor"] == 1){
                $sup = "true";
            }else{
                $sup = "false";
            }
            if($_POST["acomp"] == 1){
                $acomp = "true";
            }else{
                $acomp = "false";
            }
            if($_POST["trein"] == 1){
                $trein = "true";
            }else{
                $trein = "false";
            }
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $endereco = $_POST["endereco"];
            $telefone = $_POST["telefone"];
            $cidade = $_POST["cidade"];
            // echo 'erp: ', $erp, '- sup ', $sup, '- acomp ', $acomp, '- trein ', $trein, '- nome ',$nome, '- email ', $email, '- endereco ', $endereco, '- telefone ', $telefone, '- cidade ', $cidade;
            $id = $_POST["id"];
            echo $id;
            alterarVenda($erp, $sup, $acomp, $trein);
        }
    }
    if(isset($_POST["acao"])){
        if($_POST["acao"] == "excluir"){
            excluirVenda();
        }
    }
    
    if(isset($_POST['btn-entrar'])){
        $login= mysqli_escape_string($connect, $_POST['login']);
        $senha= mysqli_escape_string($connect, $_POST['senha']);
        if(empty($login)or empty($senha)){
            echo 'Favor preencher os dados';
        }
        else{
            $sql="select login from usuarios where login= '$login'";
            $resultado= mysqli_query($connect, $sql);
            if(mysqli_num_rows($resultado)>0){
                $senha= md5($senha);
                $sql="select * from usuarios where login = '$login' and senha = '$senha'";
                $resultado= mysqli_query($connect, $sql);
                if(mysqli_num_rows($resultado)==1){
                    $dados= mysqli_fetch_array($resultado);
                    $_SESSION['logado']=true;
                    $_SESSION["id_usuario"]=$dados['codigo'];
                    
                    header('location:home.php');
                    
                
            }
            else{
                echo"usuario inexistente";
            }
        }
        
        
    }
    
    if(mysqli_connect_error()==true){
        echo "Falha na conexao".mysqli_connect_error();
    }
    }
    




    
    function inserirChamado(){
        $banco=abrirBanco();
        $sql="INSERT INTO chamados (nome, email, assunto, obs)"."VALUES ('{$_POST["nome"]}','{$_POST["email"]}','{$_POST["assunto"]}','{$_POST["obs"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }

    function adicionarVenda($erp, $sup, $acomp, $trein){
        $banco=abrirBanco();
        $sql="INSERT INTO venda_sitios(erp,suporte,acompanhamento,treinamento,email,nome,endereco,telefone,cidade,valor)"
        ." VALUES ('$erp','$sup','$acomp','$trein','{$_POST["email"]}','{$_POST["nome"]}','{$_POST["endereco"]}','{$_POST["telefone"]}','{$_POST["cidade"]}','{$_POST["valor"]}')";
        $banco->query($sql);
        $banco->close();
        voltarIndex();
    }
    
    function alterarVenda($erp, $sup, $acomp, $trein){
        $banco=abrirBanco();
        $sql="UPDATE venda_sitios SET erp = '$erp', suporte = '$sup',acompanhamento ='$acomp', treinamento ='$trein',email='{$_POST["email"]}',nome ='{$_POST["nome"]}',endereco='{$_POST["endereco"]}', telefone='{$_POST["telefone"]}', cidade='{$_POST["cidade"]}', valor='{$_POST["valor"]}' WHERE id='{$_POST["id"]}' ";
        $banco->query($sql);
        $banco->close();
        header('Location:relatorios.php');
    }

    function listarVendas(){
        $banco=abrirBanco();
        $sql="select * from venda_sitios order by id";
        $resultado=$banco->query($sql);
        while($row=mysqli_fetch_array($resultado)){
            $grupo[]=$row;
        }
        return $grupo;
    
    }

    function excluirVenda() {
        $banco = abrirBanco();
        $sql = "delete from venda_sitios where id='{$_POST["id"]}'";
        $banco->query($sql);
        $banco->close();
        header('Location:relatorios.php');
    }

    
    function selecionarClienteId($id){
        $banco=abrirBanco();
        $sql="select * from venda_sitios where id=". $id;
        $resultado=$banco->query($sql);
        $cliente=mysqli_fetch_assoc($resultado);
    
        return $cliente;
    }

    function voltarIndex(){
        header('Location:home.php');
    }
?>