$(document).ready(function () {

  $(".numero").keypress(function (e) {
    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
      return false;
    }
  });

  var options =  {onKeyPress: function(cep, e, field, options){
    var masks = ['(00) 0000-00009', '(00) 00000-0000'];
      mask = (cep.length<15) ? masks[0] : masks[1];
    $('.telefone ').mask(mask, options);
  }};
  
  $('.telefone').mask('(00) 0000-00009', options);
  $('.data').mask('00/00/0000');
  $('.cep').mask('00.000-000');

  $(".menu_categoria")
    .mouseenter(function () {
      var img = $(this).data("img");
      $("#img_banner").attr("src", "img/categorias/" + img);
    })
    .mouseleave(function () {
      $("#img_banner").attr("src", "img/categorias/pessoas.jpg");
    });
});

