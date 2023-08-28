<?php
require('./Database.php');

$db = new Database();
$pacients = $db->query("select * from pacientes");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <main class="container">
    <nav>
        <ul>
            <li><strong>Clínica</strong></li>
        </ul>
        <ul>
            <li><a href="/pacientes" class="secondary">Pacientes</a></li>
            <li><a href="/medicos" class="contrast">Médicos</a></li>
        </ul>
    </nav>
        <table>
            <tr>
                <th>Nome</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
            </tr>
            <?php foreach ($pacients as $pacient): ?>
                <tr>
                    <td>
                        <?= $pacient["nome"] ?>
                    </td>
                    <td>
                        <?= $pacient["data_nasc"] ?>
                    </td>
                    <td>
                        <?= $pacient["cpf"] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>

</html>