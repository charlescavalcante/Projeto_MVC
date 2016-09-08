<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Produto</h3>
  
    <form action="<?=base_url('produtos')?>" method="post">
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

        <hr />

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="template.html" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>