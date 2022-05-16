<?php
$ula = $_SESSION['mail'];
$getr = $_SESSION['m'];
$us = '$us';
$o = '$o';
$r = '$r';
$l = '$l';
$val = '$val';
$link = '$link';
$ger = $ula;
$us = $g;
$l = $us.$ger;
$o = $ger.$us;
$tu = '$tu';
$ta = '$ta';
$dpo = '$dpo';
$txt = "
$dpo = array();
$tu = '$us';
require 'governing/bdd.php';
$r = 'SELECT 1 FROM {$l} LIMIT 1';
$val = mysqli_query($link, $r);
if ($val == FALSE){
  $r = 'SELECT 1 FROM {$o} LIMIT 1';
  $val = mysqli_query($link, $r);
}
echo '<a href = users/governing/massage.php>', '<div class = hav>', $tu , '</div>', '</a>';
";
$txeto = "
$dpo = array();
$tu = '$ger';
require 'governing/bdd.php';
$r = 'SELECT 1 FROM {$l} LIMIT 1';
$val = mysqli_query($link, $r);
if ($val == FALSE){
  $r = 'SELECT 1 FROM {$o} LIMIT 1';
  $val = mysqli_query($link, $r);
}
echo  '<a href = users/governing/massage.php>', '<div class = hav>', $tu , '</div>', '</a>';
";
$gram = fopen("dop_file/table/$ula.php", "a");
fwrite($gram, $txt);
fclose($gram);
$gramu = fopen("dop_file/table/$getr.php", "a");
fwrite($gramu, $txeto);
fclose($gramu);
