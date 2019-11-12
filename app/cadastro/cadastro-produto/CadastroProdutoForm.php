<?php

/*$newProduto = new Produto;
$editProduto = new Produto;
$action = new ControlProduto;
$nome = "";
$tipo = "";
$quantidade = "";


$Salvar = filter_input(INPUT_POST, "btnSalvar");
$Del = filter_input(INPUT_POST, "btnDel");

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $editVeiculo->setId(filter_input(INPUT_POST, "id"));
        $editVeiculo->setMarca(filter_input(INPUT_POST, "marca"));
        $editVeiculo->setCor(filter_input(INPUT_POST, "cor"));
        $editVeiculo->setPlaca(filter_input(INPUT_POST, "placa"));

        $action->edit($editVeiculo);
    } else {
        $newVeiculo->setMarca(filter_input(INPUT_POST, "marca"));
        $newVeiculo->setCor(filter_input(INPUT_POST, "cor"));
        $newVeiculo->setPlaca(filter_input(INPUT_POST, "placa"));

        $action->add($newVeiculo);
    }
} */

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-4.1 mb-3">
            <p class="veiculo_title">NOME
                <input type="hidden" class="form-control m-0" id="id" name="id">
                <select class="form-control mt-1" id="exampleFormControlSelect2">
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
            <p class="veiculo_title">TIPO
                <select class="form-control mt-1" id="exampleFormControlSelect2">
                    <option>BIG BAG</option>
                    <option>SACO RAFIAS</option>
                    <option>GRANEL</option>
                    
                </select>
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">QUANTIDADE
                <input type="text" class="form-control m-0" id="quantidade" name="quantidade" placeholder="Qtd: " value="<?php //echo $marca; ?>">
            </p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name="Salvar" value="btnSalvar">Salvar</button>
    </div>
</form>