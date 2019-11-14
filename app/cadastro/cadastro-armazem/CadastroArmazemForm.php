<?php

$armazem = new Armazem;
$action = new ControlArmazem;
$id = "";
$nome = "";
$cnpj = "";
$rua = "";
$bairro = "";
$cidade = "";
$cep = "";
$estado = "";
$dtcadastro = "";
$message = "";

$btnSalvar = filter_input(INPUT_POST, "btnSalvar");
$btnDel = filter_input(INPUT_POST, "btnDel");
$id = filter_input(INPUT_GET, "id");

if($btnDel){
    $armazem->setId(filter_input(INPUT_POST, "id"));
    $action->del($armazem);
    
}

if ($btnSalvar) {
    if (filter_input(INPUT_POST, "id")) {
        $armazem->setId(filter_input(INPUT_POST, "id"));
        $armazem->setNome(filter_input(INPUT_POST, "nome"));
        $armazem->setCnpj(filter_input(INPUT_POST, "cnpj"));
        $armazem->setRua(filter_input(INPUT_POST, "rua"));
        $armazem->setBairro(filter_input(INPUT_POST, "bairro"));
        $armazem->setCidade(filter_input(INPUT_POST, "cidade"));
        $armazem->setCep(filter_input(INPUT_POST, "cep"));
        $armazem->setEstado(filter_input(INPUT_POST, "estado"));
       

        $action->edit($armazem);
    } else {

        $armazem->setNome(filter_input(INPUT_POST, "nome"));
        $armazem->setCnpj(filter_input(INPUT_POST, "cnpj"));
        $armazem->setRua(filter_input(INPUT_POST, "rua"));
        $armazem->setBairro(filter_input(INPUT_POST, "bairro"));
        $armazem->setCidade(filter_input(INPUT_POST, "cidade"));
        $armazem->setCep(filter_input(INPUT_POST, "cep"));
        $armazem->setEstado(filter_input(INPUT_POST, "estado"));

        $action->add($armazem);
    }
}

?>

<form class="needs-validation" method="POST">
    <div class="row">
        <div class="col-sm-4 mb-3">
            <p class="armazem_title">NOME
            <input type="hidden" class="form-control m-0" id="id" name="id" placeholder="1"
                    value="<?php echo $id; ?>">
                <input type="text" class="form-control m-0" id="nome" name="nome" placeholder="NOME"
                    value="<?php echo $nome; ?>">
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="armazem_title">CNPJ
                <input type="text" class="form-control m-0" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00"
                    value="<?php echo $cnpj; ?>">
            </p>
        </div>
        <div class="col-sm-4 mb-3">
            <p class="armazem_title">RUA
                <input type="hidden" class="form-control m-0" id="rua" name="rua">
                <input type="text" class="form-control m-0" id="rua" name="rua" placeholder="RUA"
                    value="<?php echo $rua; ?>">
            </p>
        </div>
        <div class="col-sm-4 mb-3">
            <p class="armazem_title">BAIRRO
                <input type="text" class="form-control m-0" id="bairro" name="bairro" placeholder="Bairro"
                    value="<?php echo $bairo; ?>">
            </p>
        </div>

        <div class="col-sm-4 mb-3">
            <p class="armazem_title">CIDADE
                <input type="text" class="form-control m-0" id="cidade" name="cidade" placeholder="CIDADE"
                    value="<?php echo $cidade; ?>">
            </p>
        </div>
        <div class="col-sm-4, mb-3">
            <p class="armazem_title">CEP
                <input type="text" class="form-control m-0" id="cep" name="cep" placeholder="00000-000"
                    value="<?php echo $cep; ?>">
            </p>
        </div>
        <div class="col-sm-6 mb-3">
        <p class="armazem_title">ESTADO
            <select class="form-control m-0" id="estado">
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
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="btnSalvar" value="btnSalvar">Salvar</button>
        </div>
</form>