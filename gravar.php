<?php
session_start();
print_r($_SESSION);
echo "<br>";
echo "conteiudo: ".$_SESSION["cpf"]."-".$_SESSION["senha"];
?>