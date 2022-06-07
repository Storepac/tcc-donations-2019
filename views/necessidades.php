<?php 
  include 'php/conexao.php';

  $categoria = $_GET['categoria'];

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
                          WHERE c.nome like "'.$categoria.'"');

  $query->execute();


?>
<section>

  <div class="row">
    <div class="col-sm-4 col-md-3 py-5">
      <h1 class="text-center blockquote" style="font-size: 30px;">Lista de Necessidades</h1>
      <div class="col">
        <div >

          <a class="list-group-item list-group-item-action active text-center">
            <form class="form-inline py-3 ">
              <i class="fas fa-search" style="color: white;" aria-hidden="true"></i>
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Procure a necessidade"
                aria-label="Search">
            </form>
          </a>
          <?php
          //inserir conexao
                require "php/conexao.php";

                //criando sql que iria inseiri os dados
                $stmt = $conn->prepare('SELECT * FROM CATEGORIA');
                //executar sql
                $stmt->execute();

                if($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
                  do{
                    echo '<a href="#!" class="list-group-item list-group-item-action">'.$resultado['nome'].'</a>';
                  } while($resultado = $stmt->fetch(PDO::FETCH_ASSOC));
                }else{
                  echo '<p>Não há categorias cadastradas</p>';
                }                  
                ?>          
        </div>
      </div>
    </div>

    <div class="col-sm-3 col-md-8 py-5">
      <h1 class="col py-3 text-center blockquote"><strong>Escolha para quem doar</strong></h1>
      <div class="row justify-content-center ">
       
        <?php
        if($necessidade = $query->fetch(PDO::FETCH_ASSOC)){
          do{
          echo '
          
          <div class="col card col-md-3 my-3 ml-2">
                  <img class="card-img-top img-fluid py-2" src="fotos/'.$necessidade['foto'].'" alt="Card image cap">
                  <div class="card-body text-center">
                    <h4 class="card-title"><a>'.$necessidade['descricao'].'</a></h4>
                    <p class="card-text">'.$necessidade['nome'].'</p>
                    
                    <a href="?pagina=cadastro_doacao&doacao='.$necessidade['id'].'" class="btn btn-primary">Comece adoar</a>
                   
                  </div>  
                    
                </div>
                
                ';
          }while($necessidade = $query->fetch(PDO::FETCH_ASSOC));
        }else{
          echo "<h2> Não há necessidades cadastradas.</h2>";
        }

        ?>
      </div>
      <div class="row justify-content-center py-4">
      <div aria-label="Page navigation">
  <ul class="pagination pg-red">
    <li class="page-item ">
      <a class="page-link" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link">1</a></li>
    <li class="page-item active">
      <a class="page-link">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link">3</a></li>
    <li class="page-item ">
      <a class="page-link">Next</a>
    </li>
  </ul>
      </div>
    </div>
  </div>
  </div>

</section>
<script>
  $('li').click(function() {
    $(this).addClass('active').siblings().removeClass('active');
  });
</script>