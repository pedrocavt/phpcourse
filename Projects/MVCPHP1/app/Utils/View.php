<?php 

namespace App\Utils;

class View
{
    /**
     * Método responsável por retornar o conteúdo de uma view
     * @param string $view
     * @return string
    */
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Método responsável por retornar um conteúdo rederizado de uma view
     * @param string $view
     * @param array $vars (strings/numeric)
     * @return string
     */
    public static function render($view, $vars = [])
    {
        //CONTEUDO DA VIEW
        $contentView = self::getContentView($view);

        //CHAVES DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'. $item .'}}';
        }, $keys);
        

        echo "<pre>";
        print_r($keys);
        echo "</pre>"; exit;


        //RETORNA O CONTEUDO RENDERIZADO
        return $contentView;
    }
}