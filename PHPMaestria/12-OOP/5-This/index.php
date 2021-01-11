<?php

    class Animal{
        public $nome;

        function escolherNome($nome){
            $this->nome = $nome;
            echo "O nome dele sera: $nome <br>";
        }

        function latir(){
            return "au au <br>";
        }

        function latirForte(){
            return strtoupper($this->latir());
        }
    }
    
    $zaruque = new Animal;

    $zaruque->escolherNome("Zaruque");
    echo $zaruque->nome . "<br>";

    echo $zaruque->latir();
    echo $zaruque->latirForte();

?>
