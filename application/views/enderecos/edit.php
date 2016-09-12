
<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Endereço</h3>
  
  <form action="<?=base_url('enderecos/edit')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cep">CEP</label>
                <input type="number" name="cep" class="form-control" id="cep" placeholder="Digite seu Cep" value="<?=$edit_end['cep']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Digite o Logradouro" value="<?=$edit_end['logradouro']?>">
            </div>
            <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Digite seu Bairro" value="<?=$edit_end['bairro']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Digite sua Cidade" value="<?=$edit_end['cidade']?>">
            </div>
            <div class="form-group col-md-3">
                <label for="estado">Estado</label>
                <input type="text" name="estado" class="form-control" id="estado" placeholder="Digite sue Estado" value="<?=$edit_end['estado']?>">
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
