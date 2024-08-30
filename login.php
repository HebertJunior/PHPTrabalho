<?php
include ("conexao.php");

$cpf=$_POST["cpf"];
$senha=$_POST["senha"];

$sql = "select nome from login where cpf='$cpf' and senha='$senha';";

$resultado = $conn->query($sql);
$row = $resultado-> fetch_assoc();

if (isset($row) & $row['nome'] != '')
{
    session_start();
    $_SESSION["cpf"] = $cpf;
    $_SESSION["senha"] = $senha;
    $_SESSION["nome"] = $row['nome'];
    header("Location: principal.php");
} 
else 
{
    header("Location: https://github.com/HebertJunior");
    echo "senha incorreta";
}
?>