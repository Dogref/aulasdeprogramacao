<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orcamento_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['inputName'];
$sobrenome = $_POST['inputSurname'];
$email = $_POST['inputEmail4'];
$telefone = $_POST['inputPhone'];
$endereco = $_POST['inputAddress'];
$complemento = $_POST['inputAddress2'];
$cidade = $_POST['inputCity'];
$estado = $_POST['inputState'];
$data_servico = $_POST['inputDate'];
$observacoes = $_POST['exampleFormControlTextarea1'];

$data_servico = $_POST['inputDate'];

$sql = "INSERT INTO orcamentos (nome, sobrenome, email, telefone, endereco, complemento, cidade, estado, data_servico, observacoes)
        VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$endereco', '$complemento', '$cidade', '$estado', STR_TO_DATE('$data_servico', '%d/%m/%Y'), '$observacoes')";


if ($conn->query($sql) === TRUE) {
    echo "Orçamento gravado com sucesso!";
} else {
    echo "Erro ao gravar o orçamento: " . $conn->error;
}

$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    header("Location: servico1.html");
    exit(); 
}


?>


