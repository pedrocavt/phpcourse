<?php

class HomeController
{
    public function index()
    {
        try {

            $colecPostagens = Postagem::selecionaTodos();

        } catch (Exception $e) {

            echo $e->getMessage();

        }
        
        echo "<pre>";
        var_dump($colecPostagens);
        echo "</pre>";
        
    }
}