<?php
session_start();
include '../../PHP/BANCO/banco.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limpeza</title>
    <link rel="stylesheet" href="../../assets/index.css">
    <link rel="stylesheet" href="../../assets/pedido.css">
</head>
<body>

    <div class="container">
        <?php include 'header.php'; ?>
        <?php include 'nav.php'; ?>

        <section class="box_itens_search_box">
            <?php include 'nav_section.php'; ?>

            <article class="frame">
                <h3 style="padding: 10px; color: #135911;">Categoria: Limpeza</h3>
                
                <div class="line_frame">
                    <?php 
                    // FILTRA SÓ LIMPEZA
                    $sql = "SELECT * FROM produtos WHERE categoria = 'Limpeza'";
                    $result = mysqli_query($conn, $sql);
                    
                    if(mysqli_num_rows($result) > 0){
                        while($produto = mysqli_fetch_assoc($result)): 
                    ?>
                        <div class="card_product">
                            <div class="image_product">
                                <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
                            </div>
                            <div class="nome_descricao">
                                <p class="decricao"><?php echo $produto['nome']; ?></p>
                                <a class="adicionar" href="#">Adicionar</a>
                            </div>
                        </div>
                    <?php 
                        endwhile; 
                    } else {
                        echo "<p style='padding:20px; color: #666;'>Nenhum item de limpeza cadastrado.</p>";
                    }
                    ?>
                </div>
            </article>
        </section>

        <aside id="menu_requisicao">
            <div id="conteiner_lista">
                <p style="text-align:center; margin-top:20px; color: #999;">Seu carrinho está vazio</p>
            </div>
        </aside>
    </div>
</body>
</html>