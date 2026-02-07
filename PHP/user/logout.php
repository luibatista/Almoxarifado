<?php
session_start();
session_destroy();
header("Location: ../../HTML/Fluxo_login/cadastro/acessar.html");
exit();
?>