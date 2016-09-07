<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CRUD com Bootstrap 3</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Web Dev Academy</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="#">In&iacute;cio</a></li>
     <li><a href="#">Op&ccedil;&otilde;es</a></li>
     <li><a href="#">Perfil</a></li>
     <li><a href="#">Ajuda</a></li>
    </ul>
   </div>
  </div>
 </nav>
 
 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Usuario</h3>
  
  <form action="<?=base_url('usuarios')?>">
  	<div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Digite seu Sobrenome">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Digite seu login">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="grupo">Grupo</label>
                <select name="grupo" id="grupo" class="form-control">
                    <option> Selecione</option>
                    <option value="gerente" > Gerencia</option>
                    <option value="financa" > Financeiro</option>
                    <option value="diretor" > Diretoria</option>
                    <option value="ti" > Informática</option>
                </select>
            </div>
        </div>
        </div>

        <hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
		<a href="template.html" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
 

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>