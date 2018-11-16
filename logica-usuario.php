<?php
    session_start();

    function logaUsuario($email) {
        $_SESSION["usuario_logado"] = $email;
    }

    function usuarioIsLogado() {
        return isset($_SESSION["usuario_logado"]);
    }

    function verificaUsuario() {
      if(!usuarioIsLogado()) {
        $_SESSION['danger'] = "Você não tem acesso a esta funcionalidade.";
        header("Location: index.php");
        die();
      }
    }

    function usuarioLogado() {
        return $_SESSION["usuario_logado"];
    }

    function logout () {
        session_destroy();
        session_start();
    }

?>