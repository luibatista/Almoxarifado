<?php
session_start();
include '../BANCO/banco.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];

    if (!isset($_SESSION['email_recuperacao'])) {
        echo "<script>
                alert('Sessão expirada. Comece a recuperação novamente.');
                window.location.href='../../HTML/Fluxo_login/cadastro/recuperar.html';
              </script>";
        exit();
    }

    $email = $_SESSION['email_recuperacao'];

    if ($senha1 === $senha2) {
        $sql = "UPDATE usuarios SET senha = '$senha1' WHERE email_user = '$email'";

        if (mysqli_query($conn, $sql)) {
            session_destroy();
            echo "<script>
                    alert('Senha alterada com sucesso!');
                    window.location.href='../../HTML/Fluxo_login/cadastro/acessar.html';
                  </script>";
        } else {
            echo "Erro ao atualizar: " . mysqli_error($conn);
        }
    } else {
        echo "<script>
                alert('As senhas não coincidem!');
                window.history.back();
              </script>";
    }
}
?>