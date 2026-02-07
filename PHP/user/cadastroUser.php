<?php
session_start();
include_once '../BANCO/banco.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $matricula = mysqli_real_escape_string($conn, $_POST['matricula']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);

    $sql_check = "SELECT * FROM usuarios WHERE email_user = '$email'";
    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) > 0) {
        echo "<script>
                alert('Erro: Este e-mail já está cadastrado!');
                window.history.back();
              </script>";
    } else {
        $sql_insert = "INSERT INTO usuarios (nome_user, email_user, senha, matricula) 
                       VALUES ('$nome', '$email', '$senha', '$matricula')";

        if (mysqli_query($conn, $sql_insert)) {
            echo "<script>
                    alert('Cadastro realizado com sucesso!');
                    window.location.href='../../HTML/Fluxo_login/cadastro/acessar.html';
                  </script>";
        } else {
            echo "Erro ao cadastrar: " . mysqli_error($conn);
        }
    }
} else {
    header("Location: cadUserHtml.php");
}
?>