<?php
session_start();
include_once '../BANCO/banco.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $categoria = mysqli_real_escape_string($conn, $_POST['categoria']);

    $diretorio = "../../IMG/img_prods/";
    
    if(!is_dir($diretorio)){
        mkdir($diretorio, 0755, true);
    }

    $nome_arquivo = basename($_FILES["imagem"]["name"]);
    $caminho_completo = $diretorio . $nome_arquivo;
    $caminho_banco = "../../IMG/img_prods/" . $nome_arquivo; 

    if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_completo)) {
        
        $sql = "INSERT INTO produtos (nome, categoria, imagem) VALUES ('$nome', '$categoria', '$caminho_banco')";
        
        if (mysqli_query($conn, $sql)) {
            echo "<script>
                    alert('Produto cadastrado com sucesso!');
                    window.location.href='listarProdutos.php';
                  </script>";
        } else {
            echo "Erro no banco: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Erro ao fazer upload da imagem.'); window.history.back();</script>";
    }
} else {
    header("Location: cadProdutoHtml.php");
}
?>