<?php 

require_once __DIR__ . '/Prodotto.php';

class CiboAnimali extends Prodotto
{
  public $ingredienti;
  public $tagliaCane;
  public function __construct($ingredienti, $tagliaCane,$nome,$marca,$prezzo,$peso)
  {
    $this->ingredienti = $ingredienti;
    $this->tagliaCane = $tagliaCane; 
    parent::__construct($marca,$nome,$prezzo,$peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }

}
