<?php

include_once __DIR__ . '/categoria.php';

class Prodotto
{
    public $immagine;
    public $nome;
    public $prezzo;
    public $porcodio;

    public function __construct(
        String $immagine,
        String $nome,
        Float $prezzo,
        Categoria $merda
    ) {
        $this->immagine = $immagine;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->porcodio = $merda;
    }
}
