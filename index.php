<?php 
require_once __DIR__ . '/Prodotti/Prodotto.php';
require_once __DIR__ . '/Prodotti/Giocattolo.php';
require_once __DIR__ . '/Prodotti/CiboAnimali.php';
require_once __DIR__ . '/Prodotti/VestitoAnimali.php';
// creo alcuni prodotti
$crocchette1 = new CiboAnimali('carne di pollo','cani grandi','Crocchette BauBau','Bausffs',20,4);
$crocchette2 = new CiboAnimali('carne di manzo e pesce','cani medi','Crocchette Poke','Dogmander',16,3.5);
$giocattolo1 = new Giocattolo('plastica','osso','Valpet','Osso Volpet 4 ULTRA',3,0.2);
$giocattolo2 = new Giocattolo('tessuto','pupazzo','Valpet','Pupazzo Valpet extrafun',5.5,0.1);
$vestito1= new VestitoAnimali('lana','cani sopra i 30kg','PetSafe Maglioncino per cani','PetSafe',49.99,0.5);
$vestito2= new VestitoAnimali('cotone','cani dai 10 ai 15kg','vestito per cani M','AllPet',29.99,0.3);


// li aggiungo al catalogo
$catalogo = [
  $crocchette1,$crocchette2,$giocattolo1,$giocattolo2,$vestito1,$vestito2
];
// creo il carrello
$carrello = [
  $crocchette1, $giocattolo1,$giocattolo2,$vestito1
];
// calcolo il costo con e senza spedizione
$prezzoOggetti = 0;
$prezzoSpedizione = 15;
echo "<h2>Carello:</h2>";
for ($i=0; $i < count($carrello) ; $i++) { 
  $el = $carrello[$i];
  $prezzoOggetti = $prezzoOggetti + $el->prezzo;
  echo " ** {$el->nome} - {$el->prezzo}€ **<br>";
};
 echo " <h3>il prezzo parziale é di {$prezzoOggetti} euro </h3>";
if($prezzoOggetti >= 50){
  $prezzoTotale = $prezzoOggetti;
}else{
  $prezzoTotale = $prezzoOggetti + $prezzoSpedizione;
}
echo "<h3> il prezzo finale é di {$prezzoTotale} euro</h3>";

var_dump($catalogo,$carrello,$prezzoOggetti,$prezzoTotale);

