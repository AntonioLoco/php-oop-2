<?php

class CartaDiCredito
{
    private $number;
    private $scadenza;

    public function __construct(String $number, String $scadenza)
    {
        $this->number = $number;
        $this->scadenza = $scadenza;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Get the value of scadenza
     */
    public function getScadenza()
    {
        return $this->scadenza;
    }
}
