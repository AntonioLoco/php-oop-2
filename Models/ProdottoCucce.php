<?php

class ProdottoCucce extends Prodotto
{
    private $tipologia = "Cucce";
    private $peso;
    private $larghezza;
    private $altezza;
    private $colore;


    public function __construct(String $nome, String $poster, Categoria $categoriaProdotto, Float $prezzo, int $peso, int $larghezza, int $altezza, String $colore)
    {
        parent::__construct($nome, $poster, $categoriaProdotto, $prezzo);
        $this->peso = $peso;
        $this->larghezza = $larghezza;
        $this->altezza = $altezza;
        $this->colore = $colore;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Get the value of larghezza
     */
    public function getLarghezza()
    {
        return $this->larghezza;
    }

    /**
     * Get the value of colore
     */
    public function getColore()
    {
        return $this->colore;
    }

    /**
     * Get the value of altezza
     */
    public function getAltezza()
    {
        return $this->altezza;
    }

    /**
     * Get the value of tipologia
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }
}
