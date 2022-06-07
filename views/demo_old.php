<?php 
  include 'php/conexao.php';

  $query = $conn->prepare('SELECT a.nome,
                                  a.foto,
                                  b.descricao,
                                  b.quantidade,
                                  c.nome categoria
                          FROM usuario a
                          INNER JOIN necessidade b
                          ON a.id = b.usuario_id
                          INNER JOIN categoria c 
                          ON b.categoria_id = c.id');

  $query->execute();
?>
<section>

  <div class="row">
    <div class="col-sm-4 col-md-3 sidebar navbar">
      <h1 class="text-center h1-lista">Lista de Necessidades</h1>
      <div class="col">
        <div style="margin-top: 0">
          <a class="list-group-item list-group-item-action active text-center">
            <form class="form-inline py-3">
              <i class="fas fa-search" style="color: white;" aria-hidden="true"></i>
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Procure a necessidade"
                aria-label="Search">
            </form>
          </a>
          <a href="#!" class="list-group-item list-group-item-action">Alimentos</a>
          <a href="#!" class="list-group-item list-group-item-action">Serviços</a>
          <a href="#!" class="list-group-item list-group-item-action">Roupas</a>
          <a href="#!" class="list-group-item list-group-item-action">Brinquedos</a>
          <a href="#!" class="list-group-item list-group-item-action">Alimentos</a>
          <a href="#!" class="list-group-item list-group-item-action">Serviços</a>
          <a href="#!" class="list-group-item list-group-item-action">Roupas</a>
          <a href="#!" class="list-group-item list-group-item-action">Brinquedos</a>
          <a href="#!" class="list-group-item list-group-item-action">Alimentos</a>
          <a href="#!" class="list-group-item list-group-item-action">Serviços</a>
          <a href="#!" class="list-group-item list-group-item-action">Roupas</a>
          <a href="#!" class="list-group-item list-group-item-action">Brinquedos</a>
        </div>
      </div>
    </div>
    <div class="col-sm-7 col-md-9 ">
      <h1 class="col py-3 text-center"><strong>Escolha para quem doar</strong></h1>
      <div class="row justify-content-center">
        <?php
        if($necessidade = $query->fetch(PDO::FETCH_ASSOC)){
          do{
          echo "
              <div class=\"col-sm-9 card col-md-3 ml-4\">
                <img class=\"card-img-top\" src=\"fotos/".$necessidade['foto']."\" alt=\"Card image cap\">
                <div class=\"card-body\">
                  <h4 class=\"card-title\"><a>".$necessidade['nome']."</a></h4>
                  <p class=\"card-text\">".$necessidade['descricao']."</p>
                  <a href=\"#\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#modalQuickView\">Comece adoar</button></a>
                </div>    
              </div>
              <div class='col-md-10'>

              <div class='modal fade' id='modalQuickView' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
              aria-hidden='true'>
              <div class='modal-dialog modal-lg' role='document'>
                <div class='modal-content'>
                  <div class='modal-body'>
                    <div class='row'>
                      <div class='col-lg-5'>
        
                        <div id='carousel-thumb' class='carousel slide carousel-fade carousel-thumbnails'
                        data-ride='carousel'>

                        <div class='carousel-inner' role='listbox'>
                          <div class=''>
                            <img class='d-block w-100' src='fotos/1.jpg' alt='First slide'>
                          </div>
    
                        </div>                   
                        </div>
        
                      </div>
                      <div class='col-lg-7'>
                        <h2 class='h2-responsive product-name'>
                          <strong>Nome do produto</strong>
                        </h2>
        
                        <div class='accordion md-accordion' id='accordionEx' role='tablist' aria-multiselectable='true'>
        
                          <div class='card'>
        
                            <div class='card-header' role='tab' id='headingOne1'>
                              <a data-toggle='collapse' data-parent='#accordionEx' href='#collapseOne1' aria-expanded='true'
                                aria-controls='collapseOne1'>
                                <h5 class='mb-0'>
                                  Sobre o item <i class='fas fa-angle-down rotate-icon'></i>
                                </h5>
                              </a>
                            </div>
        
                            <div id='collapseOne1' class='collapse show py-3' role='tabpanel' aria-labelledby=' headingOne1' 
                              data-parent='#accordionEx'>
                              <div class='card-body'>
                                Explicação básico porque esse tipo de item está sendo doado e pra onde e etc
                              </div>
                            </div>
                          </div>
        
                        </div>
         
                        <div class='card-body'>
                          <div class='row'>
                            <div class='col-md-4'>
                              <label>Selecionar quantidade</label>
                            </div>
                            <div class='col-md-8'>
                              <div class='def-number-input number-input safari_only'>
                                <button onclick='this.parentNode.querySelector('input[type=number]').stepDown()'
                                  class='minus'></button>
                                <input class='quantity' min='0' name='quantity' value='1' type='number'>
                                <button onclick='this.parentNode.querySelector('input[type=number]').stepUp()'
                                  class='plus'></button>
                              </div>
                            </div>
                          </div>
                          <div class='text-center'>
                            <button type='button' class='btn btn-secondary' data-dismiss='modal'>Sair</button>
                            <button class='btn btn-primary'>Doar
                            </button>
                          </div>
                        </div>
        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
              ";
            }while($necessidade = $query->fetch(PDO::FETCH_ASSOC));
          }else{
            echo "<h2> Não há entidades cadastradas.</h2>";
          }
        ?>
       
      </div>
    </div>
  </div>
  
</section>