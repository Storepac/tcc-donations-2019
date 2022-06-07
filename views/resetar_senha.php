<?php 
  include 'php/conexao.php';
  ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block ">
                    <div class="col  ">
                            <!-- Card image -->
                            <img class="card-img-top" src="fotos/<?php echo $_SESSION['foto'];?>" alt="Card image cap">
                        
                            <!-- Card content -->
                            <div class="card-body">
                        
                              <!-- Title -->
                              <h4 class="card-title text-center"><a><?php echo $_SESSION['nome'];?></a></h4>
                              <!-- Text -->
                              
                            
                        
                            </div>
                        
                          </div>
              </div>
              <div class="col-lg-6">
                <div class="  p-5">
                  <div class="">
                    <h1 class="h4 text-gray-900 mb-2">Senha</h1>
                  </div>
                  <form class="user">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Digite nova senha">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="exempleInputPassword" aria-labelledby="" placeholder="Confirma senha">
                    </div>
                    <a href="#basicExampleModal" class="btn btn-primary btn-user btn-block" data-toggle="modal" data-target="#basicExampleModal">
                      Resetar senha
                    </a>
                  </form>
                      <!-- Modal -->
                      <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Sua nova senha foi alterada</h5>
                            </div>
                            <div class="modal-body">
                              <p>Sua senha foi alterada com sucesso, faça o login e altere sua senha temporária</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-success" data-dismiss="modal">Sair</button>
                            </div>
                          </div>
                        </div>
                      </div>              <!-- Button trigger modal -->

                  <hr>                  
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>