<?php
if ($val == FALSE){
require "bdd.php";
$created =
  "CREATE TABLE $bd (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `massage1` VARCHAR(32) NOT NULL,
  `massage2` VARCHAR(32) NOT NULL,
  `user1` VARCHAR(32) NOT NULL,
  `user2` VARCHAR(32) NOT NULL
)";
$_SESSION['pnm'] = "gette";
$create = mysqli_query($link, $created) or die("ошибка" . mysqli_error($link));
}
