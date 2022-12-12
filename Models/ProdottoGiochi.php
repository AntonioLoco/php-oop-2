<?php

class ProdottoGiochi extends Prodotto
{
    private $tipologia = "Giochi";
    private $peso;
    private $colore;

    public function __construct(String $nome, String $poster, Categoria $categoriaProdotto, Float $prezzo, int $peso, String $colore)
    {
        parent::__construct($nome, $poster, $categoriaProdotto, $prezzo);
        $this->peso = $peso;
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
     * Get the value of colore
     */
    public function getColore()
    {
        return $this->colore;
    }

    /**
     * Get the value of tipologia
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }
}
