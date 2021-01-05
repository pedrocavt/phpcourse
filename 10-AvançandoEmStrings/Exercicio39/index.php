<?php

    $feira = [
        "Laranja" => 20,
        "Banana" => 32,
        "Limao" => 4,
        "Batata" => 5
    ];


    function teste($arr){
        $arrayteste = [];
        foreach($arr as $item => $preco){
            if($preco > 10){
                array_push($arrayteste, $item);
            }
        }

        return print_r($arrayteste);
    }

    teste($feira);
?>