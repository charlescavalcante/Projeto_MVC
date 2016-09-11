<div id="main" class="container-fluid">
    <h3 class="page-header">Visualizar </h3>

    <div class="table-responsive col-md-12">
        <table class="table table-striped" cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th>Renda</th>
                    <th>Data Cadastro</th>
                    <th>Endereço ID</th>
                    <th class="actions">Ações</th>
                </tr>
            </thead>
            <?php foreach ($show_cli as $i) {
            ?>
                <tr>
                    <td><?= $i['id']?></td>
                    <td><?= $i['nome']?></td>
                    <td><?= $i['cpf']?></td>
                    <td><?= $i['telefone']?></td>
                    <td><?= $i['renda']?></td>
                    <td><?= $i['data_cadastro']?></td>
                    <td><?= $i['endereco_id']?></td>
                </tr>
            <?php } ?>

        </table>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?=base_url('clientes')?>" class="btn btn-primary">Fechar</a>
            <a href="<?=base_url('clientes/edit/.$i['id']')?>" class="btn btn-default">Editar</a>
            <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>