<?php
include_once __DIR__ . '/podotto.php';

class Cibo extends Prodotto
{
    public $materiale;
    public $dimensioni;

    public function __construct(
        String $immagine,
        String $nome,
        Float $prezzo,
        Categoria $merda,

        String $materiale,
        String $dimensioni
    ) {
        $this->pesoNetto = $materiale;
        $this->ingredienti = $dimensioni;
        parent::__construct($immagine, $nome, $prezzo, $merda);
    }
}
