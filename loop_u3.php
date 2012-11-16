<?php
include('head.php');
echo 'Summera alla positiva tal som är delbara med 3 tills summan blir mer än eller lika med 1000. Ange antal tal som behövs.';
$summa=0;
$tal=3;
$antal=0;
while ($summa <= 1000) {
  $summa=$summa+$tal;
  $tal=$tal+3;
  $antal++;
}
echo 'Det behövs ' . $antal . ' st tal för att summa skall bli ' . $summa;
include('foot.php');