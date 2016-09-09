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

        <!-- Modal -->
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                    </div>
                    <div class="modal-body">
                        Deseja realmente excluir este item?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Sim</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Visualizar</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?= base_url() ?>">Início</a></li>
                    <li><a href="<?= base_url('enderecos') ?>">Endereços</a></li>
                    <li><a href="<?= base_url('cargos') ?>">Cargos</a></li>
                    <li><a href="<?= base_url('funcionarios') ?>">Funcionários</a></li>
                    <li><a href="<?= base_url('clientes') ?>">Clientes</a></li>
                    <li><a href="<?= base_url('pedidos') ?>">Pedidos</a></li>
                    <li><a href="<?= base_url('fornecedores') ?>">Fornecedores</a></li>
                    <li><a href="<?= base_url('produtos') ?>">Produtos</a></li>
                    <li><a href="<?= base_url('categorias') ?>">Categorias</a></li>
                    <li style="margin:10px 50px 0 0">
                        <div class="dropdown">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="glyphicon glyphicon-cog"></i>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">NomeUsuário</a></li>
                                <li><a href="<?=base_url('usuarios')?>">Usuários</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?=base_url('Usuarios/logout')?>">Sair</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                </div>
            </div>
        </nav>

        <div id="main" class="container-fluid">
            <h3 class="page-header">Visualizar Item #1</h3>

            <div class="row">
                <div class="col-md-4">
                    <p><strong>Campo Um</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                </div>

                <div class="col-md-4">
                    <p><strong>Campo Dois</strong></p>
                    <p>Lorem ipsum dolor</p>
                </div>

                <div class="col-md-4">
                    <p><strong>Campo Três</strong></p>
                    <p>123.456.789-0</p>
                </div>

                <div class="col-md-4">
                    <p><strong>Campo Quatro</strong></p>
                    <p>In vel sollicitudin leo, id fermentum augue.</p>
                </div>

            </div>

            <hr />
            <div id="actions" class="row">
                <div class="col-md-12">
                    <a href="index.html" class="btn btn-primary">Fechar</a>
                    <a href="edit.html" class="btn btn-default">Editar</a>
                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>