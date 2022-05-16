<?php
require "bdd.php";
$mac = array();
$maf = "SELECT user1, user2 from {$gh}";
$rez = mysqli_query($link , $maf) or die("о" . mysqli_error($link));
if ($rez == TRUE){
  $nir = 1;
  $mala = mysqli_num_rows($rez);
    for ($i = 0 ; $i < $mala ; ++$i){
      $ret = mysqli_fetch_row($rez);
      for ($j = 0 ; $j < 3 ; ++$j){
      $g = "$ret[$j]";
      if ($g == 1){
        $mac[] = $g;
      }
      if ($g == 2){
        $mac[] = $g;
      }
      }
    }

}
?>
