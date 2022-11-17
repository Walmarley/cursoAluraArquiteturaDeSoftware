<?php

namespace Alura\Arquitetura;

class Email
{
    private string $endereco;

    public function __construct(string $endereco)
    {
        $this->endereco = $endereco;
        if(filter_var($endereco, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException('Endereço de e-mail invalido'
            );
        }

        $this->endereco = $endereco;
    }

    public function __toString(): string
    {
        return $this->endereco;
        
    }
}