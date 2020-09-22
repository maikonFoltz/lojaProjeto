<?php
    header ('Content-type: text/html; charset=UTF-8');
    include_once ("../includes/daoPedido.php");
    include_once ("../includes/seguranca.php");
    protegePagina(); // Chama a função que protege a página
    date_default_timezone_set('Brazil/East');

   
    
    $codigoPecaPedido = $_POST["codigo"];  
    $quantidadePedido = $_POST["quantidade"];
    $idFilial = $_POST["filial"];
    $idUsuarios = $_SESSION['usuarioID'];
    $finalidadePedido = $_POST["finalidade"];
    $clientePedido = $_POST["nomeCliente"];
    $statusPedido = "EM ESPERA";


    
    InserirDados ($codigoPecaPedido, $quantidadePedido, $idFilial, $idUsuarios, $finalidadePedido, $clientePedido, $statusPedido); 
    
    header("Location:../views/pedido.php")


?>