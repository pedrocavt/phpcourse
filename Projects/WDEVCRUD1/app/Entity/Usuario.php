<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Usuario
{
    public $id;
    public $nome;
    public $email;
    public $senha;

    public function cadastrar()
    {
        //database
        $obDatabase = new Database('usuarios');
        //insere novo usuario
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha
        ]);
        //sucesso
        return true;
    }

    public static function getUsuarioPorEmail($email)
    {
        return (new Database('usuarios'))->select('email= "' . $email . '"')->fetchObject(self::class);
    }
}