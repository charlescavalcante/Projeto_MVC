<div id="main" class="container-fluid" style="margin-top: 50px">

    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Usuarios</h2>
        </div>
        <div class="col-sm-6">

            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Usuarios">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>

        </div>
        <div class="col-sm-3">
            <a href="<?=base_url('usuarios/add')?>" class="btn btn-primary pull-right h2">Novo Usuário</a>
        </div>
    </div> <!-- /#top -->


    <hr />
    <div id="list" class="row">

        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Sobrenome</th>
                        <th>Login</th>
                        <th>Grupo</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($valores as $i) {
                    ?>
                        <tr>
                            <td><?= $i['id']?></td>
                            <td><?= $i['nome']?></td>
                            <td><?= $i['sobrenome']?></td>
                            <td><?= $i['login']?></td>
                            <td><?= $i['grupo']?></td>
                            <td class="actions">
                                <a class="btn btn-warning btn-xs" href="<?=base_url('usuarios/view')?>">Visualizar</a>
                                <a class="btn btn-warning btn-xs" href="<?=base_url('usuarios/edit')?>">Editar</a>
                                <a class="btn btn-danger btn-xs"  href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </div> <!-- /#list -->

    <div id="bottom" class="row">
        <div class="col-md-12">
            <ul class="pagination">
                <li class="disabled"><a>&lt; Anterior</a></li>
                <li class="disabled"><a>1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
            </ul><!-- /.pagination -->
        </div>
    </div> <!-- /#bottom -->
</div> <!-- /#main -->

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

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>