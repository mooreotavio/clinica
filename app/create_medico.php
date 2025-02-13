<?php
require('./Database.php');

$db = new Database();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $crm = htmlspecialchars($_POST['crm']);
    $nome = htmlspecialchars($_POST['nome']);
    $especialidade = htmlspecialchars($_POST['especialidade']);
    $consultorio = htmlspecialchars($_POST['consultorio']);

    // Insert into database using prepared statements
    $query = "INSERT INTO medicos (crm, nome, especialidade, consultorio) VALUES (:crm, :nome, :especialidade, :consultorio)";
    $statement = $db->connection->prepare($query);
    $statement->execute([
        ':crm' => $crm,
        ':nome' => $nome,
        ':especialidade' => $especialidade,
        ':consultorio' => $consultorio
    ]);

    // Redirect to medicos.php after insertion
    header('Location: /medicos.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Médico</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <main class="container">
        <nav>
            <ul>
                <li><strong>Clínica</strong></li>
            </ul>
            <ul>
                <li><a href="/pacientes.php" class="contrast">Pacientes</a></li>
                <li><a href="/medicos.php" class="secondary">Médicos</a></li>
            </ul>
        </nav>
        <h1>Adicionar Médico</h1>
        <form method="POST">
            <label for="crm">CRM</label>
            <input type="text" id="crm" name="crm" maxlength="8" required>

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="especialidade">Especialidade</label>
            <input type="text" id="especialidade" name="especialidade" required>

            <label for="consultorio">Consultório</label>
            <input type="text" id="consultorio" name="consultorio" required>

            <button type="submit">Adicionar</button>
        </form>
    </main>
</body>

</html>