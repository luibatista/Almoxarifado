<?php
include_once '../BANCO/banco.php';

$sql = "SELECT * FROM produtos";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciar Produtos</title>
    <link rel="stylesheet" href="../../assets/index.css">
    <link rel="stylesheet" href="../../assets/pedido.css">
    <style>
        /* Pequenos ajustes para a página de admin */
        body { padding: 40px; background-color: #f9f9f9; }
        .header-admin { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        .btn-new { background-color: #379936; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-family: 'Poppins', sans-serif; }
        .btn-home { background-color: #007bff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-family: 'Poppins', sans-serif; }
        
        /* Reutilizando as classes da tua tabela de pedidos */
        .table_admin { width: 100%; border-collapse: collapse; background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .table_admin th, .table_admin td { padding: 15px; text-align: left; border-bottom: 1px solid #eee; font-family: 'Raleway', sans-serif; }
        .table_admin th { background-color: #f1f1f1; font-weight: 600; color: #333; }
        
        .img-mini { width: 50px; height: 50px; object-fit: contain; }
        .btn-delete { color: #C91517; font-weight: bold; text-decoration: none; }
        .btn-delete:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="header-admin">
        <h2 style="font-family: 'Poppins', sans-serif;">Gerenciar Estoque</h2>
        <div>
            <a href="../../HTML/Fluxo_estoque/home.php" class="btn-home">Ir para o Site</a>
            <a href="cadProdutoHtml.php" class="btn-new">+ Novo Produto</a>
        </div>
    </div>

    <table class="table_admin">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagem</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><img src="<?php echo $row['imagem']; ?>" class="img-mini"></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
                <td>
                    <a href="excluirProduto.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Tem certeza?');">Excluir</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>