<?php

    $test = "asd <br>";
    echo $test;
    if(true){
        echo $test;
    }


    function teste(){
        global $test;
        
        echo $test;
    }
    
    teste();
?>