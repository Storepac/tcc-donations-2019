<?php

include 'conexao.php';

#addslashes proteção contra SQL injection, add barra em carac. especiais
$usuario = addslashes($_POST['email']);

#Criptografia md5
// $senha = md5($_POST['senha']);
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE email = '$usuario' AND senha = '$senha'";

$consulta = mysqli_query($conn, $query);

//if(mysqli_num_rows($consulta) == 1){
  
  session_start();
  $_SESSION['login'] = true;
  $_SESSION['usuario'] = $usuario;

  header('location:./index.php?pagina=home');
//}
//else{
  ////header('location:index.php?erro=1');
//}