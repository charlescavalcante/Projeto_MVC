<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Pedido</h3>

    <form action="<?= base_url('pedidos/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="cliente">Cliente</label>
                <select name="cliente_id" id="endereco" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <?php
                    $l = 0;
                    while ($l <= $valoresC[$l]['id']) {
                        try {
                            $idf = $valoresC[$l]['id'];
                            echo "<option value='$idf'> Nome: {$valoresC[$l]['nome']} - Telefone: {$valoresC[$l]['telefone']} </option>";
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

                <label for="funcionario">Funcionario</label>
                <select name="funcionario_id" id="endereco" class="form-control" placeholder="Selecione">
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
                <a href="<?= base_url('pedidos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>

</div>
