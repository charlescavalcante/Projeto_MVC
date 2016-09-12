<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Funcionário</h3>

    <form action="<?=base_url('funcionarios/add')?>" method="post">
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

                <label for="cargo">Cargo</label>
                <select name="cargo_id" id="endereco" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <?php
                    $l = 0;
                    while ($l<= $valCar[$l]['id']) {
                        try {
                            $idf = $valCar[$l]['id'];
                            echo "<option value='$idf'> Descrição: {$valCar[$l]['descricao']} - Salario: {$valCar[$l]['salario']} </option>";
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
                <label for="endereco">Endereco</label>
                <select name="endereco_id" id="endereco" class="form-control" placeholder="Selecione">
                    <option> Selecione</option>
                    <?php
                    $l = 0;
                    while ($l <= $valores[$l]['id']) {
                        try {
                            $idf = $valores[$l]['id'];
                            echo "<option value='$idf'> Logradouro: {$valores[$l]['logradouro']} - Bairro: {$valores[$l]['bairro']} </option>";
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
                <a href="<?= base_url('funcionarios') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>