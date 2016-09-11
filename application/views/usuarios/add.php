<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Usuário</h3>
  
    <form action="<?=base_url('usuarios/add')?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu Nome">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Digite seu Sobrenome">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="login">Login</label>
                <input type="text" name="login" class="form-control" id="login" placeholder="Digite seu login">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-3">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Digite sua senha">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-4">
                <label for="grupo">Grupo</label>
                <select name="grupo" id="grupo" class="form-control">
                    <option> Selecione</option>
                    <option value="gerente" > Gerencia</option>
                    <option value="financa" > Financeiro</option>
                    <option value="diretor" > Diretoria</option>
                    <option value="ti" > Informática</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="submit" />
                <button name="submit" type="submit" class="btn btn-primary">Salvar</button>
                <a href="<?=base_url('usuarios')?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>