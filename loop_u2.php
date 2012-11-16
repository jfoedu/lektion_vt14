<?php
include('head.php');
$i=1;
echo '<table style="width: 80px">';
while ($i <= 10) {
  echo '
  <tr>
  <td>' . $i . 'x7</td>
  <td>=</td>
  <td>' . ($i*7) . '</td>
  </tr>';
  $i++;
}
echo '</table>';
include('foot.php');