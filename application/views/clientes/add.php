<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Cliente</h3>

    <form action="<?= base_url('clientes/add') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" class="form-control" id="cpf" placeholder="Digite seu cpf">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite seu telefone">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="renda">Renda</label>
                <input type="number" name="renda" class="form-control" id="renda" placeholder="Digite sua renda">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">

                <label for="endereco">Endereco</label>

                <select  name="endereco_id">
                    <optgroup  label="Endereco">
                        <?php
                        require_once "../../../system/model.php";
                        $endereco_id = $conn->query("SELECT * FROM framework.enderecos;");
                        $endereco_id->setFetchMode(PDO::FETCH_ASSOC);

                        while ($linha = $endereco_id->fetch()) {
                            echo "<option value={$linha['id']}> {$linha['titulo']}</option>";
                        }
                        echo "</optgroup>";
                        ?>  
                   
                </select>
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?= base_url('clientes') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
</div>