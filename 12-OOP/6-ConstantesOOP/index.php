<?php

    class Humano{
        public const OLHOS = 2; //coloca const, não precisa de $ e letras CAIXA ALTA
        public const BRACOS = 2;
        public const PERNAS = 2;
    
        function monstrarConstante(){
            echo self::BRACOS . " braços";//em constante se usa o self em vez do this
        }
    }

    $pedro = new Humano;

    echo $pedro::OLHOS . " olhos <br>";
    $pedro->monstrarConstante();

?>