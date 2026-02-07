<?php
  // Caminho corrigido para o banco
  include_once '../BANCO/banco.php';

  if (isset($conn)) {
      $lista = "SELECT * FROM area_depar";
      $depars = $conn->query($lista);
  } else {
      die("Erro: Não foi possível conectar ao banco de dados.");
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="../../../assets/estilo_login.css">
    <link rel="stylesheet" href="../../assets/global.css" />
    
    <script src="../../JS/jquery-3.7.1.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> 
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro de usuário</title>
  </head>
  <body>
    <div class="tudo">
      <div class="bloco1">
        <form method="POST" action="cadastroUser.php" class="form" id="form">
          <ul class="title">
            <a href="../../HTML/Fluxo_login/cadastro/acessar.html">
              <li>Login</li>
            </a>
          </ul>

          <div class="box">
            <input type="text" name="nome" id="nome" placeholder="João Silva" required />
            <span>Nome completo</span>
          </div>

          <div class="box">
            <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00" required />
            <span>CPF</span>
          </div>

          <div class="box">
            <input type="text" name="tel" id="telefone" placeholder="(00) 00000-0000" required />
            <span>Telefone</span>
          </div>

          <div class="box">
            <input type="email" name="email" id="email" placeholder="exemplo@exemplo.com" required />
            <span>E-mail</span>
          </div>

          <div class="box">
            <input type="password" name="senha" id="senha" required />
            <span>Senha</span>
          </div>

          <div class="box">
            <span class="tag">Departamento:</span>
            <br><br>
            <select name="depar" id="depar">
             <?php
             if (isset($depars) && $depars->num_rows > 0) {
              while ($depar = $depars->fetch_assoc()) {
                echo "<option value='" . $depar['id_area'] . "'>" . $depar['depar'] . "</option>";
              }
            }
              ?>
            </select>
          </div>
          
          <button type="button" class="btn" onClick="validar()">Cadastrar</button>

        </form>
      </div>
    </div>
    <script>
        $(document).ready(function(){ 
          $('#cpf').mask('000.000.000-00');
          $('#telefone').mask('(00) 00000-0000');
        });
      
        function validar() {
            var nome = $('#nome').val();
            var email = $('#email').val();
            var senha = $('#senha').val();
            var cpf = $('#cpf').val();
            var telefone = $('#telefone').val();

            if(nome.length < 3) {
                alert("Nome muito curto.");
                return;
            }
            if(senha.length < 3) {
                alert("Senha muito curta.");
                return;
            }
            if(cpf.length < 14) { // Contando pontos e traços
                alert("CPF inválido.");
                return;
            }
            
            // Se tudo estiver ok, envia o formulário
            document.getElementById('form').submit();
        }
    </script>
  </body>
</html>