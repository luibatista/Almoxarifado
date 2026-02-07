<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Almoxarifado</title>
    <link rel="stylesheet" href="../../assets/estilo_login.css">
</head>
<body>
    <div class="container">
        <img id="cinza" src="../../IMG/img_login/PPA2.jpg"> 
        <div class="qbranco">
            <div class="teste2"> 
                <img id="if" src="../../IMG/img_login/MARCA_IFBA_VERTICAL_CMYK_IFBA.png"> 

                <div id="title_subtitle">
                    <h1 id="title_page">Criar Conta</h1>
                    <h2 id="subtitle_1">Preencha os dados abaixo</h2>
                </div>

                <form action="cadastroUser.php" method="POST">
                    <div class="caixa1">
                        <div class="caixa11">
                            <p class="descricao_box">Nome Completo</p>
                            <div class="imput_box">
                                <input class="text_box" type="text" name="nome" placeholder="Seu nome" required style="outline: none">
                            </div>
                            
                            <p class="descricao_box">Matrícula</p>
                            <div class="imput_box">
                                <input class="text_box" type="text" name="matricula" placeholder="Sua matrícula" required style="outline: none">
                            </div>
                        </div>
                        
                        <div class="caixa12">
                            <p class="descricao_box">E-mail Institucional</p>
                            <div class="imput_box">
                                <input class="text_box" type="email" name="email" placeholder="email@ifba.edu.br" required style="outline: none">
                            </div>

                            <p class="descricao_box">Senha</p>
                            <div class="imput_box">
                                <input class="text_box" type="password" name="senha" placeholder="Crie uma senha" required style="outline: none">
                            </div>
                        
                            <div class="btn"> 
                                <button type="submit" class="button" style="cursor: pointer;">Cadastrar</button>
                            </div>

                            <div class="esqueceu-senha" style="text-align: center; margin-top: 15px;">
                                <p>Já tem conta? <a href="../../HTML/Fluxo_login/cadastro/acessar.html">Faça Login</a></p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>