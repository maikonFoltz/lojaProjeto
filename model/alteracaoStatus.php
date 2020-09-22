<?php
    header ('Content-type: text/html; charset=UTF-8');
    include_once ("../includes/daoConfirmacao.php");
    include_once ("../includes/seguranca.php");
    protegePagina(); // Chama a função que protege a página
    date_default_timezone_set('Brazil/East');
    
    $idPedido = $_GET["cod"]; 
    $status = $_GET["status"];   

    echo $idPedido;

    echo $status;

?>