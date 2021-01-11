<?php

    class Car{
        public $rodas = 4;
        private $vidro = "Com pelicula";

        public function getVidro(){
            return $this->vidro;
        }
    }

    class Mecanico{
        
        public function alterarRodas($obj){
            $obj->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }

    $carro = new Car;

    echo $carro->rodas . "<br>";

    $pedro = new Mecanico;

    $pedro->alterarRodas($carro);

    echo $carro->rodas . "<br>";

    // $pedro->colocarPelicula($carro, "G20");

    echo $carro->getVidro() . "<br>";

?>