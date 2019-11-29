<?php

$produto = new Produto;
$action = new ControlProduto;
$nome = "";
$tipo = "";
$quantidade = "";


$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");
$id = filter_input(INPUT_GET, "id");

if($btnDel){
    $produto->setId(filter_input(INPUT_POST, "id"));
    $action->del($produto);
    echo "<script> window.location.href = window.location.href;</script>";
    
}

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $produto->setId(filter_input(INPUT_POST, "id"));
        $produto->setNome (filter_input(INPUT_POST, "produto"));
        $produto->setTipo (filter_input(INPUT_POST, "tipo"));
        $produto->setQtde(filter_input(INPUT_POST, "quantidade"));

        $action->edit($produto);
        echo "<script> window.location.href = window.location.href;</script>";
    } else {
        $produto->setNome(filter_input(INPUT_POST, "produto"));
        $produto->setTipo(filter_input(INPUT_POST, "tipo"));
        $produto->setQtde(filter_input(INPUT_POST, "quantidade"));

        $action->add($produto);
        echo "<script> window.location.href = window.location.href;</script>";
    }
}

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-4.1 mb-3">
            <p class="produto_title">NOME
                <input type="hidden" class="form-control m-0" id="id" name="id">
                <select class="form-control mt-1" id="produto" name="produto">
                    <option>SOJA</option>
                    <option>FARELO DE SOJA</option>
                    <option>RESIDUO DE SOJA</option>
                    <option>MLHO</option>
                    <option>MILHO EM GRAOS</option>
                    <option>FARELO DE MILHO</option>
                    <option>RESIDUO DE MILHO</option>
                </select>
            </p>
        </div>
        <div class="col-sm-4 mb-3">
            <p class="produto_title">TIPO
                <select class="form-control mt-1" id="tipo" name="tipo">
                    <option>BIG BAG</option>
                    <option>SACO RAFIAS</option>
                    <option>GRANEL</option>
                    
                </select>
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">QUANTIDADE
                <input type="number" class="form-control m-0" id="quantidade" name="quantidade" placeholder="Qtd: ">
            </p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnSalvar" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>