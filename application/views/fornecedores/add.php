<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Fornecedor</h3>

    <form action="<?= base_url('fornecedores/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Fornecedor">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cnpj">CNPJ</label>
                <input type="number" name="cnpj" class="form-control" id="cnpj" placeholder="Digite o CNPJ">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">

                <label for="endereco">Endereco</label>
                <select name="endereco_id" id="endereco" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <?php

                        $l=0;
                        while ($l<=$valores[$l]['id']) {
                            try{
                                $idf = $valores[$l]['id'];
                                echo "<option value='$idf'> Bairro: {$valores[$l]['bairro']} - CEP: {$valores[$l]['cep']} </option>";
                                $l++;
                            } catch (Exception $ex) {
                                return $ex->getMessage();
                            }
                       }
                    ?>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('fornecedores') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>
