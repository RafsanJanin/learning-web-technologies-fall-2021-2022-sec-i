<?php
function largest($x, $y, $z)
 {
  $max = 0;

  if ($x >= $y && $x >= $z)
    $max = $x;
  if ($y >= $x && $y >= $z)
    $max = $y;
  if ($z >= $x && $z >= $y)
    $max = $z;
   echo "Largest number is: $max\n";
 }
 largest(5, 10, 2);
?>