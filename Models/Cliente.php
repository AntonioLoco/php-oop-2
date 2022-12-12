<?php

class Cliente
{
    public $nome;
    public $cognome;
    protected $sconto;

    public function __construct(String $nome, String $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    /**
     * Get the value of sconto
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * Set the value of sconto
     */
    public function setSconto()
    {
        $this->sconto = 0;
    }
}
