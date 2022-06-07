<?php

require 'conexao.php';



// USUARIO
$descricao = $_POST['descricao'];
$data_inicial = date('Y_m_d');
$quantidade = $_POST['quantidade'];
$observacao = $_POST['observacao'];
$categoria_id = $_POST['categoria_id'];
$usuario_id = $_POST['usuario_id'];


$query = $conn->prepare('INSERT INTO necessidade(descricao, data_inicial, quantidade, observacao, categoria_id, usuario_id) 
                         VALUES(:descricao, :data_inicial, :quantidade, :observacao, :categoria_id, :usuario_id)');
$query->bindValue('descricao',$descricao);
$query->bindValue('data_inicial',$data_inicial);
$query->bindValue('quantidade',$quantidade);
$query->bindValue('observacao',$observacao);
$query->bindValue('categoria_id',$categoria_id);
$query->bindValue('usuario_id',$usuario_id);


if($query->execute()== true){    
    header('location:../index.php?pagina=cadastrar_necessidade');
} else {
    print_r($query->errorInfo());
}

?>