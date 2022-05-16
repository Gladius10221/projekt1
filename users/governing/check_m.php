<?php
if (isset($_GET['mas'])){
require 'bdd.php';
if (!isset($_SESSION['mail'])){
  header("Location: http://mysite.loc/register.php");
  exit();
}
if ($_SESSION['mail'] == $_SESSION['m']){
  header("Location: http://mysite.loc");
  exit();
}
$r = "SELECT 1 FROM {$bd} LIMIT 1 ";
$val = mysqli_query($link, $r);
if ($val == FALSE){
  $re = "SELECT 1 FROM {$db} LIMIT 1 ";
  $vale = mysqli_query($link, $re);
}
if ($vale == FALSE){
  require "created.php";
  require "create_file.php";
}
}
