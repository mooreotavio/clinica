<?php
require('./Database.php');

$db = new Database();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $cpf = htmlspecialchars($_POST['cpf']);
    $nome = htmlspecialchars($_POST['nome']);
    $data_nasc = htmlspecialchars($_POST['data_nasc']);

    // Insert into database using prepared statements
    $query = "INSERT INTO pacientes (cpf, nome, data_nasc) VALUES (:cpf, :nome, :data_nasc)";
    $statement = $db->connection->prepare($query);
    $statement->execute([
        ':cpf' => $cpf,
        ':nome' => $nome,
        ':data_nasc' => $data_nasc
    ]);

    // Redirect to pacientes.php after insertion
    header('Location: /pacientes.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Paciente</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <main class="container">
        <nav>
            <ul>
                <li><strong>Clínica</strong></li>
            </ul>
            <ul>
                <li><a href="/pacientes.php" class="secondary">Pacientes</a></li>
                <li><a href="/medicos.php" class="contrast">Médicos</a></li>
            </ul>
        </nav>
        <h1>Adicionar Paciente</h1>
        <form method="POST">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" maxlength="11" required>

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="data_nasc">Data de Nascimento</label>
            <input type="date" id="data_nasc" name="data_nasc" required>

            <button type="submit">Adicionar</button>
        </form>
    </main>
</body>

</html>