<?php

require __DIR__ . '/vendor/autoload.php';

use \App\Http\Router;
use \App\Http\Response;
use \App\Controller\Pages\Home;

define('URL', 'http://localhost/phpcourse/Projects/MVCPHP1');

$obRouter = new Router(URL);

//ROTA HOME
$obRouter->get('/',[
    function(){
        return new Response(200,Home::getHome());
    }
]);

//EMPRIME O RESPONSE DA ROTA
$obRouter->run()->sendResponse();