<?php
header ('Content-type: text/html; charset=UTF-8');
$mysql_host = '192.168.100.175:3308';
$mysql_user = 'mjfoltz';
$mysql_password = 'Scherer@2020';
$mysql_database =  'fibel009';

$sql = "SELECT * FROM usuarios";

function FazBase($sql){
    /* Conectando, escolhendo o banco de dados */
global $mysql_host, $mysql_user, $mysql_password, $mysql_database;	
$link = mysqli_connect($mysql_host, $mysql_user, $mysql_password) or die('Não foi possivel conectar: ' . $sql);
//print "";
mysqli_select_db($link, $mysql_database) or die("Não pude selecionar o banco de dados ");
mysqli_query($link, "SET NAMES 'utf8'");
mysqli_query($link, "SET character_set_connection = 'utf8'");
mysqli_query($link, "SET character_set_client = 'utf8'");
mysqli_query($link, "SET character_set_results = 'utf8'");

/* Fazendo a query SQL*/
$retorno = mysqli_query($link, $sql) or die("A query falhou: " . $sql);

$i = 0;

if ($retorno){
while ($row = mysqli_fetch_row($retorno)){
    $return[$i] = $row;
    $i++;
}
}

/* Fechando a conexão */
mysqli_close($link);
return $return;

}
?>  