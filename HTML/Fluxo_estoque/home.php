<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almoxarifado - Requisição</title>

    <link rel="stylesheet" href="../../assets/index.css">
    <link rel="stylesheet" href="../../assets/pedido.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Raleway:wght@200;500&display=swap" rel="stylesheet">
</head>

<body>
    <?php require_once 'dados.php'; ?>

    <div class="container">
        <?php
        // Includes opcionais (verifique se esses arquivos existem e não têm erros)
        // Se der erro, comente as linhas abaixo temporariamente
        include 'header.php';
        include 'nav.php';
        ?>

        <section class="box_itens_search_box">
            
            <?php include 'nav_section.php'; ?>

            <article class="frame">
                <div class="line_frame" style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: flex-start;">
                    
                    <?php foreach ($produtos as $produto): ?>
                        <div class="card_product">
                            <div class="image_product">
                                <div class="size_img">
                                    <img src="<?php echo file_exists($produto['imagem']) ? $produto['imagem'] : '../../IMG/img_prods/Placeholder.png'; ?>" 
                                         alt="<?php echo $produto['nome']; ?>">
                                </div>
                            </div>
                            <div class="nome_descricao">
                                <p class="decricao"><?php echo $produto['nome']; ?></p>
                                
                                <a class="adicionar btn-add-cart" 
                                   href="#" 
                                   data-id="<?php echo $produto['id']; ?>" 
                                   data-nome="<?php echo $produto['nome']; ?>"
                                   data-img="<?php echo $produto['imagem']; ?>">
                                   Adicionar
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </article>
        </section>

        <aside id="menu_requisicao">
            <div id="conteiner_detalhes">
                <p id="text_conteiner_detalhes">Detalhes da requisição</p>
                <form action="#" id="detalhes_descricao">
                    <input class="imp_descricao" type="text" placeholder="Nome de usuário">
                    <input class="imp_descricao" type="text" placeholder="Data de requisição">
                </form>
            </div>

            <div id="conteiner_lista">
                <div class="divider_2"></div>
                <p id="text_conteiner_detalhes">Itens Selecionados</p>
                
                <div id="conteiner_lista_itens">
                    <p style="text-align: center; color: #888; margin-top: 20px; font-size: 14px;">
                        Nenhum item adicionado ainda.
                    </p>
                </div>
            </div>

            <div id="container_order_sumary">
                <div class="divider_2"></div>
                <div id="sumary">
                    <div id="qnt_hora">
                        <div class="qnt_item_pedido">
                            <p class="total_text_style_1">Total de Itens</p>
                            <p class="total_text_style_2" id="total-itens-count">0</p>
                        </div>
                    </div>
                </div>
                <div class="divider_2"></div>
                <div id="style_btn_requisicao">
                    <button id="btn_fazer_requisicao">Confirmar Requisição</button>
                </div>
            </div>
        </aside>

    </div> <script src="../../JS/jquery-3.7.1.min.js"></script>
    
    <script>
        $(document).ready(function() {
            let carrinho = [];

            // Clique no botão Adicionar
            $('.btn-add-cart').click(function(e) {
                e.preventDefault();
                
                let id = $(this).data('id');
                let nome = $(this).data('nome');
                let img = $(this).data('img');

                // Verifica se já está no carrinho
                let itemExistente = carrinho.find(item => item.id === id);

                if (itemExistente) {
                    itemExistente.qtd++;
                } else {
                    carrinho.push({ id: id, nome: nome, img: img, qtd: 1 });
                }

                atualizarInterfaceCarrinho();
            });

            // Função para desenhar o carrinho no HTML
            function atualizarInterfaceCarrinho() {
                let container = $('#conteiner_lista_itens');
                container.empty(); // Limpa a lista atual

                let totalItens = 0;

                carrinho.forEach(item => {
                    totalItens += item.qtd;
                    
                    let htmlItem = `
                        <div class="item_list" style="margin-bottom: 15px; display: flex; align-items: center; gap: 10px;">
                            <img class="img_list" src="${item.img}" style="width: 40px; height: 40px; object-fit: contain;">
                            <div class="name_add" style="flex: 1;">
                                <p class="text_item_list" style="font-size: 12px; font-weight: 600;">${item.nome}</p>
                                <div class="add" style="display: flex; justify-content: space-between; align-items: center; margin-top: 5px;">
                                    <span style="font-size: 12px; color: #666;">Qtd: <strong>${item.qtd}</strong></span>
                                    <button class="btn-remove" data-id="${item.id}" style="border: none; background: none; color: red; font-size: 10px; cursor: pointer;">Remover</button>
                                </div>
                            </div>
                        </div>
                    `;
                    container.append(htmlItem);
                });

                $('#total-itens-count').text(totalItens + " itens");

                if (carrinho.length === 0) {
                    container.html('<p style="text-align: center; color: #888; margin-top: 20px; font-size: 14px;">Nenhum item adicionado.</p>');
                }
            }

            // Remover item (Delegação de Evento)
            $(document).on('click', '.btn-remove', function() {
                let id = $(this).data('id');
                carrinho = carrinho.filter(item => item.id !== id);
                atualizarInterfaceCarrinho();
            });

            // Botão Confirmar
            $('#btn_fazer_requisicao').click(function() {
                if (carrinho.length === 0) {
                    alert("Seu carrinho está vazio!");
                    return;
                }
                alert("Requisição enviada com sucesso! (Simulação)");
                carrinho = [];
                atualizarInterfaceCarrinho();
            });
        });
    </script>
</body>
</html>