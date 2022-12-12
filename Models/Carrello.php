<?php

class Carrello
{
    private $prezzo;
    private $prodotti;
    private $pagamento;
    private $sconto;
    private $esitoPagamento = "Non completato";

    public function __construct(CartaDiCredito $pagamento, int $sconto)
    {
        $this->sconto = $sconto;
        $this->pagamento = $pagamento;
    }

    /**
     * Get the value of prezzo
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function aggiungiProdotto(Prodotto $prodotto)
    {
        $this->prodotti[] = $prodotto;
        $this->prezzo = $this->prezzo + $prodotto->getPrezzo();
        $this->prezzo = $this->prezzo - (($this->prezzo / 100) * $this->sconto);
    }

    public function Acquista()
    {
        $now = date("Y");
        $scadenza = date("Y", strtotime($this->pagamento->getScadenza()));

        if ($now < $scadenza) {
            $this->prodotti = [];
            $this->prezzo = 0;
            $this->esitoPagamento = "Pagamento riuscito";
        } else {
            $this->esitoPagamento =  "Pagamento non valido, carta di credito scaduta";
        }
    }

    /**
     * Get the value of prodotti
     */
    public function getProdotti()
    {
        return $this->prodotti;
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
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;
    }

    /**
     * Get the value of esitoPagamento
     */
    public function getEsitoPagamento()
    {
        return $this->esitoPagamento;
    }
}
