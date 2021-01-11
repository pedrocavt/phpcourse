<?php

    $lista = ["Maça", "Banana", "Papel Higienico", "Sabão"];

    
    function listaString($arr){
        
        $str = "Lista do supermercado: ";

        for($i = 0; $i < count($arr); $i++){
            
            if($i + 1 == count($arr)){
                $str .= "$arr[$i].";
            }else{
                $str .= "$arr[$i], ";

            }
        }

        return $str;
    }

    echo listaString($lista);
?>