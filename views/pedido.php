<?php
include ("../includes/daoPedido.php");
include_once ("../includes/seguranca.php");
protegePagina(); // Chama a função que protege a página
date_default_timezone_set('Brazil/East');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="../estilo/pedido.css">
	
    <title>Pedido Peças</title>   
</head>
<body> 
    <!--navBAr-->
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand">Foltz</a>
        
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="./principal.php">Home</a>
            </li>              
        </ul> 
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../includes/logout.php">Sair</a>        
            </li>          
        </ul>    
    </div>     
    <br>

    <!---inputs pedir peças-->
    <div class="container">
        <form action="../model/modelPedido.php" method="post">
            <div class="row">
            <div class="col-md-2 form-group">
                    <label>Codigo:</label><h11>*</h11> 
                    <input class="form-control" type="text" name="codigo" id="codigo" required="required">
                </div>            
                <div class="col-md-1 form-group">
                    <label>Quant:</label><h11>*</h11> 
                    <input class="form-control" type="number" name="quantidade" id="quantidade" required="required">
                </div>
                <div class="col-md-2 form-group">
                    <label>Filial:</label><h11>*</h11>  
                    <select required id="filial" name="filial" class="form-control" required="required">
                        <option value=""></option>
                        <option value="2">TOLEDO</option>
                        <option value="3">PONTA GROSSA</option> 
                    </select>
                </div>
                <div class="col-md-2 form-group">
                    <label>Finalidade:</label><h11>*</h11>  
                    <select required id="finalidade" name="finalidade" class="form-control" required="required">
                        <option value=""></option>
                        <option value="VENDIDO">VENDIDO</option>
                        <option value="ESTOQUE">ESTOQUE</option> 
                        <option value="GARANTIA">GARANTIA</option>                                              
                    </select>
                </div>                   
                <div class="col-md-4 form-group">
                    <label>Cliente:</label><h11>*</h11>
					    <input type="text" class="form-control" name="nomeCliente" required="required">
				</div>
                <div class="col-md-1 form-group">                  
                    <input type="submit" id="pedir" name="pedir" class="btn btn-success" value="Pedir">                   
                </div>                                 
            </div>                   
        </form>
         <!--table listando os itens pedidos-->
        
         <table class="table">
                <thead>
                    <tr>
                        <th>Data/Hora</th>
                        <th>Codigo</th>
                        <th>Qt</th>
                        <th>Filial</th>
                        <th>Vendedor</th>
                        <th>Finalidade</th>
                        <th>Cliente</th>
                        <th>Status</th>
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
                            echo "<td> $linha[6]</td>"; 
                            echo "<td> $linha[7]</td>"; 
                            echo "<td><a href='confirmacao.php?cod=$linha[0]'> $linha[8]</a></td>";
                                            
                        echo "</tr>";                       
                       
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