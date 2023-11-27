<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contato_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Mensagem gravada com sucesso!";
    } else {
        echo "Erro ao gravar mensagem: " . $conn->error;
    }
}


$conn->close();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    header("Location: contatos.html");
    exit(); 
}

?>
