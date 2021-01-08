<?php

    class Pessoa{
        public $nome;
        public $idade;

        function andar($m){
            echo "andou $m metros <br>";
        }
    }

    $pessoa1 = new Pessoa;
    $pessoa1->nome = "Pedro";
    $pessoa1->idade = 25;

    echo $pessoa1->nome . "<br>";
    echo $pessoa1->idade . "<br>";

    $pessoa1->andar(20);


?>