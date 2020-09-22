<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br">

<?php
//INICIALIZAMOS A SESSÃO
session_start();
//DESTRUIMOS AS VARIÁVEIS
unset($_SESSION['usuarioID']);
unset($_SESSION['usuarioNome']); 
unset($_SESSION['usuarioLogin']); 
unset($_SESSION['usuarioSenha']);

//REDIRECIONAMOS PARA PÁGINA DE LOGIN
Header("Location: ../index.php");
?>