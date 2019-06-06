$(".botaoPesquisar").mouseover(function() {
  $("#avisoJS").html("<i>(Se o campo estiver em branco, todos os pedidos serão exibidos)</i>");
});

$(".botaoPesquisar").mouseout(function() {
  $("#avisoJS").html(" ");
});
