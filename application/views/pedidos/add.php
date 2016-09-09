<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Pedido</h3>

    <form action="<?= base_url('pedido') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cliente_id">cliente_id</label>
                <input type="text" name="cliente_id" class="form-control" id="cliente_id" placeholder="cliente_id">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="data_cadastro">data_cadastro</label>
                <input type="text" name="data_cadastro" class="form-control" id="data_cadastro" placeholder="data_cadastro">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="funcionario_id">funcionario_id</label>
                <input type="text" name="funcionario_id" class="form-control" id="funcionario_id" placeholder="funcionario_id">
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