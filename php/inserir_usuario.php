<?php

require 'conexao.php';

// USUARIO
$nome = $_POST['nome'];
$cpf_cnpj = $_POST['cpf_cnpj'];
$senha = $_POST['senha'];
$data = date_create($_POST['data_nascimento']);
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];
$tipo_usuario = $_POST['tipo_usuario'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
//informações de exclusivas de entidade
if ($_POST['tipo_usuario'] == 'e'){
    $descricao = $_POST['descricao'];
    $site = $_POST['site'];
}

$data_nascimento = date_format($data,"Y-m-d");

$queryUsuario = $conn->prepare('INSERT INTO usuario(nome, cpf_cnpj, senha, data_nascimento, email, foto, tipo_usuario, endereco, numero, bairro, cep, cidade, uf, telefone, celular) 
                         VALUES(:nome, :cpf_cnpj, :senha, :data_nascimento, :email, :foto, :tipo_usuario, :endereco, :numero, :bairro, :cep, :cidade, :uf, :telefone, :celular)');
$queryUsuario->bindValue('nome',$nome);
$queryUsuario->bindValue('cpf_cnpj',$cpf_cnpj);
$queryUsuario->bindValue('senha',$senha);
$queryUsuario->bindValue('data_nascimento',$data_nascimento);
$queryUsuario->bindValue('email',$email);
$queryUsuario->bindValue('foto',$foto);
$queryUsuario->bindValue('tipo_usuario',$tipo_usuario);
$queryUsuario->bindValue('endereco',$endereco);
$queryUsuario->bindValue('numero',$numero);
$queryUsuario->bindValue('bairro',$bairro);
$queryUsuario->bindValue('cep',$cep);
$queryUsuario->bindValue('cidade',$cidade);
$queryUsuario->bindValue('uf',$uf);
$queryUsuario->bindValue('telefone',$telefone);
$queryUsuario->bindValue('celular',$celular);

if($queryUsuario->execute()== true){
    
    $usuario_id = $conn->lastInsertId();

    if ($_POST['tipo_usuario'] == 'e'){      
      $queryEntidade = $conn->prepare('INSERT INTO entidade(descricao, site, usuario_id)
                                       VALUES(:descricao, :site, :usuario_id)');
      $queryEntidade->bindValue('descricao',$nome);
      $queryEntidade->bindValue('site',$site);
      $queryEntidade->bindValue('usuario_id',$usuario_id);
    }

    require 'upload.php';
    header('location:../index.php?pagina=registro');
} else {
    print_r($queryUsuario->errorInfo());
}

?>