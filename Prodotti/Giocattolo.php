<?php 

include_once __DIR__ . '/Prodotto.php';
include_once __DIR__ . '/Materiali.php';


class Giocattolo extends Prodotto
{
  use Materiale;
  public $tipo;
  public function __construct($materiale,$tipo,$marca,$nome,$prezzo,$peso)
  {
    $this->materiale = $materiale;
    $this->tipo = $tipo;
    parent::__construct($marca,$nome,$prezzo,$peso);
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
    $this->marca = $marca;
  }

}
