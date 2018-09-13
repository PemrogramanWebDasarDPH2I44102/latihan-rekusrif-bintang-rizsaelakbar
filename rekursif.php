<?php
$batasnya = 5;
function rekursif($i = 1){
  global $batasnya;
  echo "*";
  $i++;
  if($i<=$batasnya){
    rekursif($i);
  }
  else{
    echo"<br>";
    $batas--;
    if ($batasnya != 0){
      rekursif();
    }
  }
}
rekursif();
/*====================================================================================*/
echo "<br>";

$batas = 1;
function rekursif2($x = 1){
  global $batas;
  echo "$x";
  $x++;
    if ($x<=$batas){
      rekursif2($x);
    }
    else{
      echo"<br>";
      $batas++;
      if ($batas <= 5){
        rekursif2();
      }
    }
}
rekursif2();
?>
