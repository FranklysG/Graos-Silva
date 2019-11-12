<?php

$veiculo = new Veiculo;
$action = new ControlVeiculo;
$marca = "";
$cor = "";
$placa = "";
$message = "";

$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");
$id = filter_input(INPUT_GET, "id");

if($btnDel){
    $veiculo->setId(filter_input(INPUT_POST, "id"));
    $action->del($veiculo);
    
}

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $veiculo->setId(filter_input(INPUT_POST, "id"));
        $veiculo->setMarca(filter_input(INPUT_POST, "marca"));
        $veiculo->setCor(filter_input(INPUT_POST, "cor"));
        $veiculo->setPlaca(filter_input(INPUT_POST, "placa"));

        $action->edit($veiculo);
    } else {
        $veiculo->setMarca(filter_input(INPUT_POST, "marca"));
        $veiculo->setCor(filter_input(INPUT_POST, "cor"));
        $veiculo->setPlaca(filter_input(INPUT_POST, "placa"));

        $action->add($veiculo);
    }
}

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">MARCA
                <input type="hidden" class="form-control m-0" id="id" name="id">
                <input type="text" class="form-control m-0" id="marca" name="marca" placeholder="SCANIA" value="<?php echo $marca; ?>">
            </p>
        </div>
        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">COR
                <input type="text" class="form-control m-0" id="cor" name="cor" placeholder="BRANCA" value="<?php echo $marca; ?>">
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">PLACA
                <input type="text" class="form-control m-0" id="placa" name="placa" placeholder="XTG 8946" value="<?php echo $marca; ?>">
            </p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>