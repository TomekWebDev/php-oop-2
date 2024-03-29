<?php
include_once __DIR__ . '/prodotto.php';

class Accessorio extends Prodotto
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
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
        parent::__construct($immagine, $nome, $prezzo, $merda);
    }

    public function printAttributiSpecificiClasse()
    {
        echo $this->materiale . "<br>" . $this->dimensioni;
    }
}
