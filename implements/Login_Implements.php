<?php

namespace Cilindro;

require __DIR__.'/../vendor/autoload.php';

use Cilindro\UsuarioFactory;

class Login_Implements
{
    public function executar($lo, $se)
    {
        $login = $lo;
        $senha = $se;

        $perfil = 'professor';

        $usuario = UsuarioFactory::criar($perfil);

        if ($usuario->autenticar($login, $senha)) {
            $autorizacoes = $usuario->autorizar();

            echo "Bem-vindo, $login! Você tem acesso às seguintes funcionalidades: " . implode(', ', $autorizacoes).  "\n\n";



        } else {
            echo 'Login ou senha incorretos.';
        }
    }
}



