<?php

        
$dpo = array();
$tu = 'posdorka';
require 'governing/bdd.php';
$r = 'SELECT 1 FROM posdorkazabrodotskij LIMIT 1';
$val = mysqli_query($link, $r);
if ($val == FALSE){
  $r = 'SELECT 1 FROM zabrodotskijposdorka LIMIT 1';
  $val = mysqli_query($link, $r);
}
echo '<a href = users/governing/massage.php>', '<div class = hav>', $tu , '</div>', '</a>';
