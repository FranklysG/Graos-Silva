<?php

$newVeiculo = new Veiculo;
$action = new ControlVeiculo;
$marca = "";
$cor = "";
$placa = "";
$message = "";

$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$id = filter_input(INPUT_GET, "id");

if ($id) { }
if ($btnSalvar) {
    $newVeiculo->setMarca(filter_input(INPUT_POST, "marca"));
    $newVeiculo->setCor(filter_input(INPUT_POST, "cor"));
    $newVeiculo->setPlaca(filter_input(INPUT_POST, "placa"));

    if ($action->add($newVeiculo)) {
        ?>
            <div class="alert alert-success">
                <strong>Success!</strong> Indicates a successful or positive action.
            </div>
        <?php
    } else {
        ?>
            <div class="alert alert-danger">
                <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
            </div>
        <?php
    }
}

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">MARCA
                <input type="text" class="form-control m-0" name="marca" placeholder="SCANIA" value="<?php echo $marca ?>" required="">
            </p>
        </div>
        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">COR
                <input type="text" class="form-control m-0" name="cor" placeholder="BRANCA" value="<?php echo $cor ?>" required="">
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="veiculo_title">PLACA
                <input type="text" class="form-control m-0" name="placa" placeholder="XTG 8946" value="<?php echo $placa ?>" required="">
            </p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>