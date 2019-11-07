
<div id="" class="container" style="background-color: #f2f2f2;">
    <div class="py-5 text-center">
        <h1>Clientes</h1>
    </div>
    <div>
        <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px;"
            class="botaoCliente">
            Novo Cliente</button>

        <div id="modal-wrapper" class="modal">

            <form class="modal-content animate" action="">

                <div class="imgcontainer">
                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close"
                        title="Close PopUp">&times;</span>
                    <h1 style="text-align:center; margin-bottom: 30px; margin-top: 30px;">Cadastro de Cliente</h1>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control caixaAlta" id="nome" placeholder="" value=""
                                required="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder="" value="" required="">
                            <script>
                                jQuery("#cpf").mask("999.999.999-99");
                            </script>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="telefone">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" placeholder="(12)12345-1234" value=""
                                required="">
                            <script>
                                jQuery("#telefone").mask("(99) 99999-9999");
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control caixaAlta" id="email"
                                placeholder="exemplo@exemplo.com" value="" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="logradouro">Logradouro</label>
                            <input type="text" class="form-control caixaAlta" id="logradouro" placeholder="" value=""
                                required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="primeiroNome">Bairro</label>
                            <input type="text" class="form-control caixaAlta" id="bairro" placeholder="" value=""
                                required="">
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="numero">Número</label>
                            <input type="text" class="form-control" id="numero" placeholder="" value="" required="">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="sobrenome">CEP</label>
                            <input type="text" class="form-control" id="cep" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                É obrigatório inserir um CEP válido.
                            </div>
                            <script>
                                jQuery("#cep").mask("99999-999");
                            </script>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cep">Cidade</label>
                            <input type="text" class="form-control caixaAlta" id="cep" placeholder="" required="">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="estado">Estado</label>
                            <select class="custom-select d-block w-100" id="estado" required="">
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
                            <div class="invalid-feedback">
                                Por favor, insira um estado válido.
                            </div>
                        </div>

                    </div>

                    <center><button type="submit" class="btn btn-secondary">Cadastrar</button></center>
                </div>

            </form>

        </div>
        <div class="table" id="tabela">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody style="font-size: 15px;">
                    <?php
                        for($i = 0;$i < 3;$i ++ ){
                                    
                    ?>
                    <tr>
                        <td><i class="fas fa-user-edit" style="margin-top: 10px;"></i><i class="fas fa-trash"
                                style="margin-top: 21px;"></i></td>
                        <td>Marcelo Vilanova Ferreira Junior</td>
                        <td>040.217.923-41</td>
                        <td>dbvmarcelo13@gmail.com</td>
                        <td>(99)98823-5254</td>

                    </tr>
                    <?php
                        }
                        
                    ?>
                </tbody>
            </table>
        </div>






        <script>
            // If user clicks anywhere outside of the , Modal will close

            var modal = document.getElementById('modal-wrapper');
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>
    </div>
</div>