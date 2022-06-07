<?php

# Iniciar sessão
session_start();

# Base de dados
include 'php/conexao.php';

# Cabeçalho
include 'header.php';

$pagina = 'home';

# Conteúdo da página
// if(isset($_SESSION['login'])){
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
// }

switch($pagina){
	case 'necessidades': include 'views/necessidades.php'; break;
	case 'cadastrar_necessidade': include 'views/cadastro_necessidade.php'; break;
	case 'cadastro_usuario': include 'views/cadastro_usuario.html'; break;
	case 'sobre': include 'views/sobre.html'; break;
	case 'entidade': include 'views/entidade.php'; break;
	case 'duvidas': include 'views/duvidas.html'; break;
	case 'noticias': include 'views/noticias.html'; break;
	case 'dashboard': include 'views/dashboard.php'; break;
	case 'esqueceu_senha': include 'views/esqueceu_senha.html'; break;
	case 'categorias': include 'views/categorias.html'; break;
	case 'resetar_senha': include 'views/resetar_senha.php'; break;
	case 'perfil_entidade': include 'views/perfil_entidade.php'; break;
	case 'tables': include 'views/tables.html'; break;
	case 'cadastro_doacao': include 'views/cadastro_doacao.php'; break;
	default: include 'views/home.html'; break;
}

# Rodapé
include 'footer.html';