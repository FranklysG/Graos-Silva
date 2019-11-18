<?php

$cliente = new Cliente;
$action = new ControlCliente;
$nome = "";
$cpf = "";
$telefone = "";
$cep = "";
$email = "";
$logradouro = "";
$bairro = "";
$cidade = "";
$estado = "";
$message = "";

$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");
$id = filter_input(INPUT_GET, "id");

if($btnDel){
    $cliente->setId(filter_input(INPUT_POST, "id"));
    $action->del($cliente);
    
}

if ($btnSalvar) {
    if(filter_input(INPUT_POST, "id")){
        $cliente->setId(filter_input(INPUT_POST, "id"));
        $cliente->setNome(filter_input(INPUT_POST, "nome"));
        $cliente->setCpf(filter_input(INPUT_POST, "cpf"));
        $cliente->setTelefone(filter_input(INPUT_POST, "telefone"));
        $cliente->setCep(filter_input(INPUT_POST, "cep"));
        $cliente->setEmail(filter_input(INPUT_POST, "email"));
        $cliente->setLogradouro(filter_input(INPUT_POST, "logradouro"));
        $cliente->setBairro(filter_input(INPUT_POST, "bairro"));
        $cliente->setCidade(filter_input(INPUT_POST, "cidade"));
        $cliente->setEstado(filter_input(INPUT_POST, "estado"));

        $action->edit($cliente);
    }else{
        $cliente->setNome(filter_input(INPUT_POST, "nome"));
        $cliente->setCpf(filter_input(INPUT_POST, "cpf"));
        $cliente->setTelefone(filter_input(INPUT_POST, "telefone"));
        $cliente->setCep(filter_input(INPUT_POST, "cep"));
        $cliente->setEmail(filter_input(INPUT_POST, "email"));
        $cliente->setLogradouro(filter_input(INPUT_POST, "logradouro"));
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
                <input type="hidden" class="form-control m-0 caixaAlta" id="id" name="id">
                <input type="text" class="form-control m-0 caixaAlta" id="nome" name="nome" placeholder="" value="<?php echo $nome; ?>" required>
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">CPF
                <input type="text" class="form-control m-0 caixaAlta" name="cpf" id="cpf" placeholder="" value="<?php echo $cpf; ?>" required>
            </p>
        </div>

        <div class="col-sm-3 mb-1">
            <p class="cliente_title">TELEFONE
                <input type="text" class="form-control m-0 caixaAlta" name="telefone" id="telefone" placeholder="" value="<?php echo $telefone; ?>" required>
            </p>
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
        <div class="col-sm-9 mb-1">
            <p class="cliente_title">BAIRRO
                <input type="text" class="form-control m-0 caixaAlta" name="bairro" id="bairro" placeholder="" value="<?php echo $bairro; ?>" required>
            </p>
        </div>
        <div class="col-sm-3 mb-1">
            <p class="cliente_title">CEP
                <input type="text" class="form-control m-0 caixaAlta" name="cep" id="cep" placeholder="" value="<?php echo $cep; ?>" required>
            </p>
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
                
                <select class="form-control m-0 caixaAlta" name="estado" id="estado" placeholder="" value="<?php echo $estado; ?>" required>
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