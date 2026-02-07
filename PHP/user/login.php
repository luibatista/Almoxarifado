<?php
session_start();
include_once '../BANCO/banco.php';

// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Proteção contra SQL Injection
$email = mysqli_real_escape_string($conn, $email);
$senha = mysqli_real_escape_string($conn, $senha);

// Verifica no banco
// IMPORTANTE: Ajuste 'email_user' e 'senha' se os nomes das colunas no seu banco forem diferentes
$sql = "SELECT * FROM usuarios WHERE email_user = '$email' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Login Sucesso
    $row = mysqli_fetch_assoc($result);
    
    $_SESSION['id_user'] = $row['id_user']; // Ajuste para o ID da sua tabela
    $_SESSION['nome'] = $row['nome_user'];
    
    // Redireciona para a Home do Estoque
    header("Location: ../../HTML/Fluxo_estoque/home.php");
} else {
    // Login Falha
    echo "<script>
            alert('E-mail ou senha incorretos!');
            window.location.href='../../HTML/Fluxo_login/cadastro/acessar.html';
          </script>";
}
?>