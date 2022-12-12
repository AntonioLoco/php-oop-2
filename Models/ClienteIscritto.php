<?php

class ClienteIscritto extends Cliente
{

    public function __construct(String $nome, String $cognome)
    {
        parent::__construct($nome, $cognome);
    }

    /**
     * Set the value of sconto
     */
    public function setSconto()
    {
        $this->sconto = 20;
    }
}
