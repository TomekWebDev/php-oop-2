<?php
include_once __DIR__ . '/podotto.php';

class Cibo extends Prodotto
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
        $this->pesoNetto = $caratteristiche;
        $this->ingredienti = $dimensioni;
        parent::__construct($immagine, $nome, $prezzo, $merda);
    }
}
