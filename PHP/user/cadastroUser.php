<?php
// Caminho para sair da pasta 'user' e entrar em 'BANCO'
include_once '../BANCO/banco.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['tel'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$departamento = $_POST['depar'];

// Proteção básica
$nome = mysqli_real_escape_string($conn, $nome);
$email = mysqli_real_escape_string($conn, $email);

$sql_cadastro = mysqli_query($conn, "INSERT INTO usuarios (nome_user, email_user, cpf, telefone, senha, id_area) VALUES ('$nome','$email','$cpf','$telefone','$senha', '$departamento')");

if ($sql_cadastro == true){
    echo "<script>    
            alert('Usuário cadastrado com sucesso!');
            // Redireciona para a tela de login
            window.location.href='../../HTML/Fluxo_login/cadastro/acessar.html';
          </script>";
} else { 
    echo "<script>    
            alert('Falha ao cadastrar: " . mysqli_error($conn) . "');
            window.location.href='cadUserHtml.php';
          </script>";
}
?>