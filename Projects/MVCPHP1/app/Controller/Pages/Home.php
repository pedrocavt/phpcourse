<?php

namespace App\Controller\Pages;

use App\Utils\View;

class Home
{

    /**
     * Método responsavel por retornar o conteudo (view) da nossa home
     * @return string
     */

    public static function getHome()
    {
        return View::render('pages/home', [
            'name' => 'WDEV - Canal',
            'description' => 'Canal do youtube: https://youtube.com.br/wdevoficial'
        ]);
    }

}