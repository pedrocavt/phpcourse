<?php

    $pessoa = [
        "Matheus" => 29,
        "Pedro" => 25,
        "Sabrinna" => 18,
        "Ana" => 48
    ];
?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <tr>
    <?php foreach($pessoa as $nome => $idade): ?> 
        <tr>
            <td><?= $nome ?></td>
            <td><?= $idade ?></td>
        </tr>
    <?php endforeach;?>
    </tr>
</table>