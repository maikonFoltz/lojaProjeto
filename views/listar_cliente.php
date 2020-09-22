<?php
	include('functions.php');
	$documento = $_POST['cpf'].$_POST['cnpj'];
	$dados = ListarCliente($documento);
	if (empty ($dados)){}
	else { echo "Cliente já cadastrado!"; }
?>