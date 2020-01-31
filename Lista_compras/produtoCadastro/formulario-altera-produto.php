<?php require_once("../cabecalho.php") ?>
<div class="col-md-12">
    <h1>Cadastro de produtos</h1>
</div>
<form action="altera-produto.php" method="post" class="form-row">
    <div class="col-md-12 row">
        <div class="col-md-6 form-group">
            <label for="c_nome">Nome</label>
            <input type="text" id="c_nome" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_quantidade">Quantidade</label>
            <input type="text" id="c_quantidade" class="form-control">
        </div>
        <div class="col-md-3 form-group">
            <label for="c_preco">Preço</label>
            <input type="text" id="c_preco" class="form-control">
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>
<div class="col-md-12">
    <a href="http://localhost/teste_pagina_1/index_menu.php" class="btn btn-primary">Voltar</a>
</div>
<?php // Link da pagina para teste -> http://localhost/teste_pagina_1/produtoCadastro/index.php ?>
<?php require_once("../rodape.php") ?>