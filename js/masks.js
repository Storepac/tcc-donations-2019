$(document).ready(function() {
    var options_cel =  {
      onKeyPress: function(num, e, field, options_cel){
        var masks = ['(00) 00000-0000', '(00) 0000-00009'];
        var mask = (num.length==15) ? masks[0] : masks[1];
        $('.celular').mask(mask, options_cel);
        console.log(mask);
    }};
      
    $('.celular').mask('(00) 0000-00009', options_cel);
  
    $('.telefone').mask('(00) 0000-0000');  
    $('.data').mask('00/00/0000');
    $('.cep').mask('00.000-000');
  
    var options_doc =  {
      onKeyPress: function(num, e, field, options_doc){
        var masks = ['000.000.000-009', '00.000.000/0000-00'];
        var mask = (num.length<15) ? masks[0] : masks[1];
        $('#cpf_cnpj').mask(mask, options_doc);
        console.log(mask);
    }};
  
    $('#cpf_cnpj').mask('000.000.000-009',options_doc); 
});