<?php
// Skapa array
// Lägga in data i array
// Skriva ut ett värde på en speciell position
include('head.php');
echo '<pre>';


$names = array ('Astrid', 'Birgitta', 'Cecilia', 'Lisa');
print_r($names);  // Funkar inte så bra utan vi måste hitta ny variant.

echo '

';
echo 'Arrayen innehåller ' . count($names) . ' st element
'; 

$i=0;
while ($i < count($names)) {      // Använd en loop 
  echo 'Namn ' . $i . ' är: ' . $names[$i] . '<br />';
  $i++;
}

$ages = array (         // Kan byta till andra nycklar än siffror.
  'Astrid' => 34,        // Lättare att se om man delar upp på flera rader.
  'Birgitta' => 23,
  'Cecilia' => 45
);
echo $ages['Astrid'] . ' är Astrids ålder
';
print_r($ages);

$i=3;
$arr1[12]=23;
while ($i < 11) {  // Loop kan användas för att sätta värden.
  $arr1[] = $i*5;
  $i++;
}
print_r($arr1);


echo '</pre';
include('foot.php');