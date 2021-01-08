<?php

    class Cachorro{

        function latir(){
            echo "Latindo <br>";
        }

        function andar(){
            echo "Andando <br>";
        }
    }

    $zaruque = new Cachorro;
    $neguinha = new Cachorro;

    $zaruque->latir();
    $neguinha->andar();

?>