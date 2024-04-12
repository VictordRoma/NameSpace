<?php

namespace Bola;

use Bola\Usuario;
use Bola\Professor;
use Bola\Administrador;
use Bola\AdministradorSupremo;
use Exception;

class UsuarioFactory
{
    public static function criar(string $perfil): Usuario
    {
        switch ($perfil) {
            case 'professor':
                return new Professor();
            case 'administrador':
                return new Administrador();
            case 'administrador_supremo':
                return new AdministradorSupremo();
            default:
                throw new Exception('Perfil inválido');
        }
    }
}
