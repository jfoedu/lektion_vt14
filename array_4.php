<?php
// Skapa array
// Lägga in data i array
// Skriva ut ett värde på en speciell position
include('head.php');
?>
<form method="post">
	<h3>Ange ett tal:</h3>
	<input type="text" name="number"> 
	<input type="submit" name="submit">
</form>
<?php 
$i=0;
$arr=array();
// Slumpar talen
while ($i<$_POST['number']) {
  $arr[] =  mt_rand(-100, 100);
  $i++;
}
sort($arr);
$i=0;
$sum=0;
echo "Slumpade tal soterat: ";
while ($i<$_POST['number']) {
  echo $arr[$i] . ', ';
  $sum = $sum + $arr[$i];
  $i++;
}
echo "<br>Summan av alla talen blir: " . $sum;
echo "<br>Minsta talet är: " . $arr[0];
echo "<br>Största talet är: " . $arr[count($arr)-1];
echo "<br>Medelvärdet av talet är: " . round($sum/count($arr),1);
$middle = (int)(count($arr)/2);
// kollar om talet är udda
if (count($arr) % 2) {
  //talet i mitten
  echo "<br>Medianen är: " . $arr[$middle];
} else {
  //lägg i hopp de två talen i mitten och dela med 2
  echo "<br>Medianen är: " . round(($arr[$middle] + $arr[$middle-1])/2,1);
}

include('foot.php');