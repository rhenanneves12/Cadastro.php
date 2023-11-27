<?php
$host = "conexao"; // substitua pelo host do seu banco de dados
$port = "5432"; // substitua pela porta do seu banco de dados
$dbname = "postgres"; // substitua pelo nome do seu banco de dados
$user = "postgres"; // substitua pelo seu usuário
$password = "postges"; // substitua pela sua senha

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try {
    $conexao = new PDO($dsn);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
