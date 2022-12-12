<?php

class ProdottoCibo extends Prodotto
{
    private $tipologia = "Cibo";
    private $peso;
    private $dataScadenza;
    private $gusto;

    public function __construct(String $nome, String $poster, Categoria $categoriaProdotto, Float $prezzo, int $peso, String $dataScadenza, String $gusto)
    {
        parent::__construct($nome, $poster, $categoriaProdotto, $prezzo);
        $this->peso = $peso;
        $this->dataScadenza = $dataScadenza;
        $this->gusto = $gusto;
    }



    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Get the value of dataScadenza
     */
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }

    /**
     * Get the value of gusto
     */
    public function getGusto()
    {
        return $this->gusto;
    }

    /**
     * Get the value of tipologia
     */
    public function getTipologia()
    {
        return $this->tipologia;
    }
}
