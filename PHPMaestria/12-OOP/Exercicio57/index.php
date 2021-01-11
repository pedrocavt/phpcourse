<?php

    class Cachorro{
        public $patas;
        public $raca;
        public $nome;

        function __construct($patas, $raca, $nome){
            $this->patas = $patas;
            $this->raca = $raca;
            $this->nome = $nome;
        }
    }

    $zaruque = new Cachorro(4, "Vira Lata", "Zaruque");

    echo "O $zaruque->nome é da raça $zaruque->raca <br>";
?>