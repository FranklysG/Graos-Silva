<link rel="stylesheet" href="../../lib/css/style-cadastro-cliente.css">
<div id ="teste" class="container" style="background-color: #f2f2f2;">
    <div class="py-5 text-center">
        <h2 >Cadastro de Cliente</h2>
    </div>

    <div class="row" style="margin-left: 30px; margin-right: 30px;">
        <div class="col-md-12 order-md-1">
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="primeiroNome">Nome</label>
                        <input type="text" class="form-control" id="primeiroNome" placeholder="" value=""
                            required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um nome válido.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um Sobrenome válido.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="primeiroNome">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="" value=""
                            required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um CPF válido.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sobrenome">RG</label>
                        <input type="text" class="form-control" id="rg" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um RG válido.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com" value=""
                            required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um endereço válido.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" placeholder="(12)12345-1234" value="" required="" pattern="([0-9]{2})[0-9]{5}-[0-9]{4}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 mb-3">
                        <label for="endereço">Endereço</label>
                        <input type="text" class="form-control" id="endereco" placeholder="" value=""
                            required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um endereço válido.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="numero">Número</label>
                        <input type="text" class="form-control" id="numero" placeholder="" value="" required="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="primeiroNome">Bairro</label>
                        <input type="text" class="form-control" id="bairro" placeholder="" value=""
                            required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="sobrenome">CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            É obrigatório inserir um CEP válido.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                            <label for="cep">Cidade</label>
                            <input type="text" class="form-control" id="cep" placeholder="" required="">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="estado">Estado</label>
                        <select class="custom-select d-block w-100" id="estado" required="">
                            <option value="">...</option>
                            <option>Acre</option>
                            <option>Alagoas</option>
                            <option>Amapá</option>
                            <option>Amazonas</option>
                            <option>Bahia</option>
                            <option>Ceará</option>
                            <option>Distrito Federal</option>
                            <option>Espírito Santo</option>
                            <option>Goiás</option>
                            <option>Maranhão</option>
                            <option>Mato Grosso</option>
                            <option>Mato Grosso do Sul</option>
                            <option>Minas Gerais</option>
                            <option>Pará</option>
                            <option>Paraíba</option>
                            <option>Paraná</option>
                            <option>Pernambuco</option>
                            <option>Piauí</option>
                            <option>Rio de Janeiro</option>
                            <option>Rio Grande do Norte</option>
                            <option>Rio Grande do Sul</option>
                            <option>Rondônia</option>
                            <option>Roraima</option>
                            <option>Santa Catarina</option>
                            <option>São Paulo</option>
                            <option>Sergipe</option>
                            <option>Tocantins</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, insira um estado válido.
                        </div>
                    </div>
                    
                </div>

                <center style="margin-top: 20px;"><button type="submit" class="btn btn-secondary">Cadastrar</button></center>
                <hr class="mb-4">
            </form>
        </div>
    </div>
</div>