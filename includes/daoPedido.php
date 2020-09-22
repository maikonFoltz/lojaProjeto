<?php
header ('Content-type: text/html; charset=UTF-8');
include_once ("../database/connection.php");


function InserirDados ($codigoPecaPedido, $quantidadePedido, $idFilial, $idUsuarios, $finalidadePedido, $clientePedido, $statusPedido){

    $sql = "INSERT INTO fibel009.pedidos (dataHoraPedido, codigoPecaPedido, quantidadePedido, idFilial, idUsuarios, finalidadePedido, clientePedido, statusPedido)

    VALUES (now(),'$codigoPecaPedido', '$quantidadePedido', '$idFilial', '$idUsuarios','$finalidadePedido', '$clientePedido', '$statusPedido')";
    return FazBase($sql);
    }     
  
    
function ListarDadosPedidos()
    {
    $sql = "SELECT * FROM fibel009.pedidos WHERE statusPedido='EM ESPERA' ORDER BY idPedido DESC";
    return FazBase($sql);
    }    
?>