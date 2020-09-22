<?php
	include('daoUsuarios.php');
	$email = $_POST['emailUsuario'];
	$dados = ValidaCliente($email);
	if (empty ($dados)){ echo $dados;}
	else { echo "<div class='alert alert-danger' role='alert'>Usuário já cadastrado!</div>"; }
?>