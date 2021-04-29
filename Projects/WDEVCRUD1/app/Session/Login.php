<?php

namespace App\Session;

class Login
{
    private static function init()
    {   //verifica status da sessao
        if(session_status() !== PHP_SESSION_ACTIVE){
            
            //inicia a sessao
            session_start();
        }
    }

    public static function getUsuarioLogado()
    {
        //Inicia a sessao
        self::init();

        //retorna dados do usuario
        return self::isLogged() ? $_SESSION['usuario']: null;
    }

    public static function login($obUsuario)
    {   //Inicia a sessao
        self::init();

        //sessao de usuario
        $_SESSION['usuario'] = [
            'id' => $obUsuario->id,
            'nome' => $obUsuario->nome,
            'email' => $obUsuario->email
        ];

        //redirecionar o usuario para index
        header('location: index.php');
        exit;
    }

    public static function logout()
    {//Inicia a sessao
        self::init();

        //remove a sessão de usuario
        unset($_SESSION['usuario']);

        header('location: login.php');
        exit;
    }

    public static function isLogged()
    {
        //Inicia a sessao
        self::init();
        
        //validação da sessao
        return isset($_SESSION['usuario']['id']);
    }

    public static function requireLogin()
    {
        if(!self::isLogged()){
            header('location: login.php');
            exit;
        }
    }

    public static function requireLogout()
    {
        if(self::isLogged()){
            header('location: index.php');
            exit;
        }
    }
}