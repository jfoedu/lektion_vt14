<?php
/**
 * 
 * Genomgång på hur man kan läsa och skriva til och från texfiler
 * Funktionern som gås igenom för att läsa från textfiler:
 * file 
 * file_get_contents 
 * Funktionern som gås igenom för att skriva till textfiler:
 * file_put_contents
 */
include('head.php');
// läs en textfil in i en sträng
$str = file_get_contents('text.txt');
echo nl2br($str);

// läser in en fil till en array, radbrytning ger ny "post"
$arr = file('name');
//print_r($arr);

$i=0;
while ($i < count($arr)) {
  $row = explode(';', $arr[$i]);
  // Skriver bara ut de som heter Anton i förnamn
  if ($row[0] == 'Anton') {
    $temp =  'Förnamn: '. $row[0] . ' Efternamn: ' . trim($row[1]);
    file_put_contents('antons.txt',$temp."\n",FILE_APPEND);
  }
  $i++;
}

file_put_contents('lek1_file.txt',"Det var en liten pojke som var ute och gick...\n",FILE_APPEND);

include('foot.php');