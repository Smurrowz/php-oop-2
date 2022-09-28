<?php
require_once __DIR__ . '/Prodotti/Prodotto.php';
require_once __DIR__ . '/Prodotti/Giocattolo.php';
require_once __DIR__ . '/Prodotti/CiboAnimali.php';
require_once __DIR__ . '/Prodotti/VestitoAnimali.php';

// creo alcuni prodotti
$crocchette1 = new CiboAnimali('carne di pollo', 'cani grandi', 'Crocchette BauBau', 'Bausffs', 20, 4);
$crocchette2 = new CiboAnimali('carne di manzo e pesce', 'cani medi', 'Crocchette Poke', 'Dogmander', 16, 3.5);
$crocchette3 = new CiboAnimali('riso e carne', 'cani piccoli', 'PetFood 3000', 'PF', 27.89, 6.2);
$crocchette4 = new CiboAnimali('carne di manzo e pollo', 'Cani di tutte le taglie', 'Crocchette All Inclusive', 'YourPet', 39.99, 8);
$giocattolo1 = new Giocattolo('plastica', 'osso', 'Valpet', 'Osso Volpet 4 ULTRA', 3, 0.2);
$giocattolo2 = new Giocattolo('tessuto', 'pupazzo', 'Valpet', 'Pupazzo Valpet extrafun', 5.5, 0.1);
$giocattolo3 = new Giocattolo('plastica', 'pallina', 'Yourpet', 'Palla da gioco 10cm', 7.28, 0.1);
$giocattolo4 = new Giocattolo('tessuto', 'pupazzo', 'Valpet', 'Pupazzo Cowboy ', 12, 29, 0.3);
$vestito1 = new VestitoAnimali('lana', 30, 'PetSafe Maglioncino per cani', 'PetSafe', 49.99, 0.5);
$vestito2 = new VestitoAnimali('cotone', 10, 'Vestito per cani M', 'AllPet', 29.99, 0.3);
$vestito3 = new VestitoAnimali('lana', 8, 'PetSafe Maglioncino per cani M', 'PetSafe', 39.99, 0.4);
$vestito4 = new VestitoAnimali('cotone',5, 'Vestito per cani XS', 'AllPet', 42.99, 0.2);


// li aggiungo al catalogo
$catalogo = [
  $crocchette1, $crocchette2, $crocchette3, $crocchette4, $giocattolo1, $giocattolo2, $giocattolo3, $giocattolo4, $vestito1, $vestito2, $vestito3, $vestito4,
];
// creo il carrello
$carrello = [];
$idArray = [];

// genero un carrello random senza item che si ripetano

$numeroItem = rand(1, (count($catalogo) - 1));
while (count($carrello) < $numeroItem) {
  $randomItem = $catalogo[rand(1, (count($catalogo) - 1))];
  $item = [
    'id' => $randomItem->nome,
    'quantity' => rand(1, 3),
    'item' => $randomItem,
  ];
  if (!in_array($item['id'], $idArray)) {
    $carrello[] = $item;
    $idArray[] = $item['id'];
  }
}

// calcolo il costo con e senza spedizione
$prezzoOggetti = 0;
$prezzoSpedizione = 15;
echo "<h2>Carello:</h2><ol>";
for ($i = 0; $i < count($carrello); $i++) {
  $quantitaCarrello = $carrello[$i]['quantity'];
  $el = $carrello[$i]['item'];
  $prezzoOggetti = $prezzoOggetti + ($el->prezzo * $quantitaCarrello);
  echo " <li>{$el->nome} - <strong>{$el->prezzo}€</strong> | quantitá : <strong>{$quantitaCarrello}</strong> </li>";
};
echo " </ol><h3>il prezzo parziale é di {$prezzoOggetti} € </h3>";


function getFinalPrice($prezzoOggetti,$prezzoSpedizione){
  if ($prezzoOggetti <= 70) {
    $prezzoTotale = $prezzoOggetti + $prezzoSpedizione;
    echo "<p> la spedizione é di {$prezzoSpedizione} euro </p>";
  } elseif ($prezzoOggetti > 70 && $prezzoOggetti <= 100) {
    $prezzoTotale = $prezzoOggetti;
    echo "<p> la spedizione é gratuita </p>";
  } elseif ($prezzoOggetti > 100 && $prezzoOggetti <= 200) {
    $prezzoTotale = round($prezzoOggetti * 0.85,2);
    echo "<p><mark> verrá applicato uno sconto del 15% </mark></p>";
  } elseif ($prezzoOggetti > 200) {
    $prezzoTotale = round($prezzoOggetti * 0.75,2);
    echo "<p><mark> verrá applicato uno sconto del 25% </mark></p>";
  }
  echo "<h3> il prezzo finale é di {$prezzoTotale} €</h3>";
}

getFinalPrice($prezzoOggetti,$prezzoSpedizione);
try{
  $vestito1->setTaglia(4);
}
  catch(Exception $e){
    var_dump($e);
  }
