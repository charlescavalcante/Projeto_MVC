<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Categoria</h3>

    <form action="<?= base_url('categorias/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="categorias">Categoria</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Categoria">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('categorias') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>



