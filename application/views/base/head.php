<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= get_site_title() ?></title>

        <link href="<?= base_assets() ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= base_assets() ?>css/style.css" rel="stylesheet">
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
                <a class="navbar-brand" href="#"><?= get_site_title() ?></a>
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
                    <li style="margin:10px 5px 0 0">
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