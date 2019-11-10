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
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">NOME
                <input type="text" class="form-control m-0 caixaAlta" name="nome" placeholder="" value="" required>
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">CPF
                <input type="text" class="form-control m-0 caixaAlta" name="cpf" id="cpf" placeholder="" value="" required>
            </p>
            <script>
                jQuery("#cpf").mask("999.999.999-99");
            </script>
        </div>

        <div class="col-sm-3 mb-1">
            <p class="cliente_title">TELEFONE
                <input type="text" class="form-control m-0 caixaAlta" name="telefone" id="telefone" placeholder="" value="" required>
            </p>
            <script>
                jQuery("#telefone").mask("(99) 99999-9999");
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">EMAIL
                <input type="text" class="form-control m-0 caixaAlta" name="email" id="email" placeholder="" value="" required>
            </p>
        </div>
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">LOGRADOURO
                <input type="text" class="form-control m-0 caixaAlta" name="logradouro" id="logradouro" placeholder="" value="" required>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">BAIRRO
                <input type="text" class="form-control m-0 caixaAlta" name="bairro" id="bairro" placeholder="" value="" required>
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">NÚMERO
                <input type="text" class="form-control m-0 caixaAlta" name="numero" id="numero" placeholder="" value="" required>
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">CEP
                <input type="text" class="form-control m-0 caixaAlta" name="cep" id="cep" placeholder="" value="" required>
            </p>
            <script>
                jQuery("#cep").mask("99999-999");
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">CIDADE
                <input type="text" class="form-control m-0 caixaAlta" name="cidade" id="cidade" placeholder="" value="" required>
            </p>
        </div>
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">ESTADO
                <select class="form-control m-0" id="estado" name="estado" method="post" required="">
                <option value="">...</option>
                    <option>AC</option>
                    <option>AL</option>
                    <option>AP</option>
                    <option>AM</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MT</option>
                    <option>MS</option>
                    <option>MG</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PR</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RS</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>SC</option>
                    <option>SP</option>
                    <option>SE</option>
                    <option>TO</option>
                </select>
            </p>
        </div>
    </div>
    <div class="modal-footer pb-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>