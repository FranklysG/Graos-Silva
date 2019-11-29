<?php

$entrada = new Entrada;
$action = new ControlEntrada;
$produto = "";
$fornecedor = "";
$armazem = "";
$motorista = "";


$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");
$id = filter_input(INPUT_GET, "id");

if ($btnDel) {
    $entrada->setId(filter_input(INPUT_POST, "id"));
    $action->del($entrada);
    echo "<script> window.location.href = window.location.href;</script>";
}

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $entrada->setId(filter_input(INPUT_POST, "id"));
        $entrada->setProduto(filter_input(INPUT_POST, "produto"));
        $entrada->setFornecedor(filter_input(INPUT_POST, "fornecedor"));
        $entrada->setArmazem(filter_input(INPUT_POST, "armazem"));
        $entrada->setMotorista(filter_input(INPUT_POST, "motorista"));
        $entrada->setChave(filter_input(INPUT_POST, "chave"));
        $entrada->setChaveId(filter_input(INPUT_POST, "chave_id"));

        $action->edit($entrada);
        echo "<script> window.location.href = window.location.href;</script>";
    } else {
        $entrada->setProduto(filter_input(INPUT_POST, "produto"));
        $entrada->setFornecedor(filter_input(INPUT_POST, "fornecedor"));
        $entrada->setArmazem(filter_input(INPUT_POST, "armazem"));
        $entrada->setMotorista(filter_input(INPUT_POST, "motorista"));

        $action->add($entrada);
        echo "<script> window.location.href = window.location.href;</script>";
    }
}

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-12">
            <p class="produto_title">CHAVE DO CARREGAMENTO
                <input type="hidden" class="form-control m-0" id="id" name="id">
                <input type="hidden" class="form-control m-0" id="produto" name="produto">
                <input type="hidden" class="form-control m-0" id="fornecedor" name="fornecedor">
                <input type="hidden" class="form-control m-0" id="motorista" name="motorista">
                <input type="hidden" class="form-control m-0" id="armazem" name="armazem">
                <input type="hidden" class="form-control m-0" id="chave_id" name="chave_id">
                <input type="text" class="form-control m-0" id="chave" name="chave">
                
            </p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnSalvar" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>