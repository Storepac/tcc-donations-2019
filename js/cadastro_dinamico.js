// AO SELECIONAR TIPO PESSOA MUDA A MÁSCARA
$("#tipo_usuario").change(function(){
    var tipo_usuario = $('#tipo_usuario').val();
    if(tipo_usuario == "f"){ //fisica
      $('.nome').html('<label for="nome">Nome completo</label> <input type="text" id="nome" name="nome" class="form-control" placeholder="Insira seu nome completo">');
      $('.descricao').html('');
      $('.nascimento').html('Data de nascimento');
    }else if(tipo_usuario == "j"){ //juridica
      $('.nome').html('<label for="nome">Razão social</label> <input type="text" id="nome" name="nome" class="form-control" placeholder="Insira seu nome completo">');
      $('.descricao').html('');
      $('.nascimento').html('Data de fundação');
    }else if(tipo_usuario == "e"){ //entidade
      $('.nome').html('<label for="nome">Nome da entidade</label><input type="text" id="nome" name="nome" class="form-control" placeholder="Insira seu nome completo">');
      $('.nascimento').html('Data de fundação');
      $('.descricao').html('<label for="">Descrição</label> <textarea class="form-control" rows="3" placeholder="Uma breve descrição sobre a organização"></textarea>');
    }
});
