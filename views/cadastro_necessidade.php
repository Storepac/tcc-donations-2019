<?php
    require 'php/conexao.php';
  
    $query = $conn->prepare('SELECT ID, NOME FROM categoria');

    $query->execute();
  ?>
<section id="register">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <!-- Default form register -->
        <form class=" border border-light p-5" action="php/inserir_necessidade.php" method="POST"
          enctype="multipart/form-data">
          <p class="h4 text-center">Cadastro de necessidades</p>
          <input type="hidden" value="<?php echo "{$_SESSION['id']}";?>" name="usuario_id"></label>
          <select name="categoria_id" id="categoria_id" class="browser-default custom-select col-md-3 ">
            <option value="">Categoria</option>
            <?php
              if($resultado = $query->fetch(PDO::FETCH_ASSOC)){
                do{ 
                  echo '<option value="'.$resultado['ID'].'">'.$resultado['NOME'].'</option>';
                }while($resultado = $query->fetch(PDO::FETCH_ASSOC));
              }?>
          </select>          
          <div class="form-row mb-6 py-3">
            <div class="col">
              <!-- Descrição -->
              <label for="nome">Descrição</label>
              <input type="text" id="descricao" name="descricao" class="form-control">
            </div>
            <div class="col-md-4">
              <!-- Quantidade -->
              <label for="quantidade">Quantidade</label>
              <input type="text" id="quantidade" name="quantidade" class="form-control numero" autocomplete="off">
                <small id="errmsg"></small>
            </div>
            <div class="col-md-2">
              <!-- Quantidade -->
              <label for="quantidade" class="invisible">Quantidade</label>
              <input type="text" id="quantidade" name="quantidade" class="form-control numero" autocomplete="off">
                <small id="errmsg"></small>
            </div>
          </div>
          <div class="form-row py-3">
            <div class="col">
              <label for="observacoes">Observações</label>
              <textarea id="observacao" name="observacao" class="form-control mb-4" rows="5"></textarea>
            </div>
          </div>
          <button class="btn btn-info my-4 btn-block" type="submit" name="ok">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>
</section>
<script src="js/masks.js"></script>