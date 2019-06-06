$(document).on("click", "#entrarLogin", function(){
  var usuario = $("#loginUsuario").val();
  var senha = $("#loginSenha").val();

  if((usuario != 'admin') && (senha != "12345")){
    $("#escritaModal").text("Usuário e senha inválido. Tente novamente");
    $("#loginUsuario").val("");
    $("#loginSenha").val("");
  } else if(usuario != "admin") {
    $("#escritaModal").text("Usuário inválido. Tente novamente");
    $("#loginUsuario").val("");
  } else if((usuario  == "admin") && (senha == "12345")){
    $("#escritaModal").text("Parabéns, logado com sucesso.")
    $(document).on("click", ".outraPagina", function(){
      $(location).attr('href', 'principal.html')
    });
  } else if(senha != "12345"){
    $("#escritaModal").text("Senha inválida. Tente novamente.");
    $("#loginSenha").val("");
  }

  $("#loginModal").modal("show");
})
