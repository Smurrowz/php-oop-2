<?php 

include_once __DIR__ . '/Prodotto.php';

class VestitoAnimali extends Prodotto
{
  public $tessuto;
  public $taglia;
  public function __construct($tessuto, $taglia,$nome,$marca,$prezzo,$peso)
  {
    $this->tessuto = $tessuto;
    $this->taglia = $taglia; 
    parent::__construct($marca,$nome,$prezzo,$peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }

}
