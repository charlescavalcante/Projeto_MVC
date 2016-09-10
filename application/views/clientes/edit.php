<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Cliente</h3>

    <form action="<?= base_url('clientes/edit') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome" value="<?=$edit_cli['nome']?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control" id="cpf" placeholder="Digite seu cpf" value="<?=$edit_cli['cpf']?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone" value="<?=$edit_cli['telefone']?>">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="renda">Renda</label>
                <input type="number" name="renda" class="form-control" id="renda" placeholder="Digite sua renda" value="<?=$edit_cli['renda']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">

                <label for="endereco">Endereco</label>
                <select name="endereco_id" id="endereco" class="form-control" placeholder="Selecione" >
                    <?php
                    $y = $edit_cli['endereco_id'];
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
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('clientes') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>