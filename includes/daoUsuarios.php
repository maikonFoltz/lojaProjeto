<?php
header ('Content-type: text/html; charset=UTF-8');
include_once ("../database/connection.php");


function InserirDados ($nomeUsuario, $emailUsuario, $senhalUsuario, $tipolUsuario, $filialUsuario){

    $sql = "INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario, tipoUsuario, idFilial) 
    VALUES ('$nomeUsuario', '$emailUsuario', '$senhalUsuario', '$tipolUsuario', '$filialUsuario')";
    return FazBase($sql);
    }  

function ListarCliente()
    
    {
    $sql = "SELECT * FROM fibel009.usuarios";
    return FazBase($sql);
               
    }
	
function ValidaCliente($email)
    
    {
    $sql = "SELECT * FROM fibel009.usuarios WHERE emailUsuario LIKE '$email'";
    return FazBase($sql);
               
    }    
?>

