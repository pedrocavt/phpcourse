<?php

    class Humano{
        public $idade = 29;

        public function falar(){
            echo "Olá mundo <br>";
        }

        private function gritar(){
            echo "PHP É MUITO BOM <br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function falarBaixo(){
            echo "lalalala <br>";
        }

        public function acessaFalarBaixo(){
            $this->falarBaixo();
        }
    }

    class Programador extends Humano{
        public function acessaFalarBaixoProgramador(){
            $this->falarBaixo(); //com o método protected você pode acessar por outra classe que herdou as propriedades e os metodos, diferente do private
        }
    }

    echo "Zé <br>";
    $ze = new Humano;
    $ze->falar();
    $ze->acessarGritar();
    $ze->acessaFalarBaixo();

    echo "<br>";

    echo "Pedro <br>";
    $pedro = new Programador;
    echo $pedro->idade . "<br>";
    $pedro->falar();
    $pedro->acessarGritar();
    $pedro->acessaFalarBaixo();
    $pedro->acessaFalarBaixoProgramador();


?>