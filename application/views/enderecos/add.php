<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Endereços</h3>
  
    <form action="<?=base_url('enderecos/add')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <input type="number" name="cep" class="form-control" id="cep" placeholder="Digite seu Cep">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Digite o Logradouro">
            </div>
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Digite seu Bairro">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Digite sua Cidade">
            </div>
            <div class="form-group col-md-3">
                <label for="estado">Estado</label>
                <input type="text" name="estado" class="form-control" id="estado" placeholder="Digite sue Estado">
            </div>
        </div>
    
        <hr />

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                <a href="<?=base_url('enderecos')?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>