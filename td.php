<?php
// Configurações do banco de dados
$servername = "TCC";
$username = "sycon";
$password = "sua_senha";
$dbname = "produtos";

// Dados da tabela
$data = array(
    array("Tiger Nixon", "System Architect", "Edinburgh", "61", "2011-04-25", "$320,800"),
    // Adicione os demais dados da tabela aqui
);

// Conexão com o banco de dados
$conn = new mysqli($TCC, $sycon, $password, $produtos);
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Criação da tabela
$sql = "CREATE TABLE exemplo (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    position VARCHAR(30) NOT NULL,
    office VARCHAR(30) NOT NULL,
    age INT(3) NOT NULL,
    start_date DATE NOT NULL,
    salary VARCHAR(15) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso.";
} else {
    echo "Erro na criação da tabela: " . $conn->error;
}

// Inserção dos dados na tabela
foreach ($data as $row) {
    $name = $row[0];
    $position = $row[1];
    $office = $row[2];
    $age = $row[3];
    $start_date = $row[4];
    $salary = $row[5];

    $sql = "INSERT INTO exemplo (name, position, office, age, start_date, salary)
            VALUES ('$name', '$position', '$office', '$age', '$start_date', '$salary')";
    
    if ($conn->query($sql) !== TRUE) {
        echo "Erro na inserção dos dados: " . $conn->error;
    }
}

$conn->close();
?>
