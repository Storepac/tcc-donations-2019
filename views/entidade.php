<?php 
  include 'php/conexao.php';

  $query = $conn->prepare('SELECT id, nome, foto FROM usuario WHERE tipo_usuario = "e"');

  $query->execute();
?>

<header class="container">
  <h3 class="text-center">
    Área onde se pode encontrar as instituições que necessitam de ajuda.
  </h3>
</header>
<section id="necessidade" class="py-5 ">
  <div class="container w-75 ">
    <h1 class="text-center py-5">Entidades</h1>
    <div class="row justify-content-center  py-5">
      <?php
        if($entidade = $query->fetch(PDO::FETCH_ASSOC)){
          do{
          echo '<div class="col-sm-6 col-md-4 py-2">
                  <div class="card-deck">
                    <div class="card py-3">
                      <div class="view overlay text-center">
                        <a href="?pagina=perfil_entidade&entidade='.$entidade['id'].'" class="card-img-top"  style="color: black; href="">
                          <img class="img-fluid justify-content-center py-3"" alt="Responsive image" src="fotos/'.$entidade['foto'].'" alt="'.$entidade['nome'].'">
                          <h2 >'.$entidade['nome'].'</h2>
                        </a>
                      </div>
                    </div>
                  </div>              
                </div>';
          }while($entidade = $query->fetch(PDO::FETCH_ASSOC));
        }else{
          echo '<h2> Não há entidades cadastradas.</h2>';
        }
      ?>
      </div>
        <!--  <div class='card ml-4' style='width: 18rem; height: auto;'>".
          "<a class='font-weight-bold' href=''>".
          "<img class='img-fluid' src='./fotos/".$entidade['foto']."' alt='".$entidade['nome']."' >".
          "<h2 >".$entidade['nome']."</h2>".
          "</a>".
          "</div>
           -->
        </div>
      </div>
</section>