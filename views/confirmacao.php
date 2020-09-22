<?php

include ("../includes/daoConfirmacao.php");
include_once ("../includes/seguranca.php");
protegePagina(); // Chama a função que protege a página
date_default_timezone_set('Brazil/East');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../estilo/confirmacao.css">  
    <title>Confirmação</title>  
</head>
    <body>
        <!--navBAr-->
        <div class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand">Foltz</a>
            
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./pedido.php">Pedir Peças</a>
                </li>              
            </ul> 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../includes/logout.php">Sair</a>        
                </li>          
            </ul>    
        </div> 
        <br>
        <div class="container">
        <table class="table">
                <thead>
                    <tr>
                        <th>Data/Hora</th>
                        <th>Codigo</th>
                        <th>Qt</th>
                        <th>Filial</th>
                        <th>Vendedor</th>
                        <th>Status</th>                      
                        <th>Ação</th>
                    </tr>
                </thead>
                <?php 
                    $listar = ListarDadosPedidos();
                    $num_rows = sizeof ($listar);                     
                    if($num_rows > 0){
                        foreach ($listar as $linha) {
                        echo "<tr>";
                        
                            echo "<td> $linha[1]</td>";
                            echo "<td> $linha[2]</td>";
                            echo "<td> $linha[3]</td>"; 
                            echo "<td> $linha[4]</td>"; 
                            echo "<td> $linha[5]</td>";                                                      
                            echo "<td> <select required id='statusConf' name='statusConf' class='form-control' required='required'> <option value=''></option><option value='OK'>OK</option><option value='CANCELADO'>CANCELADO</option><option value='ZERADO'>ZERADO</option> </select>  
                            </td>";   
                            echo "<td><a href='../model/alteracaoStatus.php?cod=$linha[0]?status=statusConf' id='ok' name='OK' class='btn btn-success' type='submit'>OK</td>";     
                        echo "</tr>";
                        
                        //print_r($linha[0]);
                    }
                }     
                ?>  

            </table>    
        </div>
    
    
    </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>    