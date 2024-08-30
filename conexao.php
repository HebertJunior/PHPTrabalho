<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "personagens";

$conn = new mysqli($servidor,$usuario,$senha,$dbname);
if($conn->connect_error){
    die("Falha na conexão".$conn->connect_error);
}
?>