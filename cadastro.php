<?php
include("conexao.php");

//recebe parametros do formulário
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = md5($_POST['senha']);

//Prepara Insert no Banco
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

//Verifica se ação foi concluída
if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . mysqli_error($conexao);
}
//Encerra a conexão
mysqli_close($conexao);

?>