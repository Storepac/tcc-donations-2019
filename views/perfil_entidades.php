<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10">
            <h2>Nome do usuário</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <!--left col-->

            <div class="card">
                <div class="card-body">

               
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-thumbnail"
                    alt="avatar">
                <h6>Mude sua foto de Perfil</h6>
            
                <input type="file" class="text-center center-block file-upload " id="foto" name="foto">
    
              </div>
            </div>

        </div>

            </hr><br>

            <div class="card">
                <div class="card-body">
            <div class="">
                <div class="panel-heading">Seu site <i class="fa fa-link fa-1x" style="color: black;"></i></div>
                <div class="panel-body"><a href="http://bootnipets.com">exdonation.com.br</a></div>
            </div>
        </div>
    </div>
<br>


            <div class="text-center">
                <div class="py-3">Caracteristicas</div>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
                </div>
            </div>

        </div>
        <!--/col-3-->
        <div class="col-sm-9">

            <div class="col text-center">
                    <h2>Dados pessoais</h2>

            </div>

            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <hr>
                    <form class="form" action="##" method="post" id="registrationForm">
                        <div class="form-row mb-6 py-3">
                            <div class="col nome">
                                <label for="nome">Nome completo</label>
                                <!-- NOME -->
                                <input type="text" id="nome" name="nome" class="form-control"
                                    placeholder="Insira seu nome completo">
                            </div>
                            <div class="col-md-4 documento">
                                <label for="documento">Registro de documento</label>
                                <!-- CPF -->
                                <input type="text" id="cpf_cnpj" name="cpf_cnpj" class="form-control" placeholder="CPF"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="descricao"></div>
                        <div class="form-row py-3">
                            <div class="col-md-2">
                                <!--CEP-->
                                <label for="cep">CEP</label>
                                <input type="text" id="cep" name="cep" class="form-control"
                                    placeholder='Digite seu cep em o "-" ' onblur="pesquisacep(this.value);">
                            </div>
                            <div class="col-md-8">
                                <!-- ENDEREÇO -->
                                <label for="endereco">Endereço</label>
                                <input type="text" id="endereco" name="endereco" class="form-control"
                                    placeholder="Endereço">
                            </div>
                            <div class="col-md-2">
                                <!--NUMERO-->
                                <label for="numero">Número </label>
                                <input type="text" id="numero" name="numero" class="form-control"
                                    placeholder="Ex: 811A">
                            </div>
                        </div>
                        <div class="form-row mb-4 py3">
                            <div class="col-md-6">
                                <!--BAIRRO-->
                                <label for="bairro">Bairoo</label>
                                <input type="text" id="bairro" name="bairro" class="form-control"
                                    placeholder="Informe seu bairro">
                            </div>
                            <div class="col-md-4">
                                <!--CIDADE-->
                                <label for="cidade">Cidade</label>
                                <input type="text" id="cidade" name="cidade" class="form-control" placeholder="">
                            </div>
                            <!--UF-->

                            <div class="col-md-2">
                                <label for="uf">Estado</label>
                                <select id="uf" name="uf" class="form-control">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MG">MG</option>
                                    <option value="MS">MS</option>
                                    <option value="MT">MT</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="PR">PR</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <div class="col nascimento">
                                <!-- DATA DE NASCIMENTO -->
                                <label for="">Data de nascimento</label>
                                <input type="date" id="data_nascimento" name="data_nascimento" class="form-control"
                                    placeholder="dd/mm/aaaa">
                            </div>
                            <div class="col">
                                <!-- TELEFONE -->
                                <label for="">Telefone</label>
                                <input type="text" id="telefone" name="telefone" class="form-control"
                                    placeholder="Telefone fixo">
                            </div>
                            <div class="col">
                                <!-- CELULAR -->
                                <label for="celular">Celular</label>
                                <input type="text" id="celular" name="celular" class="form-control"
                                    placeholder="Celular">
                            </div>
                        </div>
                        <div class="form-row mb-4">
                            <!-- E-mail -->

                            <div class="col">
                                <label for="email">E-mail de recuperação</label>
                                <input type="email" id="email" name="email" class="form-control mb-4"
                                    placeholder="E-mail">
                            </div>
                                                       </div>
                        </div>
                        <div class="row justify-content-center">
                            
                        
                        <div class="form-group ">
                                <div class="col-xs-12">
                                    <button class="btn btn-lg btn-success" type="submit"><i class="far fa-save mr-3"></i> Salvar </button>
                                    <button class="btn btn-lg" type="reset" style="color:grey;"><i class="fas fa-ban" style="color: rgb(112, 112, 112);"></i>
                                        Cancelar</button>
                                </div>
                            </div>
                        </div>
                        <hr> 
                    </form>
                </div>
                            </div>

        </div>
        <!--/tab-pane-->
    </div>
    <!--/tab-content-->

</div>
<!--/col-9-->
</div>
<!--/row-->
    <script>
    $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});</script>
                                                      