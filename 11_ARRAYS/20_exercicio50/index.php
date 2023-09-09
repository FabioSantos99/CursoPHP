<?php

$pessoas = [
    'Fabio' => 30,
    'Alexia' => 35,
    'Jean' => 25,
    'Pedro' => 45,
];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
<?php foreach($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
<?php endforeach; ?>
</table>
