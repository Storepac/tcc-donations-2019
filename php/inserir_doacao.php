<?php

  require 'conexao.php';

    session_start();

    $data_inicial = date('Y-m-d');
    $quantidade = $_POST['quantidade'];
    $necessidade_id = $_POST['necessidade_id'];
    $usuario_id = $_SESSION['id'];

    $query = $conn->prepare('INSERT INTO doacao(data_inicial, quantidade, necessidade_id, usuario_id)
                             VALUES(:data_inicial, :quantidade, :necessidade_id, :usuario_id)');
    $query->bindValue('data_inicial',$data_inicial);
    $query->bindValue('quantidade',$quantidade);
    $query->bindValue('necessidade_id',$necessidade_id);
    $query->bindValue('usuario_id',$usuario_id);

    if($query->execute()== true){  
       $_SESSION['mensagem'] = "<h1>Doação enviando com sucesso para a Instituição!</h1>";  
    } else {
       $_SESSION['mensagem'] = "Ocorreu um erro durante o registo, por favor tente novamente";
    }

    header('location:../index.php?pagina=cadastro_doacao&doacao='.$necessidade_id);    

?>