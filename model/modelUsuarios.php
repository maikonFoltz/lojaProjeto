<?php
    header ('Content-type: text/html; charset=UTF-8');
    include_once ("../includes/daoUsuarios.php");

    $recebeNomeUsuario = $_POST["nomeUsuario"]; 
    $nomeUsuario = strtoupper($recebeNomeUsuario); 
    $emailUsuario = $_POST["emailUsuario"];
    $senhalUsuario = $_POST["senhaUsuario"];
    $tipolUsuario = $_POST["tipoUsuario"];
    $filialUsuario = $_POST["filial"];


    
    InserirDados ($nomeUsuario, $emailUsuario, $senhalUsuario, $tipolUsuario, $filialUsuario);  

    header("Location:../index.php")
?>