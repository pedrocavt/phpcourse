<?php

    class Carro{
        public $cor;
        public $rodas = 4;
        public $velocidadeMax;

        function setVelocidadeMaxima($velocidadeMax){
            $this->velocidadeMax = $velocidadeMax;
        }
        
        function getVelocidadeMaxima(){
            echo "A velocidade máxima do carro é: " . $this->velocidadeMax . "<br>";
        }
    }

    $hb20 = new Carro;
    $hb20->cor = "prata";
    echo $hb20->cor . "<br>";
    $hb20->setVelocidadeMaxima(220);
    $hb20->getVelocidadeMaxima();


    $ferrari = new Carro;
    $ferrari->setVelocidadeMaxima(320);
    $ferrari->getVelocidadeMaxima();

?>