<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Page</title>

    <!-- Style links-->
    <link rel="stylesheet" href="../../assets/index.css">
    <link rel="stylesheet" href="../../assets/pedido.css">


    <!-- Fonts links-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Raleway:wght@200;500&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    include 'adicionar_pedido.php';
    include 'confirmar_pedido_PAPELARIA.php';
    ?>

    <div class="container">


        <?php
        include 'header.php';
        include 'nav.php';
        ?>

        <section class="box_itens_search_box">

            <?php
            include 'nav_section.php';
            ?>

            <article class="frame">
                <div class="line_frame">
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/pincel.png " alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Pincel Marcador Quadro Branco</p>
                            <a class="adicionar" title="Pincel Marcador Quadro Branco" id="p1" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/apagador.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Apagador Quadro Branco Pilot</p>
                            <a class="adicionar" id="p2" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/fichario.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Fichario Universitario 4 Argolas sem Cristal</p>
                            <a class="adicionar" id="p3" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/fita.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Fita Adesiva Trasnparente</p>
                            <a class="adicionar" id="p4" href="#">Adicionar</a>
                        </div>
                    </div>
                    <!--   </div>
                    <div class="line_frame"> -->
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/papel.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Chamex - Papel Sulfite, A4, 500 folhas</p>
                            <a class="adicionar" id="p5" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/caneta.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Caneta bic cor preta/azul/vermelha</p>
                            <a class="adicionar" id="p6" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/cola.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Cola branca com secagem transparente </p>
                            <a class="adicionar" id="p7" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/tesoura.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Tesoura Tramontina Uso Geral</p>
                            <a class="adicionar" id="p8" href="#">Adicionar</a>
                        </div>
                    </div>
                    <!--  </div>
                    <div class="line_frame"> -->
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/grampeador.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Grampeador de Metal, 11,5cm Preto</p>
                            <a class="adicionar" id="p9" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/lapis.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Lápis</p>
                            <a class="adicionar" id="p10" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/isopor.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Folha de Isopor</p>
                            <a class="adicionar" id="p11" href="#">Adicionar</a>
                        </div>
                    </div>
                    <div class="card_product">
                        <div class="image_product">
                            <div class="size_img">
                                <img src="../../IMG/img_prods/regua.png" alt="">
                            </div>
                        </div>
                        <div class="nome_descricao">
                            <p class="decricao">Régua de 30 cm</p>
                            <a class="adicionar" id="p12" href="#">Adicionar</a>
                        </div>
                    </div>
                </div>
            </article>
        </section>


        <aside id="menu_requisicao">
            <div id="conteiner_detalhes">
                <p id="text_conteiner_detalhes">Detalhes da requisição </p>
                <form action="#" id="detalhes_descricao">
                    <input class="imp_descricao" type="text" placeholder="Nome de usuário">
                    <input class="imp_descricao" type="text" placeholder="Data de requisição">
                </form>
                <div id="btn_desc">
                    <button id="btn_confirm_descricao" onclick="">Adicionar descrição</button>
                </div>
            </div>
            <div id="conteiner_lista">

                <div class="divider_2"></div>
                <p id="text_conteiner_detalhes">Lista de Itens </p>
                <div id="conteiner_lista_itens">
                    <div class="item_list">
                        <img class="img_list" src="../../IMG/img_prods/marcador.png" alt="">
                        <div class="name_add">
                            <p class="text_item_list">Marcador Azul </p>
                            <div class="add">
                                <div class="supply">
                                    <p class="text_acima">Disponível</p>
                                    <p class="text_abaixo">100 unidades</p>
                                </div>
                                <div class="add_item">
                                    <button class="btn_menos">
                                        <svg class="icon_menos" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path d="M4.16663 10H15.8333" stroke="#9C9C9C" stroke-width="1.5" stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <p id="qnt" class="estilo_qtn">1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container_order_sumary">
                <div class="divider_2"></div>
                <div id="sumary">
                    <div id="total">
                        <p class="total_text_style_1">Categoria </p>
                        <p id="total_text_2">Escritório e Papelaria </p>
                    </div>
                    <div id="qnt_hora">
                        <div class="qnt_item_pedido">
                            <p class="total_text_style_1">Quantidade de itens pedidos</p>
                            <p class="total_text_style_2">3 itens</p>
                        </div>
                        <div class="qnt_item_pedido">
                            <p class="total_text_style_1">Horário de retirada </p>
                            <p class="total_text_style_2">
                                <span id="hrs_2">00</span>
                                <span>:</span>
                                <span id="min_2">00</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="divider_2"></div>
                <div id="style_btn_requisicao">
                    <button rel="modal" id="btn_fazer_requisicao">Fazer requisição </button>

                </div>
            </div>

        </aside>
        <script src="../../JS/estoque.js"></script>
        <script src="../../JS/jquery-3.7.1.min.js"> </script>
        <script src="../../JS/main.js"></script>

        <script>

            $(document).ready(function(event) {

                carregarEstoque();

                console.log($('.linha2 .qtd').text());

                $('.carregar').click(function() {
                    var href = $(this).attr('href');
                    $.ajax({
                        url: href,
                        dataType: 'html',
                        success: function(html) {
                            eval($('.frame').html(html));
                            //  location. r 
                            definirModal(); 
                        }
                    });
                    return false;
                });

                definirModal();
                function definirModal() {

                    $('.adicionar').click(function(event) {
                        event.preventDefault();
                        console.log($(this)[0].id);
                        console.log($(this)[0].title);
                        //alert("Cliquei  no produto");
                        //console.log(estoque_text);
                        $('.gray-overlay_pedido').css('display', 'block');
                        //exibirEstoque();
                        buscarItem($(this)[0].id);

                    });

                    $('.fechar_add_pedido').click(function(event) {
                        event.preventDefault();
                        $('.gray-overlay_pedido').css('display', 'none');
                    });
                }
                /*

                $("button[rel=modal]").click(function(ev) {


                    ev.preventDefault();

                    var id = $(this).attr("href");

                    var alturaTela = $(document).height();
                    var larguraTela = $(window).width();

                    //colocando o fundo preto
                    $('#mascara').css({
                        'width': larguraTela,
                        'height': alturaTela
                    });
                    $('#mascara').fadeIn(1000);
                    $('#mascara').fadeTo("slow", 0.8);

                    var left = ($(window).width() / 2) - ($(id).width() / 2);
                    var top = ($(window).height() / 2) - ($(id).height() / 2);

                    $(id).css({
                        'top': top,
                        'left': left
                    });
                    $(id).show();
                });

                $("#mascara").click(function() {
                    $(this).hide();
                    $(".window").hide();
                });

                $('.fechar').click(function(ev) {
                    ev.preventDefault();
                    $("#mascara").hide();
                    $(".window").hide();
                });
*/
            });
        </script>

    </div>
</body>


</html>