<?php
require('./Database.php');

$db = new Database();
$medicos = $db->query("select * from medicos");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <main class="container">
        <table>
            <tr>
                <th>Nome</th>
                <th>CRM</th>
                <th>Consultorio</th>
                <th>Especialidade</th>
            </tr>
            <?php foreach ($medicos as $medico): ?>
                <tr>
                    <td>
                        <?= $medico["nome"] ?>
                    </td>
                    <td>
                        <?= $medico["crm"] ?>
                    </td>
                    <td>
                        <?= $medico["consultorio"] ?>
                    </td>
                    <td>
                        <?= $medico["especialidade"] ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
</body>

</html>