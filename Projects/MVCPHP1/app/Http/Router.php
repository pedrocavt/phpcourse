<?php

namespace App\Http;

use \Closure;
use \Exception;

class Router
{   
    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';

    /**
     * Indice de rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instância de Request
     * @var Request
     */
    private $request;

    /**
     * Método responsável por iniciar a classe
     * @param string $url
     */
    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Método responsável por definir o prefixo das rotas
     */
    private function setPrefix()
    {
        $parseUrl = parse_url($this->url);

        //DEFINE O PREFIXO
        $this->prefix = $parseUrl['path'] ?? '';
    }

    /**
     * Método responsável por adicionar uma rota na classe
     * @param string $method
     * @param string $route
     * @param array $params
     */
    private function addRoute($method, $route, $params = [])
    {
        //VALIDAÇÃO DOS PARAMETROS
        foreach ($params as $key => $value) {
            if ($value instanceof Closure) {
                $params['controller'] = $value;
                unset($params[$key]);
                continue;
            }
        }

        //PADRÃO DE VALIDAÇÃO DA URL
        $patternRoute = '/^' . str_replace('/', '\/', $route) . '$/';
        
        //ADICIONA A ROTA DENTRO DA CLASSE
        $this->routes[$patternRoute][$method] = $params;    
    }

    /**
     * Método responsável por definir a rota de GET
     * @param string $route
     * @param array $params
     */
    public function get($route, $params = [])
    {   
        return $this->addRoute('GET', $route, $params);
    }

    /**
     * Método responsável por retornar dados da rota
     * @return array
     */
    private function getRoute()
    {
        
    }

    /**
     * Método responsável por executar a rota atual
     * @return Response;
     */
     public function run()
     {
        try {

            //OBTEM A ROTA ATUAL
            $route = $this->getRoute();
            echo "<pre>";
            print_r($route);
            echo "</pre>";
        } catch (Exception $e) {
            return new Response($e->getCode(), $e->getMessage());
        }
     }
}