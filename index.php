<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./estilo/index.css">
</head>
<body>

    <div class="sidenav">
        <div class="login-main-text">
           <h1>Foltz</h1><br> 
           <p>Faça o login para acessar ao Sistema.</p>
        </div>
       
     
     </div>
     <div class="main">
       
        <div class="col-md-6 col-sm-12">
           <div class="login-form">
              <form id="form1" name="form1" method="POST" action="./includes/valida.php">
                 <div class="form-group">
                    <label>E-mail:</label>
                    <input type="email" class="form-control" placeholder="teste@test.com" id="emailAcesso" name="emailAcesso">
                 </div>
                 <div class="form-group">
                    <label>Senha Acesso:</label>
                    <input type="password" class="form-control" placeholder="" id="senhaAcesso" name="senhaAcesso">
                 </div>
                 <input type="submit" class="btn btn-black" value="Acessar">
                 <a href="views/usuarioNew.php" type="submit" class="btn btn-secondary">Registrar</a>
              </form>                           
           </div>
        </div>
        <div id="login-footer">
            <h6>Scherer S/A</h6>
        </div>
     </div>
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="./javaScript/index.js"></script> 
</body>
</html>