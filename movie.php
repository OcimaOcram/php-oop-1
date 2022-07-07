<?php

class Movie {
    public $titolo;
    public $regista;
    public $prezzo;
    public $sconto;


    public function __construct($_titolo, $_regista, $_prezzo)
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->prezzo = $_prezzo;
        $this->sconto();
    }
    public function sconto() {
        if ($this->prezzo >= 10)
        $this->prezzo = 8;

    }
}