<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Cargos</h3>

    <form action="<?=base_url('cargos/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="salario">Salario</label>
                <input type="text" name="salario" class="form-control" id="salario" placeholder="Valor">
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                <a href="<?=base_url('cargos')?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>