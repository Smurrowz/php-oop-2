<?php

include_once __DIR__ . '/Prodotto.php';
include_once __DIR__ . '/Materiali.php';

class VestitoAnimali extends Prodotto
{
  use Materiale;
  public $taglia;
  public function __construct($materiale, $taglia, $nome, $marca, $prezzo, $peso)
  {
    $this->materiale = $materiale;
    $this->taglia = $taglia;
    parent::__construct($marca, $nome, $prezzo, $peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }
  public function setTaglia($taglia)
  {
    if (!is_numeric($taglia) || !is_int($taglia)) {
      throw new Exception('LA TAGLIA INSERITA NON É UN NUMERO');
    }else if ($taglia <= 0){
      throw new Exception('LA TAGLIA DEVE ESSERE MAGGIORE DI 0');
    } else{
      $this->taglia = $taglia;

    }

    


  }
}
