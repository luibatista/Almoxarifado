<?php
session_start();
include '../BANCO/banco.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "SELECT * FROM usuarios WHERE email_user = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email_recuperacao'] = $email;
    
        header("Location: ../../HTML/Fluxo_login/cadastro/codVerificar.html");
    } else {
        echo "<script>
                alert('E-mail não encontrado no sistema!');
                window.history.back();
              </script>";
    }
}
?>