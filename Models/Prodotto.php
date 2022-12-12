<?php
class Prodotto
{
    public $nome;
    public $poster;
    private $prezzo;
    public $categoria;

    public function __construct(String $nome, String $poster, Categoria $categoriaProdotto, Float $prezzo)
    {
        $this->nome = $nome;
        $this->poster = $poster;
        $this->categoria = $categoriaProdotto;
        $this->prezzo = $prezzo;
    }

    /**
     * Metodo per settare il prezzo del prodotto
     *
     */
    public function setPrezzo(Float $prezzo)
    {
        $this->prezzo = $prezzo;
    }

    /**
     * Meotodo per prendere il valore del prezzo
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }
}
