<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Produto</h3>
  
    <form action="<?=base_url('produtos/add')?>" method="post">
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
            <div class="form-group col-md-4">

                <label for="categoria">Categoria</label>
                <select name="categoria_id" id="endereco" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <?php
                    $l = 0;
                    while ($l <= $valoresC[$l]['id']) {
                        try {
                            $idf = $valoresC[$l]['id'];
                            echo "<option value='$idf'> Nome: {$valoresC[$l]['nome']}</option>";
                            $l++;
                        } catch (Exception $ex) {
                            return $ex->getMessage();
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">

                <label for="fornecedor">Funcionario</label>
                <select name="fornecedor_id" id="fornecedor" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <?php
                    $l = 0;
                    while ($l <= $valoresF[$l]['id']) {
                        try {
                            $idf = $valoresF[$l]['id'];
                            echo "<option value='$idf'> Nome: {$valoresF[$l]['nome']} - Telefone: {$valoresF[$l]['telefone']} </option>";
                            $l++;
                        } catch (Exception $ex) {
                            return $ex->getMessage();
                        }
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>