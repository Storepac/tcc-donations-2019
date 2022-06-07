<?php
  if(empty($_FILES['foto'])){ 
    $foto = null;
  }else{
    $foto = $_FILES['foto']; 
  }

  if(!empty($foto["tmp_name"])) {
    $nome_arquivo = date('Y_m_d')."_".$usuario_id.".jpg";
    $query = $conn->prepare('UPDATE usuario SET foto = :nome_arquivo WHERE id = :usuario_id');
    $query->bindValue('nome_arquivo',$nome_arquivo);
    $query->bindValue('usuario_id',$usuario_id);

    $query->execute();

    if (is_uploaded_file($foto['tmp_name'])){
      move_uploaded_file($foto['tmp_name'],"../fotos/".$nome_arquivo);
    }
  }

?>