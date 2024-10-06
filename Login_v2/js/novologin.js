function fazerLogin() {
    // Obtém os valores do nome de usuário e senha
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    // Verifica o nome de usuário e redireciona para a página apropriada
    if (username.includes("PT")) {
      // Redireciona para a página de planos de treino
      window.location.href = "pagina_planos_de_treino.html";
    } else if (username.includes("NT")) {
      // Redireciona para a página de dietas
      window.location.href = "pagina_dietas.html";
    } else {
      // Nome de usuário inválido, exibe uma mensagem de erro
      alert("Nome de usuário inválido. Não tem permissão para acessar nenhuma página.");
    }
  }
  