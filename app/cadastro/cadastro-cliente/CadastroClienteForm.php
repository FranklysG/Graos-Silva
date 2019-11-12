<?php

$cliente = new Cliente;
$action = new ControlCliente;
$nome = "";
$cpf = "";
$telefone = "";
$cep = "";
$email = "";
$logradouro = "";
$numero = "";
$bairro = "";
$cidade = "";
$estado = "";
$message = "";

$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");
$id = filter_input(INPUT_GET, "id");

if ($btnSalvar) {
    if(filter_input(INPUT_POST, "id")){
        $cliente->setId(filter_input(INPUT_POST, "id"));
        $cliente->setNome(filter_input(INPUT_POST, "nome"));
        $cliente->setCpf(filter_input(INPUT_POST, "cpf"));
        $cliente->setTelefone(filter_input(INPUT_POST, "telefone"));
        $cliente->setCep(filter_input(INPUT_POST, "cep"));
        $cliente->setEmail(filter_input(INPUT_POST, "email"));
        $cliente->setLogradouro(filter_input(INPUT_POST, "logradouro"));
        $cliente->setNumero(filter_input(INPUT_POST, "numero"));
        $cliente->setBairro(filter_input(INPUT_POST, "bairro"));
        $cliente->setCidade(filter_input(INPUT_POST, "cidade"));
        $cliente->setEstado(filter_input(INPUT_POST, "estado"));

        $action->edit($editCliente);
    }else{
        $cliente->setNome(filter_input(INPUT_POST, "nome"));
        $cliente->setCpf(filter_input(INPUT_POST, "cpf"));
        $cliente->setTelefone(filter_input(INPUT_POST, "telefone"));
        $cliente->setCep(filter_input(INPUT_POST, "cep"));
        $cliente->setEmail(filter_input(INPUT_POST, "email"));
        $cliente->setLogradouro(filter_input(INPUT_POST, "logradouro"));
        $cliente->setNumero(filter_input(INPUT_POST, "numero"));
        $cliente->setBairro(filter_input(INPUT_POST, "bairro"));
        $cliente->setCidade(filter_input(INPUT_POST, "cidade"));
        $cliente->setEstado(filter_input(INPUT_POST, "estado"));

        $action->add($cliente);
    }
}

?>
<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">NOME
                <input type="text" class="form-control m-0 caixaAlta" id="nome" name="nome" placeholder="" value="<?php echo $nome; ?>" required>
                <input type="hidden" class="form-control m-0 caixaAlta" id="id" name="id">
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">CPF
                <input type="text" class="form-control m-0 caixaAlta" name="cpf" id="cpf" placeholder="" value="<?php echo $cpf; ?>" required>
            </p>
            <script>
                jQuery("#cpf").mask("999.999.999-99");
            </script>
        </div>

        <div class="col-sm-3 mb-1">
            <p class="cliente_title">TELEFONE
                <input type="text" class="form-control m-0 caixaAlta" name="telefone" id="telefone" placeholder="" value="<?php echo $telefone; ?>" required>
            </p>
            <script>
                jQuery("#telefone").mask("(99) 99999-9999");
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">EMAIL
                <input type="text" class="form-control m-0 caixaAlta" name="email" id="email" placeholder="" value="<?php echo $email; ?>" required>
            </p>
        </div>
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">LOGRADOURO
                <input type="text" class="form-control m-0 caixaAlta" name="logradouro" id="logradouro" placeholder="" value="<?php echo $logradouro; ?>" required>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">BAIRRO
                <input type="text" class="form-control m-0 caixaAlta" name="bairro" id="bairro" placeholder="" value="<?php echo $bairro; ?>" required>
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">NÚMERO
                <input type="text" class="form-control m-0 caixaAlta" name="numero" id="numero" placeholder="" value="<?php echo $numero; ?>" required>
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">CEP
                <input type="text" class="form-control m-0 caixaAlta" name="cep" id="cep" placeholder="" value="<?php echo $cep; ?>" required>
            </p>
            <script>
                jQuery("#cep").mask("99999-999");
            </script>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">CIDADE
                <input type="text" class="form-control m-0 caixaAlta" name="cidade" id="cidade" placeholder="" value="<?php echo $cidade; ?>" required>
            </p>
        </div>
        <div class="col-sm-6 mb-1">
            <p class="cliente_title">ESTADO
                <input type="text" class="form-control m-0 caixaAlta" name="estado" id="estado" placeholder="" value="<?php echo $estado; ?>" required>
            </p>
        </div>
    </div>
    <div class="modal-footer pb-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" name="btnSalvar" value="btnSalvar">Salvar</button>
    </div>
</form>