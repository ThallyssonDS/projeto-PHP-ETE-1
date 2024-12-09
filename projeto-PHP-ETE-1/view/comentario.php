<?php
include_once("configuracao.php");
include_once("configuracao/conexao.php");
include_once("funcoes.php");
include_once("model/acesso_model.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $comentario = isset($_POST['comentario']) ? $_POST['comentario'] : null;

    if ($nome && $email && $comentario) {
        $result = inserirComentario($nome, $email, $comentario);
        
        if ($result) {
            echo "Comentário enviado com sucesso!";
        } else {
            echo "Erro ao enviar o comentário. Tente novamente.";
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}