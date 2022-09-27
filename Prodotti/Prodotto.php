<?php

class Prodotto
{
  public $nome;
  public $marca;
  public $prezzo;
  public $peso;

  public function __construct($marca, $nome, $prezzo = 0, $peso = 0)

  {
    $this->marca = $marca ;
    $this->nome = $nome;
    $this->prezzo = $prezzo;
    $this->peso = $peso;
  }
  public function setPrice($price){
    $this->prezzo = $price;
  }
  public function getPrice(){
   return $this->prezzo;
  }
  
}
