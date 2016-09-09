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

            <form action="<?= base_url('produtos') ?>" method="post">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descricao">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" name="quantidade" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="valor">Valor</label>
                        <input type="number" name="valor" class="form-control" id="valor" placeholder="Valor">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="senha">Categoria_id</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="senha">fornecedor_id</label>
                        <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
                    </div>
                </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="template.html" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>