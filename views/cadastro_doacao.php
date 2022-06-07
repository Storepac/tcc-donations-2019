<?php 
  
  if(isset($_SESSION["mensagem"])){
    echo "<script type='text/javascript'>Swal.fire(
      'Good job!',
      'You clicked the button!',
      'success'
    )</script>";
    unset($_SESSION["mensagem"]);
  } 

  include 'php/conexao.php';

  $id_doacao = $_GET['doacao'];

  $query = $conn->prepare('SELECT a.nome,
                                  a.foto,
                                  b.id,
                                  b.descricao,
                                  b.quantidade,
                                  b.observacao,
                                  c.nome categoria
                          FROM usuario a
                          INNER JOIN necessidade b
                          ON a.id = b.usuario_id
                          INNER JOIN categoria c 
                          ON b.categoria_id = c.id
                          WHERE b.id = '.$id_doacao);

  $query->execute();
  
  $necessidade = $query->fetch(PDO::FETCH_ASSOC);

?>
<section>
  <div class="container flex">
    <div class="row justify-content-center">
      <div class="col-sm-4 col-md-6 py-3">
        <div class="card">
          <div class="card-body">
            <img class="img-fluid" alt="Responsive image" src="fotos/<?php echo $necessidade['foto'];?>" alt="First slide">
          </div>
        </div>
        <div class=" text-center py-3">         
        </div>
      </div>
      <div class="col-sm-4 col-md-6 my-auto">
        <form action="php/inserir_doacao.php" method="POST">
          <div class="modal-body">
            <div class="row">
              <div class="col">
                <h2 class="h2-responsive product-name">
                  <strong> <h2><?php echo $necessidade['nome'];?></h2></strong>
                  <input type="hidden" name="necessidade_id" value="<?php echo $necessidade['id'];?>">
                </h2>
                <div>
                  <div class="card">
                    <div class="card-header">
                      <h5 class="mb-0">
                      <h4 class="card-title"><?php echo $necessidade['descricao'];?></h4>
                      </h5>
                    </div>
                    <div>
                      <div class="card-body">
                      <p class="card-text"><?php echo $necessidade['observacao'];?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body ">
                  <div class="row">
                    <div class="col-md-4">
                      <label>Selecionar quantidade</label>
                    </div>
                    <div class="col-md-8">
                      <div class="def-number-input number-input safari_only">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                          class="minus prevent"></button>
                        <input class="quantidade" min="0" name="quantidade" value="1" type="number">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                          class="plus prevent"></button>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <div class="">
                      <button type="submit" class="btn btn-primary  btn-rounded btn-block">
                        <h5>Doar</h5>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
            <?php if(isset($_SESSION['login']) && $_SESSION['tipo_usuario'] == 'e') { ?>
          <form action="">
          <div class=" text-center">
          <h3>Status da doação</h3>
          <!-- Default unchecked -->
             <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                <label class="custom-control-label" for="defaultUnchecked">Doação Concluida</label>
             </div>
            <button type="button" class="btn btn-success">Ok!</button>
          </div>
          </form>
          <?php } ?>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
