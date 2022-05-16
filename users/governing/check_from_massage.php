<?php
$us = '$us';
$bd = $_SESSION['bd'];
$db = $_SESSION['db'];
$ula = $_SESSION['mail'];
require 'bdd.php';
$r = "SELECT 1 FROM {$bd} LIMIT 1 ";
$val = mysqli_query($link, $r);
$gh = $bd;
if ($val == FALSE){
  $qwe = 1;
  $gh = $db;
  $re = "SELECT 1 FROM {$db} LIMIT 1 ";
  $vale = mysqli_query($link, $re);
}
if ($vale == FALSE){
  require "created.php";
}
if ($_SESSION['pnm'] == 'gette'){
  require "selekt.php";
  unset($_SESSION['pnm']);
}
