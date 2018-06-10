
<style type="text/css">
  .wrapper{
    margin-top: 45px;
}
 body{
    background: url("img/background2.jpg") no-repeat;
    background-repeat: no-repeat;
    background-size:100%;
  
     

 }
.form-signin{
  max-width: 420px;
  padding: 30px 38px 66px;
  margin: 0 auto;
  border: 1px solid #cccccc;
}
.input-group{
    height: 45px;
    margin-bottom: 15px;
    border-radius: 0px;
    color: #60B99A;
}
.form-control{
    height: 45px;
    color: #60B99A;
}
.input-group:hover span i{
    color: #60B99A;
}
.btn-block{
    border-radius: 0px;
    margin-top: 25px;
    background-color: #60B99A;
    border: none;
}
.btn-block:hover{
    background-color: #D3CE3D;
}
 

</style>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.0/darkly/bootstrap.css ">
  <title>Dark</title>
</head>
<body >

 
 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <div class = "container">
            <div class="wrapper">
                <form action="validar.php" method="post" name="Login_usuario" class="form-signin"> 
                     <div class="row text-center  "><h1>The Friends</h1></div>
                    <h3 class="form-signin-heading text-center">
                        <img src="" alt=""/>
                    </h3>
                    <hr class="dados">
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="fa fa-user"></i>
                        </span>
                       <input type="text" class="form-control" name="usuario" placeholder="Login" required="" autofocus="" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">
                            <i class="fa fa-lock"></i>
                        </span>
                       <input type="password" class="form-control" name="senha" placeholder="Password" required=""/>             
                    </div>
              
                    <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Entrar" type="Submit">Entrar</button> 
                      <br>
                      <a href="" class="btn text-alert">Faça o Cadastro</a>  <a href="" class="btn text-alert">Esqueci a senha!</a>
                
                  
                </form>     

            </div>
</div>

    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</html>