<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Cliente</h3>
  
    <form action="<?=base_url('cliente')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="renda">Renda</label>
                <input type="text" name="renda" class="form-control" id="renda" placeholder="renda">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="telefone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control" id="cpf" placeholder="cpf">
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