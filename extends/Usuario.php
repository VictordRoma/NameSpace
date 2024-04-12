<?php

namespace Bola;

abstract class Usuario
{
    protected $nome;
    protected $login;
    protected $senha;

    abstract public function autenticar(string $login, string $senha): bool;
    abstract public function autorizar(): array;
}
