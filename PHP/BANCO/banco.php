<?php
$host = "localhost";
$usuario = "root";
$senha = ""; // Se tiver senha no seu Workbench, coloque aqui
$bd = "almox";

$conn = mysqli_connect($host, $usuario, $senha, $bd);

if(!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
}
?>