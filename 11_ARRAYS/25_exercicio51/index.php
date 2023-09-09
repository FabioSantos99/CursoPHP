<?php

$pessoas = [
    "Valquiria" => 7.4,
    "Mauro" => 6.4,
    "Libia" => 9.9,
    "Renan" => 8.0,
    "Renata" => 6.8,
];

asort($pessoas);

print_r($pessoas);

?>
<h1>Ranking: </h1>
<ol>
<?php foreach($pessoas as $pessoal => $pontuacao): ?>
    <li><?= $pessoal ?> -> <?= $pontuacao ?> </li>
<?php endforeach; ?>

</ol>
