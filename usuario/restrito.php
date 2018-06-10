<?php
   
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
   
  $nivel_necessario = 1;
   
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] > $nivel_necessario)) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: ../index.php"); exit;
  }
   
  ?>
   

 
 
 
<!DOCTYPE html>
<html>
<head>

	   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
	<title></title>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dark</a>
    </div>

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Arquivos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consulta <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">CADSUS</a></li>
            <li><a href="#">E-mail</a></li>
            
          </ul>
        </li>

         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ataques <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">WebSites</a></li>
            <li><a href="#">Computadores</a></li>
            <li><a href="#">Wireless</a></li>
          </ul>
        </li>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Arquivos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Scripts</a></li>
            <li><a href="#">Livros</a></li>
            <li><a href="#">Sites</a></li>
    
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Deep Web <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Fóruns</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Sites</a></li>
         
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="pesquisar">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
     	 <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['UsuarioNome']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Mudar Senha</a></li>
             
            <li><a href="#">Ranking</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Bloquear Minha Conta</a></li>
          </ul>
        </li>
        <li><a href="sair.php">Sair</a></li>
       

      </ul>
    </div> 
  </div> 
</nav>
</body>

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>



  <script src="js/bootstrap.js"></script>


 
<script>
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4f0dc9fef5a1f55508000013');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
</html>