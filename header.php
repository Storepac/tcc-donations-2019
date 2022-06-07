<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Donations</title>
  <link rel="icon shortcut" href="img/logo/fiveicon.png">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
  <!--customização CSS -->
  <link href="css/main.css" rel="stylesheet">
  <!-- CSS DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  <!-- API login google -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <meta name="google-signin-client_id"
    content="537468335237-rktf3jv3ljaf1q01g24h7q7k2fmjnkgk.apps.googleusercontent.com">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Menu -->
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <a class="" href="?pagina=home">
      <img class="logo_img img-fluid" src="img/logo/logo_400x200.png" alt="Doações">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
      data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarResponsive">
      <ul class="navbar-nav ml-auto font-weight-bolder ">
        <li class="nav-item">
          <a class="nav-link" href="?pagina=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=sobre">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=categorias">Necessidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=entidade">Entidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=duvidas">Dúvidas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=noticias">Notícias</a>
        </li>
        <?php if(isset($_SESSION['login'])) { ?>
        <!-- Nav Item - info usuario -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 text-uppercase strong"><?php echo $_SESSION['nome'];?></span>
            <img class="img-profile img-thumbnail" style="width: 50px" src="fotos/<?php echo $_SESSION['foto'];?>">
          </a>
          <!-- Dropdown - Menu do usuario -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="?pagina=resetar_senha">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-black-400" style="color: black;"></i>
              Resetar senha de perfil
            </a>
            <?php if(isset($_SESSION['login']) && $_SESSION['tipo_usuario'] == 'e') { ?>
            <a class="dropdown-item" href="?pagina=cadastrar_necessidade">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-black-400" style="color: black;"></i>
                Cadastrar necessidade
              </a>
              <a class="dropdown-item" href="?pagina=dashboard&entidade=<?php echo $_SESSION['id'];?>">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-black-400" style="color: black;"></i>
                Área do admin
              </a>
              <?php } ?>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#!" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-black-400"></i>
                Sair
              </a>
            </div>          
        </li>
        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair? Não vá :/</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Selecionar "Sair" para encerrar a sessão.</div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="php/logout.php">Sair</a>
              </div>
            </div>
          </div>
        </div>
        <?php } else { ?>
        <li class="nav-item">
          <a class="btn-l_c my-auto" data-toggle="modal" data-target="#elegantModalForm">Acesse sua conta</a>
        </li>
        <li>
          <a href="?pagina=cadastro_usuario" class="btn-l_a my-auto ">Cadastre-se</a>
        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
  <!-- Modal -->
  <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <!--Content-->
      <div class="modal-content form-elegant">
        <!--Header-->
        <div class="modal-header text-center">
          <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Acesse sua
              conta</strong></h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <div class="modal-body mx-4">
          <form action="php/login.php" method="POST">
            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="email" id="Form-email1" class="form-control validate" name="email">
              <label data-error="wrong" data-success="right" for="Form-email1">Seu email</label>
            </div>
            <div class="md-form pb-3">
              <i class="fas fa-lock prefix grey-text"></i>
              <input type="password" id="Form-pass1" class="form-control validate" name="senha">
              <label data-error="wrong" data-success="right" for="Form-pass1">Sua senha</label>
              <p class="font-small blue-text d-flex justify-content-end"><a href="?pagina=esqueceu_senha"
                  class="blue-text ml-1">
                  Esqueci minha Senha</a></p>
            </div>
            <div class="text-center mb-3">
              <button type="submit" class="btn blue-gradient btn-block ">Entre</button>
            </div>
            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> Ou entre com:</p>
            <hr class="my-4">
            <div class="py-2 justify-content-center ">
              <a href="" class="btn btn-google btn-user btn-block">
                <i class="fab fa-google fa-fw"></i> Login com o Google
              </a>
            </div>
            <a href="index.html" class="btn btn-facebook btn-user btn-block">
              <i class="fab fa-facebook-f fa-fw"></i> Login com o Facebook
            </a>
        </div>
        </form>
        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
          <p class="font-small grey-text d-flex justify-content-end">Não tem cadastro? <a
              href="?pagina=cadastro_usuario" class="blue-text ml-1">
              Cadastre-se</a></p>
        </div>
      </div>
      <!--/.Content-->
    </div>
  </div>