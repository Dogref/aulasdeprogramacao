<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "depoimento_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO depoimentos (nome, mensagem) VALUES ('$nome', '$mensagem')";

if ($conn->query($sql) === TRUE) {
    echo "Depoimento adicionado com sucesso!";
} else {
    echo "Erro ao adicionar depoimento: " . $conn->error;
}

$conn->close();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    header("Location: depoimentos.php");
    exit(); 
}
?>