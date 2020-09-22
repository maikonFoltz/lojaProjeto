<?php
header ('Content-type: text/html; charset=UTF-8');
include_once ("../database/connection.php");


    
function ListarDadosPedidos()
    {
    $sql = "SELECT * FROM fibel009.pedidos WHERE statusPedido='EM ESPERA' ORDER BY idPedido DESC";
    return FazBase($sql);
    }    
?>










