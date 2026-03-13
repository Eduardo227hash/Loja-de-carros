<?php
$host = "localhost";
$banco = "loja_roupas";
$usuario = "root";
$senha = "";

try {

$conexao = new PDO ("mysql:host=$host;dbname=$banco", $usuario, $senha);

echo "conexao bem sucedida!";
}

catch (PDOException $erro) {
echo "ops, deu erro" .$erro->getmessage();

}
?>