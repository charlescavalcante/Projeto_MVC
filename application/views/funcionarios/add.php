<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Funcionário</h3>
  
    <form action="<?=base_url('funcionarios')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="horario">Horário</label>
                <input type="time" name="horario" class="form-control" id="horario" placeholder="Informe seu horario">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="cargo_id">Cargo_id</label>
                <input type="text" name="cargo_id" class="form-control" id="cargo_id" placeholder="Digite seu cargo_id">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="endereco_id">endereco_id</label>
                <input type="text" name="endereco_id" class="form-control" id="endereco_id" placeholder="Digite seu endereco_id">
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