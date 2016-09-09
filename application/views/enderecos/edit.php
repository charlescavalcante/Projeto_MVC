
<div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Endereço</h3>
  
  <form action="<?= base_url('enderecos/add')?>" method="post">
  	<div class="row">
<!--          <div class="form-group col-md-4">
  	  	<label for="id">Id</label>
                <input type="number"  class="form-control" id="id" placeholder="Id">
  	  </div>-->
	  <div class="form-group col-md-4">
  	  	<label for="cep">Cep</label>
                <input type="number" name="cep" class="form-control" id="cep" placeholder="CEP">
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="logradouro">Logradouro</label>
                <input type="text" name="logradouro" class="form-control" id="logradouro" placeholder="Logradouro">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="bairro">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="cidade">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade">
  	  </div>
          <div class="form-group col-md-4">
  	  	<label for="estado">Estado</label>
                <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado">
  	  </div>
          <!-- data cadastro e endereço_id -->
	</div>
	
	<hr>
	
	<div class="row">
	  <div class="col-md-12">
	  	<button name="submit" type="submit" class="btn btn-primary">Salvar</button>
		<a href="<?= base_url('enderecos')?>" class="btn btn-default">Cancelar</a>

	  </div>
	</div>

  </form>
 </div>
