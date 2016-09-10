<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Cliente</h3>

    <form action="<?= base_url('cargos/edit') ?>" method="post">
         <div class="row">
            <div class="form-group col-md-4">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição" value="<?=$edit_car['descricao']?>">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="salario">Salario</label>
                <input type="text" name="salario" class="form-control" id="salario" placeholder="Valor" value="<?=$edit_car['valor']?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button type="submit" class="btn btn-primary">Atualizar</button>
                <a href="<?= base_url('cargos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>