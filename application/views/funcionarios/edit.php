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

            <form action="<?= base_url('funcionarios') ?>" method="post">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="telefone">Telefone</label>
                        <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="horario">Horário</label>
                        <input type="time" name="horario" class="form-control" id="horario" placeholder="Informe seu horario">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="cargo_id">Cargo_id</label>
                        <input type="text" name="cargo_id" class="form-control" id="cargo_id" placeholder="Digite seu cargo_id">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="endereco_id">endereco_id</label>
                        <input type="text" name="endereco_id" class="form-control" id="endereco_id" placeholder="Digite seu endereco_id">
                    </div>
                </div>

        </div>

        <hr />

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