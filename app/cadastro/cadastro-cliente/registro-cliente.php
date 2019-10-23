<div id ="" class="container" style="background-color: #f2f2f2;">
    <div class="py-5 text-center">
        <h2 >Registro de Cliente</h2>
    </div>
    <div>
        <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px;" class="botaoCliente">
        Novo Cliente</button>

        <div id="modal-wrapper" class="modal">
        
        <form class="modal-content animate" action="/action_page.php">
                
            <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <h1 style="text-align:center; margin-bottom: 30px; margin-top: 30px;">Cadastro de Cliente</h1>
            </div>

            <div class="container">   
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control caixaAlta" id="nome" placeholder="" value="" required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" placeholder="" value="" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control caixaAlta" id="email" placeholder="exemplo@exemplo.com" value="" required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" placeholder="(12)12345-1234" value="" required="" pattern="([0-9]{2})[0-9]{5}-[0-9]{4}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 mb-3">
                        <label for="endereço">Endereço</label>
                        <input type="text" class="form-control caixaAlta" id="endereco" placeholder="" value=""
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
                        <input type="text" class="form-control caixaAlta" id="bairro" placeholder="" value=""
                            required="">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="sobrenome">CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="" value="" required="" >
                        <div class="invalid-feedback">
                            É obrigatório inserir um CEP válido.
                        </div>
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
                <th scope="col">Endereço</th>
                <th scope="col">Número</th>
                <th scope="col">Bairro</th>
                <th scope="col">CEP</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Marcelo Vilanova Ferreira Junior</td>
                <td>040.217.923-41</td>
                <td>dbvmarcelo13@gmail.com</td>
                <td>(99)98823-5254</td>
                <td>Rua Coronel Silva Neto</td>
                <td>35</td>
                <td>Açucena Velha</td>
                <td>65800-000</td>
                <td>Balsas</td>
                <td>Maranhão</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Marcelo Vilanova Ferreira Junior</td>
                <td>040.217.923-41</td>
                <td>dbvmarcelo13@gmail.com</td>
                <td>(99)98823-5254</td>
                <td>Rua Coronel Silva Neto</td>
                <td>35</td>
                <td>Açucena Velha</td>
                <td>65800-000</td>
                <td>Balsas</td>
                <td>Maranhão</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Marcelo Vilanova Ferreira Junior</td>
                <td>040.217.923-41</td>
                <td>dbvmarcelo13@gmail.com</td>
                <td>(99)98823-5254</td>
                <td>Rua Coronel Silva Neto</td>
                <td>35</td>
                <td>Açucena Velha</td>
                <td>65800-000</td>
                <td>Balsas</td>
                <td>Maranhão</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>Marcelo Vilanova Ferreira Junior</td>
                <td>040.217.923-41</td>
                <td>dbvmarcelo13@gmail.com</td>
                <td>(99)98823-5254</td>
                <td>Rua Coronel Silva Neto</td>
                <td>35</td>
                <td>Açucena Velha</td>
                <td>65800-000</td>
                <td>Balsas</td>
                <td>Maranhão</td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>Marcelo Vilanova Ferreira Junior</td>
                <td>040.217.923-41</td>
                <td>dbvmarcelo13@gmail.com</td>
                <td>(99)98823-5254</td>
                <td>Rua Coronel Silva Neto</td>
                <td>35</td>
                <td>Açucena Velha</td>
                <td>65800-000</td>
                <td>Balsas</td>
                <td>Maranhão</td>
                </tr>
            </tbody>
        </table>
    </div>




    

    <script>
    // If user clicks anywhere outside of the , Modal will close

    var modal = document.getElementById('modal-wrapper');
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
    </div>
</div>