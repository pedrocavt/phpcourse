<?php

    class Pessoa{

        function falar(){
            echo "Olá pessoal";
        }

    }

    $pedro = new Pessoa();

    $pedro->nome = "Pedro";

    echo $pedro->nome;

    echo "<br>";

    $pedro->falar();

?>