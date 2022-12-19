<?php
include_once __DIR__ . '/prodotto.php';

class Giocattolo extends Prodotto
{
    public $caratteristiche;
    public $dimensioni;

    public function __construct(
        String $immagine,
        String $nome,
        Float $prezzo,
        Categoria $merda,

        String $caratteristiche,
        String $dimensioni
    ) {
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        parent::__construct($immagine, $nome, $prezzo, $merda);
    }
}
