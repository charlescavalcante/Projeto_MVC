<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Funcionario</h3>

    <form action="<?= base_url('funcionarios/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome" value="<?=$edit_fun['nome']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="number" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone" value="<?=$edit_fun['telefone']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">

                <label for="cargo">Cargo</label>
                <select name="cargo_id" id="endereco" class="form-control" placeholder="Selecione" >
                    <?php
                    $y = $edit_fun['cargo_id'];
                    foreach ($valoresC as $i) {
                        if ($i['id'] == $y) {
                            echo"<option value='" . $i['id'] . "' selected='selected'> Bairro:" . $i['bairro'] . "CEP:" . $i['cep'] . "</option>";

                        } else {
                            echo"<option value='" . $i['id'] . "'> Bairro:" . $i['bairro'] . "CEP:" . $i['cep'] . "</option>";
                        }

                    } ?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">

                <label for="endereco">Endereco</label>
                <select name="endereco_id" id="endereco" class="form-control" placeholder="Selecione" >
                    <?php
                    $y = $edit_fun['endereco_id'];
                    foreach ($valoresE as $i) {
                        if ($i['id'] == $y) {
                            echo"<option value='" . $i['id'] . "' selected='selected'> Bairro:" . $i['bairro'] . "CEP:" . $i['cep'] . "</option>";

                        } else {
                            echo"<option value='" . $i['id'] . "'> Bairro:" . $i['bairro'] . "CEP:" . $i['cep'] . "</option>";
                        }

                    } ?>

                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" name="submit" class="btn btn-primary">Salvar</button>
                <a href="<?=base_url('funcionarios')?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>