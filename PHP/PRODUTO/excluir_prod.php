<?php
include_once '../BANCO/banco.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query_img = "SELECT imagem FROM produtos WHERE id = $id";
    $res_img = mysqli_query($conn, $query_img);
    if($row = mysqli_fetch_assoc($res_img)){
        if(file_exists($row['imagem'])){
            unlink($row['imagem']);
        }
    }

    $sql = "DELETE FROM produtos WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>window.location.href='listar_prod.php';</script>";
    } else {
        echo "Erro ao excluir: " . mysqli_error($conn);
    }
} else {
    header("Location: listar_prod.php");
}
?>