<?php 
  include 'php/conexao.php';

  $id_entidade = $_GET['entidade'];

  $query = $conn->prepare('SELECT necessidade.descricao, 
  quantidade,
      observacao,
      categoria.nome
      FROM necessidade 
      INNER JOIN categoria 
      ON  necessidade.categoria_id = categoria.id
      WHERE necessidade.usuario_id ='.$id_entidade);

  $query->execute();
  


?>
<div id="wrapper">
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <div class="container">
        <div class="py-5">
          <div>
            <a href="" class="btn btn-danger">Imprimir relatório</a>
          </div>
          <!-- Content Row -->
          <div class="row py-5">
            <!-- Earnings (Monthly) Card Example -->
            <div class=" col-4 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total de doação</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Contador</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-4 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doações pendentes</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Vcontador</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-4 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Arrecadado do mês</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="70"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 ">
              <div class="card shadow mb-4">
                <div id="wrapper">
                  <div id="content-wrapper" class="d-flex flex-column">
                    <div id="content">
                      <div class="container-fluid">
                        <!-- começa a tebala-->
                        <div class="card shadow mb-4">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Doações do mês</h6>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-bordered" id="estatistica_doacoes" width="100%" cellspacing="0">
                                <?php 
                                if($doacoes = $query->fetch(PDO::FETCH_ASSOC)){                    
                                  echo '<thead>
                                          <tr>
                                            <th>Item</th>
                                            <th>Quantidade  </th>
                                            <th>Descrição</th>
                                            <th>Categoria</th>
                                          </tr>
                                        </thead>
                                        <tbody>';
                                  do{
                                    echo '<tr>
                                            <td>'.$doacoes['descricao'].'</td>
                                            <td>'.$doacoes['quantidade'].'</td>
                                            <td>'.$doacoes['observacao'].'</td>
                                            <td>'.$doacoes['nome'].'</td>
                                          </tr>';
                                  }while($doacoes = $query->fetch(PDO::FETCH_ASSOC));
                                }else{
                                  echo'<th> Não existe doações</th>';
                                }
                                echo'</tbody>';
                                ?>


                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="py-3">
                <div class="card">
                  <div class="card-body">
                    <div class="col">
                      <div class="">
                        <div class="card shadow">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Alguma informação</h6>
                          </div>
                          <div class="card-body">
                            <div class="text-center">
                              <img class="img-fluid px-3  col-sm-6 mt-3 mb-4" style="width: 25rem;"
                                src="img/undraw_posting_photo.svg" alt="">
                            </div>
                            <p>qualquer texto</p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="py-5">
                        <div class="card  col col-sm-12 col-md-12 col-lg-12">
                          <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Outra informação</h6>
                          </div>
                          <div class="card-body">
                            <p>Aqui é onde pode ter um gráfico onde mostre a porcentagem dos contadores logo acima desta
                              página
                            </p>
                          </div>
                          <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                              <div class="chartjs-size-monitor">
                                <div class="chartjs-size-monitor-expand">
                                  <div class=""></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink">
                                  <div class=""></div>
                                </div>
                              </div>
                              <canvas id="myPieChart" width="480" height="245" class="chartjs-render-monitor"
                                style="display: block; width: 480px; height: 245px;"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                              <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;"> Total de doação
                                  </font>
                                </font>
                              </span>
                              <span class="mr-2">
                                <i class="fas fa-circle text-success"></i>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;"> Doações pendentes
                                  </font>
                                </font>
                              </span><br>
                              <span class="mr-2">
                                <i class="fas fa-circle text-info"></i>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;"> Arrecadado
                                  </font>
                                </font>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Illustrations -->


                    <!-- Approach -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Page Wrapper -->
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $('#estatistica_doacoes').DataTable({
          "oLanguage" : {
            "sUrl" : "//cdn.datatables.net/plug-ins/1.10.20/i18n/Portuguese-Brasil.json"
          }
        });
      });
    </script>