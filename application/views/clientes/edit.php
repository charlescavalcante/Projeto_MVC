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
  
  <h3 class="page-header">Editar Item</h3>
  
     <form action="<?= base_url('clientes/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control" id="cpf" placeholder="Digite seu cpf">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="renda">Renda</label>
                <input type="number" name="renda" class="form-control" id="renda" placeholder="Digite sua renda">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">

                <label for="endereco">Endereco</label>

                <select  name="endereco_id">
                    <optgroup  label="Endereco">
                        <?php
                        require_once "../../../system/model.php";
                        $endereco_id = $conn->query("SELECT * FROM framework.enderecos;");
                        $endereco_id->setFetchMode(PDO::FETCH_ASSOC);

                        while ($linha = $endereco_id->fetch()) {
                            echo "<option value={$linha['id']}> {$linha['titulo']}</option>";
                        }
                        echo "</optgroup>";
                        ?>  
                   
                </select>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('clientes') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
 </div>
 

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>