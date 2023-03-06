<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_hora = $_POST['data_hora'];
    $termos = $_POST['termos'];
    $whatsapp = $_POST['whatsapp'];

    // Insira aqui o código para armazenar os dados em um banco de dados ou enviar por e-mail
    
    // Exibe uma mensagem de sucesso
    echo 'Dados do formulário recebidos com sucesso!';
} else {
    // Se o formulário não foi enviado, redireciona para a página do formulário
    header('Location: formulario.html');
    exit;
}
?>
