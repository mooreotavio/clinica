<?php
require "Database.php";

$db = new Database();
$pacients = $db->query("select * from pacientes");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>data de nascimento</th>
            <th>cpf</th>
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
</body>
</html>
