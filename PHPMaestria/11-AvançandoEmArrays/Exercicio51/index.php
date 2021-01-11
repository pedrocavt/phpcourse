<?php

    $score = [
        "Pedro" => 100,
        "Tiago" => 70,
        "Bruno" => 40,
        "Joao" => 10
    ];

    arsort($score);
?>

    <h3>Placar Final</h3>   
<ol>
    <?php foreach($score as $nome => $value):?>
    <li><?= $nome ?> => <?= $value ?> </li>
    <?php endforeach ?>
</ol>