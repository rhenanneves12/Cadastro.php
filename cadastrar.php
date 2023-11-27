<?php
include_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $data_nascimento = $_POST['data_nascimento'];
    $celular = $_POST['celular'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, cpf, data_nascimento, celular, senha) VALUES (?, ?, ?, ?, ?, ?)";

    try {
        $stmt = $conexao->prepare($sql);
        $stmt->execute([$nome, $email, $cpf, $data_nascimento, $celular, $senha]);
        echo "Cadastro realizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>
