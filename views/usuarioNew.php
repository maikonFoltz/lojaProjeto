
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Cadastro Usuário</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo/usuarioNew.css">
    
   
</head>
<body>
    <!--navBar-->
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand">Foltz</a>
        
         
    </div>
    <!--fromulario de cadastro de ususrio-->
    <br>
    <div class="container w-50 p-3">
        <div class="card">
            <div class="card-header">
                <h3>Cadastro de Usuário</h3>
            </div>
            <div class="card-body">
            
                <form action="../model/modelUsuarios.php" method="POST" id="CadastrarUsuario" name="CadastrarUsuario">
                    <div class="row" style="display:none" id="resp" name="resp"><div id="resposta" name="resposta"></div></div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label>E-mail:</label><h11>*</h11> 
                            <input type="email" class="form-control" name="emailUsuario" id="emailUsuario" placeholder="teste@scherer-sa.com.br" required="required" onchange="VerificaUsuario()">
                        </div>                        
                    </div>
					<div class="row">
                        <div class="col-md-12 form-group">
                            <label>Nome Completo:</label><h11>*</h11> 
                            <input type="text" class="form-control" name="nomeUsuario" id="nomeUsuario" required="required">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Senha:</label><h11>*</h11> 
                            <input type="password" class="form-control" name="senhaUsuario" placeholder="" required="required">
                        </div>

                        <div class="col-md-3 col-sm-2">
                            <label>Tipo Usuário:</label><h11>*</h11>  
                            <select required id="tipoUsuario" name="tipoUsuario" class="form-control" required="required">
                                <option value=""></option>
                                <option value="SIMPLES">Simples</option>
                                             
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-2">
                            <label>Filial:</label><h11>*</h11>  
                            <select required id="tipoUsuario" name="filial" class="form-control" required="required">
                                <option value=""></option>
                                <option value="1">FIBEL</option>                                             
                            </select>
                        </div>                        
                    </div>
                    <br>
                    <div class="row">                  
                        <div class="col-md-8 col-sm-4" id="Botoes">
                            <button id="CadastrarBtn" name="CadastrarBtn" class="btn btn-success" type="Submit">Cadastrar</button>
                            <a href="../index.php" id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</a><br>
							
                        </div>
						
                    </div>
                
                </form>
            </div>
         
        </div>
    </div>

    
</body>



    <!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="../js/jquery.js"></script>
		<script type="text/javascript">
			 $(document).ready(function(){ 
				$("#CadastrarBtn").prop("disabled",true); 
			 });		
			function VerificaUsuario(){
			$(function(){
				$("#CadastrarUsuario").change(function(){
					$.post('../includes/consultaUsuarioExiste.php',$("#CadastrarUsuario").serialize(),function(retorno){
						$("#resposta").html(retorno);
						var valor = retorno;
						var n = valor.indexOf("Usuário já cadastrado!");						
						if (n == -1){$("#CadastrarBtn").removeAttr("disabled");}
						else {$("#CadastrarBtn").prop("disabled",true);}

				});
				})
				})
			}
	
</script>

</html>

