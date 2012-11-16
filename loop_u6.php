<?php
include('head.php');
$i=1;
while ($i<=10){
  $j=1;
  while ($j<=10) {
    echo 'i=' . $i . ' och j='.$j.'<br>';
    $j++;
  }
  $i++;
}
include('foot.php');