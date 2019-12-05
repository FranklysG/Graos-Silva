<?php

$saida = new Saida;
$action = new ControlSaida;
$produto = "";
$cliente = "";
$armazem = "";
$motorista = "";


$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");
$id = filter_input(INPUT_GET, "id");

if ($btnDel) {
    $saida->setId(filter_input(INPUT_POST, "id"));
    $action->del($saida);
    echo "<script> window.location.href = window.location.href;</script>";
}

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $saida->setId(filter_input(INPUT_POST, "id"));
        $saida->setProduto(filter_input(INPUT_POST, "produto"));
        $saida->setCliente(filter_input(INPUT_POST, "cliente"));
        $saida->setArmazem(filter_input(INPUT_POST, "armazem"));
        $saida->setMotorista(filter_input(INPUT_POST, "motorista"));

        $action->edit($saida);
        echo "<script> window.location.href = window.location.href;</script>";
    } else {
        $saida->setProduto(filter_input(INPUT_POST, "produto"));
        $saida->setCliente(filter_input(INPUT_POST, "cliente"));
        $saida->setArmazem(filter_input(INPUT_POST, "armazem"));
        $saida->setMotorista(filter_input(INPUT_POST, "motorista"));
        
        $action->add($saida);
        echo "<script> window.location.href = window.location.href;</script>";
    }
}

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-4">
            <p class="produto_title">PRODUTO
                <input type="hidden" class="form-control m-0" id="id" name="id">
                <select class="form-control mt-1" id="produto" name="produto">
                    <?php
                    $conn = new Conn;

                    $sql = "select * from produto";
                    $rows = $conn->sqlRows($sql);

                    foreach ($rows as $row) {
                        ?>
                        <option style="text-transform: uppercase !important;" value="<?php echo $row['id'];?>"><?php echo $row['nome'];?></option>
                    <?php } ?>
                </select>
            </p>
        </div>

        <div class="col-sm-4">
            <p class="produto_title">CLIENTE
                <select class="form-control mt-1" id="cliente" name="cliente">
                <?php
                    $conn = new Conn;

                    $sql = "select * from cliente";
                    $rows = $conn->sqlRows($sql);

                    foreach ($rows as $row) {
                        ?>
                        <option style="text-transform: uppercase !important;" value="<?php echo $row['id'];?>"><?php echo $row['nome'];?></option>
                    <?php } ?>
                </select>
            </p>
        </div>

        <div class="col-sm-4">
            <p class="produto_title">ARMAZÉM
                <select class="form-control mt-1" id="armazem" name="armazem">
                <?php
                    $conn = new Conn;

                    $sql = "select * from armazem";
                    $rows = $conn->sqlRows($sql);

                    foreach ($rows as $row) {
                        ?>
                        <option style="text-transform: uppercase !important;" value="<?php echo $row['id'];?>"><?php echo $row['nome'];?></option>
                    <?php } ?>
                </select>
            </p>
        </div>

        <div class="col-sm-4">
            <p class="produto_title">MOTORISTA
                <select class="form-control mt-1" id="motorista" name="motorista">
                <?php
                    $conn = new Conn;

                    $sql = "select * from motorista";
                    $rows = $conn->sqlRows($sql);

                    foreach ($rows as $row) {
                        ?>
                        <option style="text-transform: uppercase !important;" value="<?php echo $row['id'];?>"><?php echo $row['nome'];?></option>
                    <?php } ?>
                </select>
            </p>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="btnSalvar" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>