<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto - Almoxarifado</title>
    <link rel="stylesheet" href="../../assets/index.css">
    <link rel="stylesheet" href="../../assets/pedido.css">
    <style>
        /* Ajuste simples para centralizar o formulário mantendo o teu design */
        body { background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; min-height: 100vh; }
        .form-box { background: white; padding: 40px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        .form-box h2 { color: #333; text-align: center; margin-bottom: 20px; font-family: 'Poppins', sans-serif; }
        .input-group { margin-bottom: 15px; }
        .input-group label { display: block; margin-bottom: 5px; color: #555; font-family: 'Raleway', sans-serif; }
        .input-group input, .input-group select { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        .btn-submit { width: 100%; padding: 12px; background-color: #379936; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; font-family: 'Poppins', sans-serif; }
        .btn-submit:hover { background-color: #2e802d; }
        .link-back { display: block; text-align: center; margin-top: 15px; color: #666; text-decoration: none; font-family: 'Raleway', sans-serif; }
    </style>
</head>
<body>
    <div class="form-box">
        <h2>Novo Produto</h2>
        <form action="cadastroProduto.php" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label>Nome do Produto</label>
                <input type="text" name="nome" required placeholder="Ex: Caneta Azul">
            </div>
            
            <div class="input-group">
                <label>Categoria</label>
                <select name="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="Escritório">Escritório</option>
                    <option value="Papelaria">Papelaria</option>
                    <option value="Artes">Artes</option>
                    <option value="Limpeza">Limpeza</option>
                    <option value="Informática">Informática</option>
                    <option value="Alimento">Alimento</option>
                </select>
            </div>

            <div class="input-group">
                <label>Imagem</label>
                <input type="file" name="imagem" accept="image/*" required>
            </div>

            <button type="submit" class="btn-submit">Cadastrar</button>
        </form>
        <a href="listarProdutos.php" class="link-back">Ver Lista de Produtos</a>
    </div>
</body>
</html>