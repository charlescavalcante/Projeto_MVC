div<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Categotia</h3>

    <form action="<?= base_url('categoria') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="categorias">Categoria</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Categoria">
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