<?php

$motorista = new Motorista;
$action = new ControlMotorista;
$nome = "";
$cpf = "";
$rg = "";
$logradouro = "";
$bairro = "";
$cidade = "";
$cep = "";
$estado = "";
$veiculo_id = "";
$message = "";

$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");

if ($btnDel) {
    $motorista->setId(filter_input(INPUT_POST, "id"));
    $action->del($motorista);
    echo "<script> window.location.href = window.location.href;</script>";
}

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $motorista->setId(filter_input(INPUT_POST, "id"));
        $motorista->setNome(filter_input(INPUT_POST, "nome"));
        $motorista->setCpf(filter_input(INPUT_POST, "cpf"));
        $motorista->setRg(filter_input(INPUT_POST, "rg"));
        $motorista->setLogradouro(filter_input(INPUT_POST, "logradouro"));
        $motorista->setBairro(filter_input(INPUT_POST, "bairro"));
        $motorista->setCidade(filter_input(INPUT_POST, "cidade"));
        $motorista->setCep(filter_input(INPUT_POST, "cep"));
        $motorista->setEstado(filter_input(INPUT_POST, "estado"));
        $motorista->setVeiculo_id(filter_input(INPUT_POST, "veiculo_id"));

        $action->edit($motorista);
        echo "<script> window.location.href = window.location.href;</script>";
    } else {
        $motorista->setNome(filter_input(INPUT_POST, "nome"));
        $motorista->setCpf(filter_input(INPUT_POST, "cpf"));
        $motorista->setRg(filter_input(INPUT_POST, "rg"));
        $motorista->setLogradouro(filter_input(INPUT_POST, "logradouro"));
        $motorista->setBairro(filter_input(INPUT_POST, "bairro"));
        $motorista->setCidade(filter_input(INPUT_POST, "cidade"));
        $motorista->setCep(filter_input(INPUT_POST, "cep"));
        $motorista->setEstado(filter_input(INPUT_POST, "estado"));
        $motorista->setVeiculo_id(filter_input(INPUT_POST, "veiculo_id"));

        $action->add($motorista);
        echo "<script> window.location.href = window.location.href;</script>";
    }
}

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-4 mb-3">
            <p class="motorista_title">NOME
                <input type="hidden" class="form-control m-0" id="id" name="id">
                <input type="text" class="form-control m-0" id="nome" name="nome" placeholder="NOME" value="<?php echo $nome; ?>">
            </p>
        </div>
        <div class="col-sm-4 mb-3">
            <p class="motorista_title">CPF
                <input type="text" class="form-control m-0" id="cpf" name="cpf" placeholder="CPF" value="<?php echo $cpf; ?>">
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="motorista_title">RG
                <input type="text" class="form-control m-0" id="rg" name="rg" placeholder="RG" value="<?php echo $rg; ?>">
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 mb-3">
            <p class="motorista_title">CIDADE
                <input type="text" class="form-control m-0" id="cidade" name="cidade" placeholder="CIDADE" value="<?php echo $cidade; ?>">
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="motorista_title">BAIRRO
                <input type="text" class="form-control m-0" id="bairro" name="bairro" placeholder="BAIRRO" value="<?php echo $bairro; ?>">
            </p>
        </div>


        <div class="col-sm-4 mb-3">
            <p class="motorista_title">RUA
                <input type="text" class="form-control m-0" id="logradouro" name="logradouro" placeholder="logradouro" value="<?php echo $logradouro; ?>">
            </p>
        </div>


    </div>

    <div class="row">
        <div class="col-sm-4 mb-3">
            <p class="motorista_title">CEP
                <input type="hidden" class="form-control m-0" id="id" name="id">
                <input type="text" class="form-control m-0" id="cep" name="cep" placeholder="CEP" value="<?php echo $cep; ?>">
            </p>
        </div>
        <div class="col-sm-4 mb-3">
            <p class="motorista_title">ESTADO
                <input type="text" class="form-control m-0" id="estado" name="estado" placeholder="ESTADO" value="<?php echo $estado; ?>">
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="produto_title">VEICULO
                <select class="form-control mt-1" id="veiculo_id" name="veiculo_id">
                    <?php

                    $sql = "select * from veiculo";
                    $rows = $conn->sqlRows($sql);

                    foreach ($rows as $row) {
                    ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['marca'] . " / " . $row['placa']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </p>
        </div>
    </div>


    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>