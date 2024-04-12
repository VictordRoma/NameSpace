<?php

namespace Cilindro;

interface Usuario
{
    public function autenticar(string $login, string $senha): bool;
    public function autorizar(): array;
}
