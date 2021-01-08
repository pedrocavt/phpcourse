<?php

    class Humano{
        public $altura = "1,82";
        public $peso = 84;

        public function falar(){
            echo "Bom dia pexxual <br>";
        }
    }

    class Professor extends Humano{
        public $disciplina = "Matemática";
        public $escola = "Cor Jesu";

        public function comecarAula(){
            echo "Vamos começar trigonometria <br>";
        }
    }

    $pedro = new Professor;

    echo $pedro->altura . "<br>";
    echo $pedro->disciplina . "<br>";
    echo $pedro->falar();
    echo $pedro->comecarAula();
?>