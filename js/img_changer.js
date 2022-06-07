$(document).ready(function() {
  $(".menu_categoria")
    .mouseenter(function () {
      var img = $(this).data("img");
      $("#img_banner").attr("src", "img/categorias/" + img);
    })
    .mouseleave(function () {
      $("#img_banner").attr("src", "img/categorias/pessoas.jpg");
    });
  });
