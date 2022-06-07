<?php

include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $conn->prepare('SELECT id, nome, foto, tipo_usuario FROM usuario WHERE email = :email AND senha = :senha');
$query->bindValue('email',$email);
$query->bindValue('senha',$senha);

$query->execute();

if($resultado = $query->fetch(PDO::FETCH_ASSOC)){  
  session_start();
  $_SESSION['login'] = true;
  $_SESSION['id'] = $resultado['id'];
  $_SESSION['nome'] = $resultado['nome'];
  $_SESSION['foto'] = $resultado['foto'];
  $_SESSION['tipo_usuario'] = $resultado['tipo_usuario'];
}

header('location:../index.php');

